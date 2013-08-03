<?php
class JobModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'job';
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
			'id' => array('name' => '任务ID', 'type' => 'int'),
			'name' => array('name' => '任务名称', 'type' => 'string'),
			'site_id' => array('name' => '所属站点', 'type' => 'string'),
			'crule_id' => array('name' => '内容采集规则', 'type' => 'int'),
			'content_urlpre' => array('name' => 'URL前缀', 'type' => 'string'),
			'list_url' => array('name' => '列表页地址', 'type' => 'string'),
			'list_start' => array('name' => '列表开始标记', 'type' => 'string'),
			'list_end' => array('name' => '列表结束标记', 'type' => 'int'),
			'pattern' => array('name' => '列表采集规则', 'type' => 'int'),
			'status' => array('name' => '状态', 'infos' => array('0' => '<font class="red">禁用</font>', '1' => '<font class="green">启用</font>')),
		);
		$fieldInfos['fieldList'] = array('id', 'name', 'site_id', 'crule_id', 'status', 'list_url');
		$fieldInfos['fieldChanges'] = array('name', 'site_id', 'crule_id', 'content_urlpre', 'list_url', 'list_start', 'list_end', 'pattern', 'status');

		return $fieldInfos;
	}
}