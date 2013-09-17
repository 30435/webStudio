<?php
class SchoolModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'school';
		parent::__construct($data);		
	}
		
	/**
	 * Initial the fields for menu
	 * 
	 * @return array the field infos of menu
	 */
	protected function _fieldInfos()
	{
		$fieldInfos['fields'] = array(
			'id' => array('name' => '学校ID'),
			'name' => array('name' => '学校名称'),
			'agency_id' => array('name' => '所属机构ID'),
			'address' => array('name' => '学校地址'),
			'contact_man' => array('name' => '联系人'),
			'email' => array('name' => '学校邮箱'),
			'mobile' => array('name' => '联系手机号'),
			'telephone' => array('name' => '联系电话'),
			'school_app' => array('name' => '手机客户端'),
			'school_map' => array('name' => '学校地图信息'),
		);
		$fieldInfos['fieldChanges'] = array('name', 'agency_id', 'address', 'contact_man', 'email', 'mobile', 'telephone', 'school_app', 'school_map');
		
		return $fieldInfos;
	}
}