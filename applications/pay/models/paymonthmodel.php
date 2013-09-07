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
		$unitInfos = array(
			'1' => array('key' => '1', 'value' => '年'),
			'2' => array('key' => '2', 'value' => '月'),
		);
		$fieldInfos['fields'] = array(
			'id' => array('name' => '包月服务ID'),
			'name' => array('name' => '名称'),
			'money' => array('name' => '费用'),
			'unit' => array('name' => '单位', 'infos' => $unitInfos),
			'thumb' => array('name' => '图标'),
			'listorder' => array('name' => '排序'),
		);
		$fieldInfos['fieldChanges'] = array('name', 'money', 'unit', 'thumb', 'listorder');
		
		return $fieldInfos;
	}
}