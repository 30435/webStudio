<?php
class ContentModel extends CommonModel 
{
	public function __construct()
	{	
		$data = 'spider';
		$this->table = 'content';
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
			'id' => array('name' => 'ID', 'type' => 'int'),
			'job_id' => array('name' => '所属任务ID', 'type' => 'int'),
			'content_key' => array('name' => '内容标记符', 'type' => 'string'),
			'pageurl' => array('name' => '内容源地址', 'type' => 'string'),
			'title' => array('name' => '标题', 'type' => 'int'),
			'thumb_remote' => array('name' => '缩略图源地址', 'type' => 'string'),
			'thumb' => array('name' => '缩略图地址', 'type' => 'string'),
			'content' => array('name' => '内容', 'type' => 'string'),
			'author' => array('name' => '作者', 'type' => 'string'),
			'copyfrom' => array('name' => '最后登陆时间', 'type' => 'string'),
			'keywords' => array('name' => '关键词', 'type' => 'string'),
			'description' => array('name' => '描述', 'type' => 'string'),
			'inputtime' => array('name' => '采集时间', 'type' => 'int'),
			'status' => array('name' => '内容状态', 'type' => 'int')
		);
		$fieldInfos['fieldList'] = array('id', 'content_key', 'title', 'thumb', 'thumb_remote', 'status', 'pageurl');
		$fieldInfos['fieldChange'] = array('username', 'roleid', 'email', 'islock');
		$fieldInfos['fieldShow'] = array('id', 'createtime', 'loginnum', 'lastip', 'lasttime');
		$fieldInfos['fieldSearch'] = array('title', 'jobid', 'status');
		
		return $fieldInfos;
	}
}