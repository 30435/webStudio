<?php
class ManagerlogModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'admin_managerlog';
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
			'id' => array('name' => '日志ID'),
			'username' => array('name' => '管理员账号'),
			'userid' => array('name' => '管理员ID'),
			'roleid' => array('name' => '角色ID'),
			'role_name' => array('name' => '角色名称'),
			'menu_id' => array('name' => '菜单ID'),
			'menu_name' => array('name' => '菜单名称'),
			'ip' => array('name' => '管理员IP'),
			'inputtime' => array('name' => '操作时间'),
			'data' => array('name' => '操作详情')
		);
		$fieldInfos['fieldChanges'] = array();	
		
		return $fieldInfos;
	}
}