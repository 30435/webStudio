<?php
class SiteModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'site';
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
			'id' => array('name' => '站点ID', 'type' => 'int'),
			'name' => array('name' => '站点名称', 'type' => 'string'),
			'siteurl' => array('name' => '站点地址', 'type' => 'int'),
		);
		$fieldInfos['fieldList'] = array('id', 'name', 'siteurl');
		$fieldInfos['fieldChanges'] = array('name', 'siteurl');
		
		return $fieldInfos;
	}
}