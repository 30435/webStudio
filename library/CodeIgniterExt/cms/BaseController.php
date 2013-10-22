<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base_Controller extends CommonController
{
	public function __construct()
	{
		parent::__construct();

        $this->metaInfos = array(
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'description', 'content' => 'passport description'),
			array('name' => 'keywords', 'content' => 'passport keywords'),
			array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
		);
        $this->headerTitle = 'content title';

        $this->urlForward = $this->baseUrl;
		$this->load->library('form_validation');
		$this->categoryInfos = $this->_getCategoryInfos();
		$this->modelInfos = $this->categoryModel->modelInfos;
	}

	/**
	 * Get the settings of the passport application
	 *
	 * @return array the settings
	 */
	protected function _getSettings()
	{

	}
	
	/**
	 * Initial the model info
	 * 
	 * @return void
	 */
	protected function _initModel($catid = 0)
	{
		$this->catid = empty($catid) ? $this->input->get_post('catid') : $catid;
		$this->currentCategoryInfo = isset($this->categoryInfos[$this->catid]) ? $this->categoryInfos[$this->catid] : false;
		
		if (empty($this->currentCategoryInfo)) {
			$this->_messageInfo('栏目不存在！');
		}

		$modelid = isset($this->currentCategoryInfo['modelid']) ? $this->currentCategoryInfo['modelid'] : false;
		$this->modelInfo = isset($this->modelInfos[$modelid]) ? $this->modelInfos[$modelid] : false;
		if (empty($this->modelInfo)) {
			$this->_showMessage('模型错误！');
		}
		$this->_initCurrentModel($this->modelInfo['table']);
	}

}