<?php
class PayModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'pay';
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
			'id' => array('name' => '支付ID'),
			'orderid' => array('name' => '订单号'),
			'orderid_account' => array('name' => '充值订单号'),
			'username' => array('name' => '目标用户名'),
			'userid' => array('name' => '目标用户ID'),
			'pay_username' => array('name' => '支付用户名'),
			'money' => array('name' => '支付金额'),
			'webgame_code' => array('name' => '游戏代码'),
			'server_id' => array('name' => '服务器ID'),
			'server_role' => array('name' => '游戏角色'),
			'pay_time' => array('name' => '支付时间'),
		);
		$fieldInfos['fieldChanges'] = array('id', 'orderid', 'orderid_account', 'username', 'userid', 'userid', 'username', 'money', 'webgame_code', 'server_id', 'server_role', 'pay_time');
		
		return $fieldInfos;
	}
}