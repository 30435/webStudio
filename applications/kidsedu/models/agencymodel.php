<?php
class AgencyModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'agency';
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
			'1' => array('key' => '1', 'value' => '国有'),
			'2' => array('key' => '2', 'value' => '外资'),
			'3' => array('key' => '3', 'value' => '合资'),
			'4' => array('key' => '4', 'value' => '独资'),
			'5' => array('key' => '5', 'value' => '股份制'),
			'6' => array('key' => '6', 'value' => '民营'),
			'7' => array('key' => '7', 'value' => '私有'),
		);
		$industryInfos = array(
			'1' => array('key' => '1', 'value' => '服装'),
			'2' => array('key' => '2', 'value' => '美食'),
			'3' => array('key' => '3', 'value' => '美容'),
			'4' => array('key' => '4', 'value' => '干洗'),
			'5' => array('key' => '5', 'value' => '精品'),
			'6' => array('key' => '6', 'value' => '饰品'),
			'7' => array('key' => '7', 'value' => '教育'),
		);
		$invitModelInfos = array(
			'1' => array('key' => '1', 'value' => '加盟连锁'),
			'2' => array('key' => '2', 'value' => '分销代理'),
		);
		$fieldInfos['fields'] = array(
			'id' => array('name' => '机构ID'),
			'username' => array('name' => '机构注册用户'),
			'name' => array('name' => '机构名称'),
			'name_english' => array('name' => '机构英文名称'),
			'type' => array('name' => '机构类型', 'infos' => $typeInfos),
			'industry' => array('name' => '机构所属行业', 'infos' => $industryInfos),
			'capital' => array('name' => '注册资金'),
			'regdate' => array('name' => '注册日期'),
			'address' => array('name' => '机构地址'),
			'contact_man' => array('name' => '联系人'),
			'contact_email' => array('name' => '机构邮箱'),
			'contact_mobile' => array('name' => '手机号'),
			'contact_telephone' => array('name' => '联系电话'),
			'brand_name' => array('name' => '商标名称'),
			'brand_name_english' => array('name' => '商标英文名称'),
			'invest_capital' => array('name' => '投资额度'),
			'invit_model' => array('name' => '投资模式', 'infos' => $invitModelInfos),
			'direct_num' => array('name' => '直营店数量'),
			'league_num' => array('name' => '加盟店数量'),
			'status' => array('name' => '机构状态'),
		);
		$fieldInfos['fieldChanges'] = array('name', 'username', 'name_english', 'type', 'industry', 'capital', 'regdate', 'address', 'contact_man', 'contact_email', 'contact_mobile', 'contact_telephone', 'brand_name', 'brand_name_english', 'invest_capital', 'invit_model', 'direct_num', 'league_num', 'status');
		
		return $fieldInfos;
	}
}