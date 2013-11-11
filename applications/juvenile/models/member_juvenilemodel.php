<?php
class Member_juvenileModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'member_juvenile';
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
			'webgame_code' => array('name' => '游戏代码'),
			'server_id' => array('name' => '服务器ID'),
			'play_num' => array('name' => '登录游戏次数'),
			'pay_num' => array('name' => '支付次数'),
			'pay_money' => array('name' => '支付金额'),
			'firsttime' => array('name' => '第一次登录时间'),
			'lasttime_login' => array('name' => '最后一次登录时间'),
			'lasttime_pay' => array('name' => '最后一次支付时间'),
			'lasttime' => array('name' => '最后活跃时间'),
		);
		$fieldInfos['fieldChanges'] = array('userid', 'username', 'webgame_code', 'server_id', 'play_num', 'pay_num', 'pay_money', 'firsttime', 'lasttime_login', 'lasttime_pay', 'lasttime');
		
		return $fieldInfos;
	}
}