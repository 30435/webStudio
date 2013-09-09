<?php
class WebgameModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'webgame';
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
			'3' => array('key' => '3', 'value' => '敬请期待'),
		);
		$fieldInfos['fields'] = array(
			'id' => array('name' => '游戏ID'),
			'name' => array('name' => '游戏名称'),
			'code' => array('name' => '游戏代码'),
			'webgame_type' => array('name' => '游戏类型', 'infos' => $typeInfos),
			'webgame_status' => array('name' => '游戏状态', 'infos' => $statusInfos),
			'url_home' => array('name' => '游戏官网地址'),
			'url_server' => array('name' => '游戏服务器地址'),
			'url_bbs' => array('name' => '游戏论坛地址'),
			'listorder' => array('name' => '游戏排序'),
			'ispay' => array('name' => '是否开启支付', 'infos' => array('0' => '<font class="red">不开启</font>', '1' => '<font class="green">开启</font>')),

			'description' => array('name' => '游戏描述'),
			'brief' => array('name' => '游戏介绍'),
			'pic_small' => array('name' => '游戏小图'),
			'pic_middle' => array('name' => '游戏中图'),
			'pic_big' => array('name' => '游戏大图'),
			'coin_name' => array('name' => '游戏币名称'),
			'coin_unit' => array('name' => '游戏币单位'),
			'coin_rate' => array('name' => '游戏币兑换比率'),
			'start_maintain' => array('name' => '维护开始时间'),
			'end_maintain' => array('name' => '维护结束时间'),
			'url_maintain' => array('name' => '游戏维护调转地址')
		);
		$fieldInfos['fieldChanges'] = array('name', 'code', 'webgame_type', 'webgame_status', 'url_home', 'url_server',  'url_bbs', 'listorder', 'ispay', 'description', 'pic_small', 'pic_middle', 'pic_big', 'coin_name', 'coin_unit', 'coin_rate', 'start_maintain', 'end_maintain', 'url_maintain');
		
		return $fieldInfos;
	}
}