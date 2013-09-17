<?php
class PaymentModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'payment';
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
			'id' => array('name' => '支付方式ID'),
			'name' => array('name' => '名称'),
			'code' => array('name' => '代码'),
			'description' => array('name' => '描述'),
			'thumb' => array('name' => '图标'),
			'listorder' => array('name' => '排序'),
			'rate' => array('name' => '费率'),
			'status' => array('name' => '支付方式状态', 'infos' => array('0' => '<font class="red">不开启</font>', '1' => '<font class="green">开启</font>')),
		);
		$fieldInfos['fieldChanges'] = array('id', 'name', 'code', 'thumb', 'listorder', 'rate', 'status');
		
		return $fieldInfos;
	}
}