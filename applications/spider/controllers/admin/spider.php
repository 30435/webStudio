<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Spider extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();

		$this->_loadModel(APPCODE, 'spiderModel');

		$jobId = $this->input->get_post('id');
		$this->currentJob = $this->spiderModel->getInfo(array('id =' => $jobId), 'job');
		if ($this->currentJob['status'] < 1) {// || ($this->autoSpider && $this->currentJob['status'] != 2)) {
			$this->message('Error job status!');
		}

		$this->siteId = $this->currentJob['site_id'];
		$baseCacheDir = $this->appInfos['spider']['path'] . 'cache/';
		$this->currentDay = date('Ymd', $this->time);

		$this->cacheDirs = array(
			'glist' => $baseCacheDir . $this->siteId . '/',
			'gpage' => $baseCacheDir . $this->siteId . '/',
			'file' => $this->uploadPath . APPCODE . '/' . $this->siteId . '/' . $this->currentDay . '/'
		);
		foreach ($this->cacheDirs as $cacheDir) {
			$this->_makeDir($cacheDir);
		}
	}

	/**
	 * Get list pages action, this action is oparated based the rules['listrule']['list'] value
	 * 
	 * @return    if $this->model->rules['listrule']['list'] is empty, stop action and show 'listrule list error',
	 */
	public function spiderList()
	{
		if (empty( $this->currentJob['list_url'])) {
			$this->message('list url list error');
		}

		$listUrls = $this->_getListUrls();
		$listPageNum = count($listUrls);
		$listPageNumValid = 0;
		foreach ($listUrls as $listUrl) {
			$urlStatus = $this->_getUrlStatus($listUrl);
			if ($urlStatus == false) {
				continue;
			}
			
			$suffixMark = (int) ($this->time / 1200);
			$baseFile = md5($listUrl . $suffixMark) . '.htm';
			$cacheFile = $this->cacheDirs['glist'] . $baseFile;

			if (!file_exists($cacheFile)) {
				$content = file_get_contents($listUrl);
				$content = $this->_changeCode($content);
				file_put_contents($cacheFile, $content);
			}
			$data = array(
				'job_id' => $this->currentJob['id'],
				'base_file' => $baseFile,
				'list_url' => $listUrl,
				'inputtime' => $this->time
			);
			$this->spiderModel->addListUrl($data);
			$listPageNumValid++;
		}

		//$this->updateResult('listpage', $listPageNum, $listPageNumValid);
		$this->_showMessage('spiderList finished!');
	}

	/**
	 * From the list pages, get the base infos such as 'title', 'conent page', 'thumb'. 
	 */
	function dealList()
	{
		if (empty($this->currentJob['list_start']) || empty($this->currentJob['list_end']) || empty($this->currentJob['pattern'])) {
			$this->_showMessage('list_start, list_end, pattern empty');
		}

		$validListUrls = $this->spiderModel->getValidListUrls($this->currentJob['id']);
		if (empty($validListUrls)) {
			$this->_showMessage('no glist to spider');
		} else {
			$listAreaPattern = '@' . $this->currentJob['list_start'] . '.*' . $this->currentJob['list_end'] . '@Us';
			$urlTitleThumb = trim($this->currentJob['pattern']);
			$urlTitleThumbReplace = array(
				'{*}' => '.*',
				'{URL}' => '(?P<url>.*)',
				'{TITLE}' => '(?P<title>.*)',
				'{THUMB}' => '(?P<thumb>.*)',		
			);
			$listContentPattern = str_replace(array_keys($urlTitleThumbReplace), array_values($urlTitleThumbReplace), $urlTitleThumb);
			$listContentPattern = '@' . $listContentPattern . '@Us';
			$listSpiderNum = count($validListUrls);
			$listSpiderNumValid = 0;

			$validKeys = '';
			foreach ($validListUrls as $validKey => $validValue) {
				$validKeys .= "'{$validValue['id']}',";
				$baseFile = $validValue['base_file'];
				$cacheFile = $this->cacheDirs['glist'] . $baseFile;
				if (!file_exists($cacheFile)) {
					continue;
				}
				
				$listContent = file_get_contents($cacheFile);
				preg_match($listAreaPattern, $listContent, $listArea);

				if (!empty($listArea) && !empty($listContentPattern)) {
					$this->_listContent($listArea[0], $listContentPattern);
				}
				
				$listSpiderNumValid++;
				//@unlink($cacheFile);
			}
			
			//$this->updateResult('listspider', $listSpiderNum, $listSpiderNumValid);
			$this->_showMessage('list spider finished');
		}
	}

	public function spiderContent()
	{
		$where = array("job_id = " => $this->currentJob['id'], "status = " => 0);
		$listContents = $listUrls = $this->spiderModel->getListContents($where);//$this->model->validGpages();
		//print_r($validGpages);
		if (empty($listContents)) {
			$this->_showMessage('no content to spider');
		} else {
			$listContentNum = count($listContents);
			$listContentNumValid = 0;
			foreach ($listContents as $contentId => $listContent) {
				$baseFile = $listContent['content_key'] . '.htm';
				$cacheFile = $this->cacheDirs['gpage'] . $baseFile;
				if (!file_exists($cacheFile)) {
					$pageurl = $listContent['pageurl'];
					$urlStatus = $this->_getUrlStatus($pageurl);
					if ($urlStatus == false) {
						continue;
					}

					$content = trim(file_get_contents($pageurl));
					$content = $this->_changeCode($content);
					if (!empty($content)) {
						file_put_contents($cacheFile, $content);
					}
				}

				if (file_exists($cacheFile)) {
					$where = array('id = ' => $contentId);
					$data = array('status' => 1);
					$this->spiderModel->editInfo($data, $where, 'content');
					$listContentNumValid += 1;
				}
			}
			
			//$this->updateResult('contentpage', $contentPageNum, $contentPageNumValid);
		}
	
		$this->_showMessage('gpage finished');
	}
	
	public function dealContent()
	{
		$this->currentCrule = $this->spiderModel->getInfo(array('id =' => $this->currentJob['crule_id']), 'crule');
		if (empty($this->currentCrule) || empty($this->currentCrule['pattern'])) {
			$this->message('no crule');
		}

		$where = array('job_id = ' => $this->currentJob['id'], 'status = ' => 1);
		$listContents = $this->spiderModel->getListContents($where);
		if (empty($listContents)) {
			$this->_showMessage('no content to deal');
		} else {
			$patternReplace = array(
				'{*}' => '.*',
				'{CONTENT}' => '(?P<content>.*)',
				'{INPUTTIME}' => '(?P<inputtime>.*)',
				'{AUTHOR}' => '(?P<author>.*)',
				'{COPYFROM}' => '(?P<copyfrom>.*)',
			);
			$pattern = '@' . trim(str_replace(array_keys($patternReplace), array_values($patternReplace), $this->currentCrule['pattern'])) . '@Us';
			$patternFile = $this->currentCrule['pattern_file'];
			$patternFileReplace = array(
				'{*}' => '.*',
				'{PIC}' => '(?P<pic>.*)',
			);
			$patternFile = str_replace(array_keys($patternFileReplace), array_values($patternFileReplace), $patternFile);
			$patternFile = '@' . $patternFile . '@Us';

			$listContentNum = count($listContents);
			$listContentNumValid = 0;
			foreach ($listContents as $contentId => $listContent) {
				$baseFile = $listContent['content_key'] . '.htm';
				$cacheFile = $this->cacheDirs['gpage'] . $baseFile;
				if (!file_exists($cacheFile)) {
					$where = array('id = ' => $contentId);
					$data = array('status' => 0);
					$this->spiderModel->editInfo($data, $where, 'content');
				} else {
					$content = file_get_contents($cacheFile);
					preg_match($pattern, $content, $contentSources);
					$contentParse = $this->_contentParse($contentSources, $listContent['content_key'], $patternFile);
					if ($contentParse) {
						$listContentNumValid++;
					}
				}
			}
			
			/*$this->updateResult('contentspider', $contentspiderNum, $contentspiderNumValid);
			if (!empty($noPageIds)) {
				$noPageIds = trim(trim($noPageIds), ',');
				$where = "`id` IN ($noPageIds)";
				$this->db->query("UPDATE `$this->contentTable` SET `status` = 0, `is_mulpage` = 0 WHERE $where");
			}
			return ;*/		
			$this->_showMessage('spage finished');
		}
	}

	/**
	 * Ask Force deal content
	 *
	 * @return void
	 */
	public function askForce()
	{
		$where = array('job_id = ' => $this->currentJob['id'], 'status` >= ' => 1);
		$data = array('status' => 1);

		$this->spiderModel->editInfo($data, $where, 'content');
		$this->_showMessage('ask successful');
	}
	
	public function spiderFile()
	{
		$where = array('job_id = ' => $this->currentJob['id'], 'status = ' => 2);
		$listContents = $this->spiderModel->getListContents($where, 20);
		if (empty($listContents)) {
			$this->_showMessage('no content to spider file');
		} else {
			$fileInfos = $this->_getFileInfos($listContents);
			$filespiderNum = count($fileInfos);
			$filespiderNumValid = 0;
			$failContentKeys = array();
			foreach ($fileInfos as $fileInfo) {
				$fullPath = $this->uploadPath . $fileInfo['path'];
				if (file_exists($fullPath)) {
					$filespiderNumValid++;
					continue;
				}

				$getFileResult = $this->_downFile($fileInfo['remote_url'], $fullPath);
				if (empty($getFileResult)) {
					$failContentKeys[] = $fileInfo['content_key']; 
				} else {
					$filespiderNumValid++;
				}
			}

			foreach ($listContents as $contentId => $listContent) {
				if (!in_array($listContent['content_key'], $failContentKeys)) {
					$where = array('id' => $contentId);
					$data = array('status' => 3);
					$this->spiderModel->editInfo($data, $where, 'content');
				}
			}
			//$this->updateResult('filespider', $filespiderNum, $filespiderNumValid);
			$this->_showMessage('sfiles finished');
		}
	}
	
	/**
	 * Get the url list
	 *
	 * @return array
	 */
	protected function _getListUrls()
	{
		$lists = explode("\n", $this->currentJob['list_url']);

		$listUrls = array();
		foreach ($lists as $list) {
			$list = trim($list);
			if (strpos($list, '##--') !== false) {
				continue;
			}
			
			preg_match('@{(\d{1,5})-(\d{1,5})}@', $list, $listInfo);
			if (!empty($listInfo)) {
				$pageMin = ($listInfo[1] < 1) ? 1 : $listInfo[1];
				$pageMax = ($listInfo[2] - $pageMin > 200) ? 20 : $listInfo[2];
				for ($i = $pageMin; $i < $pageMax; $i++) {
					$listUrl = preg_replace('@{(\d{1,5})-(\d{1,5})}@', $i, $list);
					$listUrls[] = $listUrl;
				}
			} else {
				$listUrls[] = $list;
			}
		}

		return $listUrls;
	}

	/**
	 * Deal the list page content
	 *
	 * @param string $listArea
	 * @param string $listContentPattern
	 */
	protected function _listContent($listArea, $listContentPattern)
	{
		preg_match_all($listContentPattern, $listArea, $listContent);
		$urls = isset($listContent['url']) ? $listContent['url'] : array();
		$titles = isset($listContent['title']) ? $listContent['title'] : array();
		$thumbs = isset($listContent['thumb']) ? $listContent['thumb'] : array();
		
		for ($i = 0; $i < count($urls); $i++) {
			$url = isset($urls[$i]) ? trim($urls[$i]) : '';
			$url = (!empty($url) && strpos($url, 'http') === false) ? $this->currentJob['content_urlpre'] . $url : $url;
			$title = isset($titles[$i]) ? trim($titles[$i]) : '';
			$thumb = isset($thumbs[$i]) ? trim($thumbs[$i]) : '';
			$thumb = (!empty($thumb) && strpos($thumb, 'http') === false) ? $this->currentJob['content_urlpre'] . $thumb : $thumb;
			if (empty($title) || empty($url)) {
				continue;
			}

			$contentKey = md5($url);
			$thumbLocal = '';
			if (!empty($thumb)) {
				$thumbLocal = $this->_saveFile($thumb, $contentKey, 1);
			}

			$data = array(
				'job_id' => $this->currentJob['id'],
				'content_key' => $contentKey,
				'pageurl' => $url, 
				'title' => $title, 
				'thumb' => $thumb,
				'thumb_local' => $thumbLocal,
			);
			$this->spiderModel->addContent($data);
		}

		//$this->updateResult('listcontent', $listcontentNum, $listcontentNumValid);*/
	}
	
	/**
	 * Save the file info
	 *
	 * @return bool
	 */
	protected function _saveFile($remoteUrl, $contentKey, $isThumb = 0)
	{
		$localPath = '';
		if (empty($remoteUrl) || empty($contentKey)) {
			return $localPath;
		}
		$fileKey = md5($remoteUrl);

		$where = array('file_key' => $fileKey);
		$fileInfo = $this->spiderModel->getInfo($where, 'file');

		if (!empty($fileInfo)) {
			$localPath = $fileInfo['path'];
			return $localPath;
		}

		$pathInfo = pathinfo($remoteUrl);
		$validExts = array('css', 'js', 'jpg', 'gif', 'png');
		if (!in_array($pathInfo['extension'], $validExts)) {
			return $localPath;
		}

		$localPath = 'websource/' . $this->siteId . '_' . $isThumb . '/' . $this->currentDay . '/' . $this->_createSingleRandomStr() . '.' . $pathInfo['extension'];
		$data = array(
			'file_key' => $fileKey,
			'remote_url' => $remoteUrl,
			'path' => $localPath,
			'extname' => $pathInfo['extension'],
			'content_key' => $contentKey,
			'type' => $isThumb,
		);
		$this->spiderModel->addInfo($data, 'file');
		return $localPath;
	}

	protected function _getFileInfos($listContents)
	{
		$fileInfos = array();
		foreach ($listContents as $contentId => $listContent) {
			$where = array('content_key = ' => $listContent['content_key']);
			$infos = $this->spiderModel->getInfos('file', $where, array(), 1, 500, '', 'id');//getListContents($where, 20);
			$fileInfos = array_merge($fileInfos, $infos['infos']);
		}
		
		return $fileInfos;
	}

	/**
	 * Deal the source content 
	 *
	 * @param string $contentSources
	 * @param string $contentKey
	 * @return boolean
	 */
	protected function _contentParse($contentSources, $contentKey, $patternFile)
	{
		if (!is_array($contentSources) || empty($contentSources)) {
			return false;
		}
		
		$elements = array('inputtime', 'content');//, 'author', 'copyfrom');
		foreach ($elements as $element) {
			$elementValue = $contentSources[$element];
			$func = '_' . $element;
			$contents[$element] = $this->$func($elementValue, $contentKey, $patternFile);
		}

		if (!empty($contents['content'])) {
			//$contents = daddslashes($contents, true);
			//$content['content'] = $this->stringChange($contents['content']);
			$contents['status'] = 2;
			//$contents['description'] = trim($this->base->cutstr(strip_tags($contents['content']), 250, ''));
			//$contents['keywords'] = $this->getKeywords($contents['content']);
			$contents['is_force'] = 0;
			//$this->db->update($this->contentTable, $contents, "`id`= '$contentId'");
			$where = array('content_key' => $contentKey);
			$data = array('status' => 2);
			$this->spiderModel->editInfo($data, $where, 'content');
			return true;
		}
		return false;
	}

	/**
	 * Deal the content
	 * 
	 * @param string $value
	 * @param string $contentKey
	 * @return string | null 
	 */
	protected function _content($value, $contentKey, $patternFile = '')
	{
		//$value = trim(htmlspecialchars_decode($value));
		$value = preg_replace('@(<style.*>.*</style>)@iUs', '', $value);
		$value = preg_replace('@(<script.*>.*</script>)@iUs', '', $value);

		/*$remainTags = '';
		foreach ($this->cleanHtmls as $cleanHtml) {
			$remainTags .= htmlspecialchars_decode($cleanHtml['value']);
		}
		$value = strip_tags($value, $remainTags);*/
		if (empty($value)) {
			return ;
		}
		
		$replaceSource = $this->currentCrule['replace_source'];
		$replaceTarget = $this->currentCrule['replace_target'];
		if (!empty($replaceSource)) {
			$patternSource = explode('{|}', str_replace(array('(', '{*}', ')', '{#*#}'), array('\(', '.*', '\)', '(.*)'), $replaceSource));
			$patternTarget = explode('{|}', str_replace('{RETAIN}', '\\1', $replaceTarget));
			foreach ($patternSource as $key => $pattern) {
				$patternsReg = '@' . $pattern . '@is';
				$patternsRep = $patternTarget[$key];
				$value = preg_replace($patternsReg, $patternsRep, $value);
			}
		}

		/*$cleanHtmls = $this->job['contentrule'][$cruleId]['clean_html'];
		$cleanHtmls = explode(',', $cleanHtmls);

		if (is_array($cleanHtmls) && !empty($cleanHtmls)) {
			foreach ($this->cleanHtmls as $key => $cleanHtml) {
				if (in_array($key, $cleanHtmls)) {
					$value = preg_replace($cleanHtml['reg'], $cleanHtml['rep'], $value);
				}
			}
		}*/

		$value = $this->_getFiles($value, $contentKey, $patternFile);
		return $value;
	}
	
	protected function _inputtime($value, $contentKey, $patternFile = '')
	{
		$patternTime = $this->currentCrule['pattern_time'];
		if (empty($patternTime) || empty($value)) {
			return $value;
		}
		
		$patternSource = array('YYYY', 'MM', 'DD', 'HH', 'II', 'SS');
		$patternTarget = array('(?P<y>\d{4})', '(?P<m>\d{1,2})', '(?P<d>\d{1,2})', '(?P<h>\d{1,2})', '(?P<i>\d{1,2})', '(?P<s>\d{1,2})');
		$pattern = '@' . str_replace($patternSource, $patternTarget, $patternTime) . '@';

		preg_match($pattern, $value, $match);
		$value = empty($match) ? $value : mktime($match['h'], $match['i'], $match['s'], $match['m'], $match['d'], $match['y']);

		return $value;
	}
	
	protected function _author($value, $contentKey, $patternKey = '')
	{
		return $value;
	}

	protected function _copyfrom($value, $contentKey, $patternFile = '')
	{
		return $value;
	}
	
	protected function _getFiles($value, $contentKey, $patternFile)
	{
		if (empty($value) || empty($contentKey) || empty($patternFile)) {
			return ;
		}

		preg_match_all($patternFile, $value, $picInfos);
		if (is_array($picInfos['pic']) && !empty($picInfos['pic'])) {
			foreach ($picInfos['pic'] as $picUrl) {
				$url = trim($picUrl);
				if (empty($url)) {
					continue ;
				}

				$url = (!empty($url) && strpos($url, 'http') === false) ? $this->currentJob['content_urlpre'] . $url : $url;
				$urlLocal = $this->_saveFile($url, $contentKey);
				$fileInfos[$picUrl] = $this->uploadUrl . $urlLocal;		
			}

			$value = str_replace(array_keys($fileInfos), array_values($fileInfos), $value);
		}
		return $value;
	}
}