<?php
class ServerModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'server';
		parent::__construct($data);		
	}
		
	/**
	 * Initial the fields for menu
	 * 
	 * @return array the field infos of menu
	 */
	protected function _fieldInfos()
	{
		$statusInfos = array(
			'1' => array('key' => '1', 'value' => '火爆'),
			'2' => array('key' => '2', 'value' => '即将开启'),
			'3' => array('key' => '3', 'value' => ''),
		);
		$fieldInfos['fields'] = array(
			'id' => array('name' => '服务器ID'),
			'name' => array('name' => '服务器名称'),
			'server_mark' => array('name' => '服务器标识'),
			'webgame_code' => array('name' => '服务器所属游戏代码'),
			'listorder' => array('name' => '服务器排序'),
			'ispay' => array('name' => '是否开启支付', 'infos' => array('0' => '<font class="red">不开启</font>', '1' => '<font class="green">开启</font>')),
			'status' => array('name' => '服务器状态', 'infos' => $statusInfos),
			'time_start' => array('name' => '开服时间'),
			'start_maintain' => array('name' => '维护开始时间'),
			'end_maintain' => array('name' => '维护结束时间'),
			'url_maintain' => array('name' => '维护跳转地址'),
		);
		$fieldInfos['fieldChanges'] = array('name', 'server_mark', 'webgame_code', 'listorder', 'ispay', 'status', 'time_start', 'start_maintain', 'end_maintain', 'url_maintain');
		
		return $fieldInfos;
	}
}