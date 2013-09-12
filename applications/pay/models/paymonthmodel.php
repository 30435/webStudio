<?php
class PaymonthModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'paymonth';
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
			'id' => array('name' => '包月服务ID'),
			'webgame_code' => array('name' => '所属游戏'),
			'name' => array('name' => '名称'),
			'money' => array('name' => '费用'),
			'month' => array('name' => '月数'),
			'thumb' => array('name' => '图标'),
			'listorder' => array('name' => '排序'),
		);
		$fieldInfos['fieldChanges'] = array('name', 'money', 'month', 'thumb', 'listorder', 'webgame_code');
		
		return $fieldInfos;
	}
}