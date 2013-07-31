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
			'id' => array('name' => '管理员ID', 'type' => 'int'),
			'username' => array('name' => '管理员账户', 'type' => 'string'),
			'passport' => array('name' => '密码', 'type' => 'string'),
			'roleid' => array('name' => '角色', 'type' => 'int'),
			'email' => array('name' => '邮箱', 'type' => 'string'),
			'encrypt' => array('name' => '密码校验位', 'type' => 'string'),
			'createtime' => array('name' => '创建时间', 'type' => 'int'),
			'loginnum' => array('name' => '登陆次数', 'type' => 'int'),
			'lastip' => array('name' => '最后登陆IP', 'type' => 'string'),
			'lasttime' => array('name' => '最后登陆时间', 'type' => 'int'),
			'islock' => array('name' => '是否锁定', 'type' => 'int'),
			'password_ext' => array('name' => '特殊密码', 'type' => 'string')
		);
		$fieldInfos['fieldList'] = array('id', 'username', 'roleid', 'email', 'createtime', 'loginnum', 'lastip', 'lasttime', 'islock');
		$fieldInfos['fieldChange'] = array('username', 'roleid', 'email', 'islock');
		$fieldInfos['fieldShow'] = array('id', 'createtime', 'loginnum', 'lastip', 'lasttime');
		$fieldInfos['fieldSearch'] = array('username', 'roleid', 'islock');
		
		return $fieldInfos;
	}
}