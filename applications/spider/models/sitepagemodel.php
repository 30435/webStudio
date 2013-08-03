<?php
class SitePageModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'site_page';
		parent::__construct($data);		
	}
	
	/**
	 * Initial the fields for manger
	 * 
	 * @return array the field infos of manager
	 */
	protected function _fieldInfos()
	{
		$fieldInfos['fields'] = array(
			'id' => array('name' => '页面ID', 'type' => 'int'),
			'name' => array('name' => '页面名称', 'type' => 'string'),
			'site_id' => array('name' => '所属站点', 'type' => 'int'),
			'pageurl' => array('name' => '页面地址', 'type' => 'string'),
			'baseurl' => array('name' => '资源基地址', 'type' => 'string'),
		);
		$fieldInfos['fieldList'] = array('id', 'name', 'site_id', 'pageurl', 'baseurl');
		$fieldInfos['fieldChanges'] = array('name', 'site_id', 'pageurl', 'baseurl');
		
		return $fieldInfos;
	}
}