<?php
class Member_mvoieModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'member_webgame';
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
			'userid' => array('name' => '用户ID'),
			'username' => array('name' => '用户名'),

			'lasttime' => array('name' => '最后活跃时间'),
		);
		$fieldInfos['fieldChanges'] = array('userid', 'username', 'lasttime');
		
		return $fieldInfos;
	}
}