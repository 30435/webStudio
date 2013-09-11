<?php
abstract class CmsNewModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'new';
		parent::__construct($data);		
	}
				
	/**
	 * Initial the fields for menu
	 * 
	 * @return array the field infos of menu
	 */
	protected function _fieldInfos()
	{
		$copyfromInfos = array(
			'diy' => array('key' => 'diy', 'value' => '原创'),
			'web' => array('key' => 'web', 'value' => '网络'),
		);
		$positionInfos = array(
			'index' => array('key' => 'index', 'value' => '首页焦点推荐'),
			'show' => array('key' => 'show', 'value' => '内容页推荐'),
		);
		$templateInfos = array(
			'show' => array('key' => 'show', 'value' => '标准内容页模板'),
			'nova/show' => array('key' => 'page_aboutus', 'value' => '诺瓦内容页模板'),
		);
		$fieldInfos['fields'] = array(
			'id' => array('name' => '内容ID'),
			'catid' => array('name' => '所属栏目'),
			'title' => array('name' => '标题'),
			'thumb' => array('name' => '缩略图'),
			'keywords' => array('name' => '关键字'),
			'description' => array('name' => '描述'),
			'url' => array('name' => '内容URL'),
			'listorder' => array('name' => '排序'),
			'content' => array('name' => '内容'),
			'editor' => array('name' => '编辑'),
			'username' => array('name' => '管理员帐号'),
			'copyfrom' => array('name' => '来源', 'infos' => $copyfromInfos),
			'position' => array('name' => '推荐位', 'infos' => $positionInfos),
			'template' => array('name' => '模板', 'infos' => $templateInfos),
			'status' => array('name' => '状态'),
			'inputtime' => array('name' => '录入时间'),
			'updatetime' => array('name' => '更新时间'),
		);
		$fieldInfos['fieldList'] = array('id', 'catid', 'title', 'url', 'listorder', 'username', 'updatetime', 'inputtime');
		$fieldInfos['fieldChanges'] = array('catid', 'title', 'thumb', 'template', 'copyfrom', 'description', 'keywords', 'content', 'template', 'position');
		
		return $fieldInfos;
	}
}