<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SitePage extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->_initCurrentModel('sitePageModel');

        $this->lang->load('form_key');
        $this->form_validation->set_rules('name', "lang:name", 'trim|min_length[2]|max_length[20]|xss_clean');
		$this->siteInfos = $this->currentModel->getAllInfos('site', 'id');
		$this->operationMenus = array('spider', 'downFile', 'localPage', 'edit', 'delete');

		$this->baseCacheDir = $this->appInfos['spider']['path'] . 'cache/';
	}

	/**
	 * List the manager infos
	 *
	 * @return void
	 */
	public function listinfo()
	{
		$this->_listinfo();
	}

	/**
	 * Add a manager
	 *
	 * @return void
	 */
	public function add()
	{
		$this->_checkExist('name');
		$this->_add();
	}

	/**
	 * Edit a manager
	 *
	 * @return void
	 */
	public function edit()
	{
		$this->_checkExist('name');
		$this->_edit();
	}

    /**
	 * 删除管理员
	 *
	 * @return void
	 */
	public function delete()
	{
        $this->_delete();
	}

	/**
	 * Spider the page
	 *
	 * @return void
	 */
	public function spider()
	{
		$currentInfo = $this->_getInfoById();
		
		$sourceCacheDir = $this->baseCacheDir . $currentInfo['site_id'] . '/';
		$this->_makeDir($sourceCacheDir);

		$sourceFile = $sourceCacheDir . $currentInfo['id'] . '.html';

		if (!file_exists($sourceFile)) {
			$content = $this->curl_get_contents($currentInfo['pageurl']);//$sourceFile);//file_get_contents($currentInfo['pageurl']);
			file_put_contents($sourceFile, $content);
		}

		$this->_spiderFiles($sourceFile, $currentInfo);
		exit('spider page finish');
	}

	protected function curl_get_contents($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $data = curl_exec($ch);
        //var_dump($data); var_dump($url);
        curl_close($ch);
        return $data;
    }

	/**
	 * Down the files of page
	 *
	 * @return void
	 */
	public function downFile()
	{
		$currentInfo = $this->_getInfoById();

		$where = array('page_id' => $currentInfo['id'], 'downtime <' => 5); 
		$fileInfos = $this->currentModel->getAllInfos('site_file', 'id', $where);
		if (empty($fileInfos)) {
			exit('down file finish');
		}
		foreach ($fileInfos as $fileInfo) {
			$updateData['downtime'] = $fileInfo['downtime'] + 1;
			$downResult = $this->_downFile($fileInfo['urlfull'], $fileInfo['pathlocal']);
			if ($downResult) {
				$updateData['isdown'] = 1;
			}

			$this->currentModel->editInfo($updateData, array('id' => $fileInfo['id']), 'site_file');
		}
		exit('down file execute...');
	}

	/**
	 * Change the page to the local
	 *
	 * @return void
	 */
	public function localPage()
	{
		$currentInfo = $this->_getInfoById();
		
		$sourceCacheDir = $this->baseCacheDir . $currentInfo['site_id'] . '/';
		$sourceFile = $sourceCacheDir . $currentInfo['id'] . '.html';
		$targetFile = $this->uploadPath . 'sitePage/' . $currentInfo['site_id'] . '/' . $currentInfo['id'] . '.html';

		if (!file_exists($sourceFile)) {
			$this->_showMessage('file do not exists');
		}

		$content = file_get_contents($sourceFile);
		$replaceInfos = array();
		$where = array('page_id' => $currentInfo['id'], 'isdown' => 1); 
		$fileInfos = $this->currentModel->getAllInfos('site_file', 'id', $where);
		foreach ($fileInfos as $fileInfo) {
			$replaceInfos[$fileInfo['url']] = $fileInfo['urllocal'];
		}
		$content = str_replace(array_keys($replaceInfos), array_values($replaceInfos), $content);
		file_put_contents($targetFile, $content);

		exit('local page finish');
	}

	/**
	 * Spider the files of the page
	 *
	 * @param string $content
	 * @return bool
	 */
	protected function _spiderFiles($sourceFile, $pageInfo)
	{
		$content = htmlspecialchars_decode(file_get_contents($sourceFile));
		$pattern = '@src=.*"(?P<url>.*)".*@Us';
		$pattern2 = "@src=.*'(?P<url>.*)'.*@Us";
		$pattern3 = '@<link.*type="text/css".*href="(?P<css>.*)".*>@Us';
		$pattern4 = "@url\(.*'(?P<images>.*)'.*\)@Us";
		$pattern5 = '@url\(.*"(?P<images>.*)".*\)@Us';
		$pattern6 = '@url\((?P<images>.*)\)@Us';
		$pattern7 = "@<link.*href='(?P<css>.*\.css)'.*>@Us";
		preg_match_all($pattern, $content, $url);
		preg_match_all($pattern2, $content, $url2);
		preg_match_all($pattern3, $content, $url3);
		preg_match_all($pattern4, $content, $url4);
		preg_match_all($pattern5, $content, $url5);
		preg_match_all($pattern6, $content, $url6);
		preg_match_all($pattern7, $content, $url7);

		$data = array_merge($url['url'], $url2['url'], $url3['css'], $url4['images'], $url5['images'], $url6['images'], $url7['css']);
		$data = array_unique($data);
		var_dump($data);

		foreach ($data as $url) {
			$info = array();
			$url = trim($url);
			$url = str_replace("'", '', $url);
			$url = str_replace('"', '', $url);
			$url = strpos($url, '?') !== false ? substr($url, 0, strpos($url, '?')) : $url;
			$urlfull = ((strpos($url, 'http') !== 0) && !empty($pageInfo['baseurl'])) ? $pageInfo['baseurl'] . $url : $url;
			$localFile = 'sitePage/' . $pageInfo['site_id'] . '/' . str_replace('http://', '/', $urlfull);
			$info['url'] = $url;
			$info['urlfull'] = str_replace('../', '/', $urlfull);
			$info['site_id'] = $pageInfo['site_id'];
			$info['page_id'] = $pageInfo['id'];
			$info['urllocal'] = str_replace('../', '/', $this->uploadUrl . $localFile);
			$info['pathlocal'] = str_replace('../', '/', $this->uploadPath . $localFile);

			$this->currentModel->addInfo($info, 'site_file', true);
		}
	}

	/**
	 * Initial some info before add
	 *
	 * @return void
	 */
	protected function _initInfo($siteId = 0)
	{
		$this->selectSite = $this->_getSelectElement($this->siteInfos, 'id', 'name', $siteId, true);
	}

	/**
	 * Format the info
	 *
	 * @see AdminController::_formatInfo()
	 * @param  array $info
	 * @param  boolean $isWrite
	 * @return array
	 */
	protected function _formatInfo($info, $isWrite = false)
	{
		$this->selectSite = $this->_getSelectElement($this->siteInfos, 'id', 'name', $info['site_id']);

		return $info;
	}
		
	/**
	 * Format the element of the infos
	 *
	 * @param  array $infos the infos
	 * @return array | false formated infos
	 */
	protected function _formatInfos(array $infos)
	{
		if (is_array($infos) && !empty($infos)) {
			foreach ($infos as $key => $info) {
				$info['siteId'] = !empty($this->siteInfos[$info['site_id']]['name']) ? $this->siteInfos[$info['site_id']]['name'] : $info['site_id'];
				$info['siteUrl'] = !empty($this->siteInfos[$info['site_id']]['siteurl']) ? $this->siteInfos[$info['site_id']]['siteurl'] : $info['site_id'];
				$info['localUrl'] = $this->uploadUrl . 'sitePage/' . $info['site_id'] . '/' . $info['id'] . '.html';
				$infos[$key] = $info;
			}
		}
		return $infos;
	}
}