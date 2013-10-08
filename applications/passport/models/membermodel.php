<?php
class MemberModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'member';
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
			'userid' => array('name' => '用户ID'),
			'username' => array('name' => '用户账户'),
			'ucserver_id' => array('name' => 'UCenter ID'),
			'channel_code' => array('name' => '渠道代码'),
			'email' => array('name' => '邮箱'),
			'truename' => array('name' => '真实姓名'),
			'gender' => array('name' => '性别'),
			'telephone' => array('name' => '电话'),
			'address' => array('name' => '地址'),
			'qq' => array('name' => 'QQ号'),
			'birthday' => array('name' => '生日'),
			'postcode' => array('name' => '邮编'),
			'mobile' => array('name' => '手机号'),
			'idcard' => array('name' => '身份证号'),
			'regip' => array('name' => '注册IP'),
			'regdate' => array('name' => '注册时间'),
			'loginnum' => array('name' => '登陆次数'),
			'lastloginip' => array('name' => '最后登陆IP'),
			'lastlogintime' => array('name' => '最后登陆时间'),
			'is_lock' => array('name' => '是否锁定'),
		);
		$fieldInfos['fieldList'] = array('userid', 'username', 'email', 'regdate', 'loginnum', 'lastloginip', 'lastlogintime', 'is_lock');
		
		return $fieldInfos;
	}
}