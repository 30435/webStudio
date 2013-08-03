<?php
class CruleModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'crule';
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
			'id' => array('name' => '页面ID', 'type' => 'int'),
			'name' => array('name' => '规则名称', 'type' => 'string'),
			'site_id' => array('name' => '所属站点', 'type' => 'int'),
			'pageurl' => array('name' => '示例页面地址', 'type' => 'string'),
			'mulpage_mark' => array('name' => '地址分页标记', 'type' => 'string'),
			'pattern_time' => array('name' => '日期采集规则', 'type' => 'string'),
			'pattern_file' => array('name' => '文件采集规则', 'type' => 'string'),
			'pattern' => array('name' => '采集规则', 'type' => 'string'),
			'replace_source' => array('name' => '更换或替换的源内容', 'type' => 'string'),
			'replace_target' => array('name' => '更换或替换的内容', 'type' => 'string'),
		);
		$fieldInfos['fieldList'] = array('id', 'name', 'site_id', 'pageurl');
		$fieldInfos['fieldChanges'] = array('name', 'site_id', 'pageurl', 'mulpage_mark', 'pattern_time', 'pattern_file', 'pattern', 'replace_source', 'replace_target');
		
		return $fieldInfos;
	}
}