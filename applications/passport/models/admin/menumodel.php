<?php
class MenuModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'admin_menu';
		parent::__construct($data);		
	}
		
	/**
	 * Initial the fields for menu
	 * 
	 * @return array the field infos of menu
	 */
	protected function _fieldInfos()
	{
		$displayInfo = array(
			'1' => array('key' => '1', 'value' => '顶部或左侧'),
			'2' => array('key' => '2', 'value' => '左侧'),
			'3' => array('key' => '3', 'value' => '右侧顶部'),
			'4' => array('key' => '4', 'value' => '基于记录'),
		);
		$fieldInfos['fields'] = array(
			'id' => array('name' => '菜单ID'),
			'name' => array('name' => '菜单名称'),
			'parentid' => array('name' => '父级菜单'),
			'app_code' => array('name' => '所属应用'),
			'controller' => array('name' => '控制器'),
			'method' => array('name' => '方法'),
			'extparam' => array('name' => '额外参数'),
			'listorder' => array('name' => '排序'),
			'display' => array('name' => '展示位置', 'infos' => $displayInfo)
		);
		$fieldInfos['fieldChanges'] = array('name', 'parentid', 'app_code', 'controller', 'method', 'extparam', 'listorder', 'display');
		
		return $fieldInfos;
	}
}