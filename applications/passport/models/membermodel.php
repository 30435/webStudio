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
			'id' => array('name' => '管理员ID'),
			'username' => array('name' => '管理员账户'),
			'passport' => array('name' => '密码'),
			'roleid' => array('name' => '角色'),
			'email' => array('name' => '邮箱'),
			'encrypt' => array('name' => '密码校验位'),
			'createtime' => array('name' => '创建时间'),
			'loginnum' => array('name' => '登陆次数'),
			'lastip' => array('name' => '最后登陆IP'),
			'lasttime' => array('name' => '最后登陆时间'),
			'islock' => array('name' => '是否锁定'),
			'password_ext' => array('name' => '特殊密码')
		);
		$fieldInfos['fieldList'] = array('id', 'username', 'roleid', 'email', 'createtime', 'loginnum', 'lastip', 'lasttime', 'islock');
		$fieldInfos['fieldChanges'] = array('username', 'roleid', 'email', 'islock');
		$fieldInfos['fieldShow'] = array('id', 'createtime', 'loginnum', 'lastip', 'lasttime');
		$fieldInfos['fieldSearch'] = array('username', 'roleid', 'islock');
		
		return $fieldInfos;
	}
}