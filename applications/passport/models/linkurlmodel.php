<?php
class LinkurlModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'linkurl';
		parent::__construct($data);		
	}
	
	/**
	 * Initial the fields for manger
	 * 
	 * @return array the field infos of manager
	 */
	protected function _fieldInfos()
	{
		$typeInfos = array(
			'web' => array('key' => 'web', 'value' => '平台友链'),
			'nova' => array('key' => 'nova', 'value' => '诺瓦友链'),
			'web1' => array('key' => 'web1', 'value' => '平台友链1'),
		);

		$fieldInfos['fields'] = array(
			'id' => array('name' => '友链ID'),			
			'linkurl_type' => array('name' => '友链类型', 'infos' => $typeInfos),
			'name' => array('name' => '友链名称'),
			'url' => array('name' => '链接地址'),
			'logo' => array('name' => '友链logo'),
			'description' => array('name' => '描述'),
			'username' => array('name' => '链接属主'),
			'listorder' => array('name' => '排序'),
			'linkurl_status' => array('name' => '状态', 'infos' => array('0' => '<font class="red">未通过</font>', '1' => '<font class="green">通过</font>')),
			'add_time' => array('name' => '添加时间'),
		);
		$fieldInfos['fieldList'] = array('id', 'name', 'linkurl_type', 'url', 'logo', 'listorder', 'add_time', 'description', 'linkurl_status');
		$fieldInfos['fieldChanges'] = array('name', 'linkurl_type', 'url', 'logo', 'listorder', 'add_time', 'description', 'linkurl_status');
		
		return $fieldInfos;
	}
}