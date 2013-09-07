<?php
class Account_unusualModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'account_unusual';
		parent::__construct($data);		
	}
		
	/**
	 * Initial the fields for menu
	 * 
	 * @return array the field infos of menu
	 */
	protected function _fieldInfos()
	{
		$typeInfos = array(
			'1' => array('key' => '1', 'value' => '自主儿童游戏'),
			'2' => array('key' => '2', 'value' => '代理儿童网游'),
			'3' => array('key' => '3', 'value' => '普通网游'),
		);
		$statusInfos = array(
			'1' => array('key' => '1', 'value' => '火爆'),
			'2' => array('key' => '2', 'value' => '即将开启'),
			'3' => array('key' => '3', 'value' => ''),
		);
		$fieldInfos['fields'] = array(
			'id' => array('name' => '充值ID'),
			'orderid' => array('name' => '订单号'),
			'orderid_plat' => array('name' => '平台订单号'),
			'payment_code' => array('name' => '支付方式代码'),
			'pay_type' => array('name' => '支付类型'),
			'webgame_code' => array('name' => '游戏代码'),
			'server_id' => array('name' => '服务器ID'),
			'server_role' => array('name' => '游戏角色'),
			'pay_userid' => array('name' => '充值账号'),
			'get_userid' => array('name' => '目标账号'),
			'get_username' => array('name' => '目标用户名'),
			'mobile' => array('name' => '手机号'),
			'payment_rate' => array('name' => '充值费率'),
			'money' => array('name' => '充值金额'),
 			'money_valid_middle' => array('name' => '实际充值金额'),
			'money_valid' => array('name' => '有效充值金额'),
			'account_time' => array('name' => '充值时间'),
			'account_time_valid' => array('name' => '实际充值时间'),
			'account_data' => array('name' => '平台数据'),
			'account_status' => array('name' => '充值状态'),
			'handpay_manager' => array('name' => '手工充值管理员')
		);
		$fieldInfos['fieldChanges'] = array('id', 'name', 'code', 'url_home', 'url_server', 'ispay', 'webgame_type', 'webgame_status');
		
		return $fieldInfos;
	}
}