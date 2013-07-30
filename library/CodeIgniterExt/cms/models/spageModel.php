<?php
abstract class CmsSpageModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'spage';
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
			'id' => array('name' => '内容ID'),
			'catid' => array('name' => '所属栏目'),
			'title' => array('name' => '父级菜单'),
			'content' => array('name' => '内容'),
			'editor' => array('name' => '编辑'),
			'username' => array('name' => '管理员帐号'),
			'updatetime' => array('name' => '更新时间'),
			'status' => array('name' => '状态'),
			'inputtime' => array('name' => '录入时间')
		);
		$fieldInfos['fieldChanges'] = array('title', 'username', 'content');
		
		return $fieldInfos;
	}
}