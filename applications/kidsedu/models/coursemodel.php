<?php
class CourseModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'course';
		parent::__construct($data);		
	}
		
	/**
	 * Initial the fields for menu
	 * 
	 * @return array the field infos of menu
	 */
	protected function _fieldInfos()
	{
		$sortInfos = array(
			'english' => array('key' => 'english', 'value' => '英语'),
			'chinese' => array('key' => 'chinese', 'value' => '中文'),
			'music' => array('key' => 'music', 'value' => '音乐'),
		);
		$statusInfos = array(
			'1' => array('key' => '1', 'value' => '满员'),
			'2' => array('key' => '2', 'value' => '圆满结束'),
			'3' => array('key' => '3', 'value' => '火热报名中'),
		);
		$fieldInfos['fields'] = array(
			'id' => array('name' => '课程ID'),
			'name' => array('name' => '课程名称'),
			'agency_id' => array('name' => '所属机构ID'),
			'school_id' => array('name' => '所属学校ID'),
			'sort' => array('name' => '课程类别', 'infos' => $sortInfos),
			'status' => array('name' => '课程状态', 'infos' => $statusInfos),
			'description' => array('name' => '游戏描述'),
		);
		$fieldInfos['fieldChanges'] = array('name', 'agency_id', 'shool_id', 'sort', 'status');
		
		return $fieldInfos;
	}
}