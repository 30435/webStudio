<?php
class RoleModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'admin_role';
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
			'id' => array('name' => '角色ID'),
			'name' => array('name' => '角色名称'),
			'description' => array('name' => '角色描述'),
			'listorder' => array('name' => '排序'),
			'status' => array('name' => '状态', 'infos' => array('0' => '<font class="red">禁用</font>', '1' => '<font class="green">启用</font>')),
		);
		$fieldInfos['fieldChanges'] = array('name', 'description', 'listorder', 'status');	

		return $fieldInfos;
	}
}