<?php
class Member_payModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'member_pay';
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
			'money' => array('name' => '余额'),
			'want_money' => array('name' => '充值金额'),
			'want_times' => array('name' => '充值次数'),
			'valid_money' => array('name' => '有效充值金额'),
			'valid_times' => array('name' => '有效充值次数'),
			'lasttime_account' => array('name' => '最后充值时间'),
			'pay_money' => array('name' => '支付金额'),
			'pay_times' => array('name' => '支付次数'),
			'lasttime_pay' => array('name' => '最后支付时间'),
			'unusual_money' => array('name' => '异常金额'),
		);
		$fieldInfos['fieldChanges'] = array('userid', 'username', 'webgame_code', 'server_id', 'play_num', 'pay_num', 'pay_money', 'firsttime', 'lasttime_login', 'lasttime_pay', 'lasttime');
		
		return $fieldInfos;
	}
}