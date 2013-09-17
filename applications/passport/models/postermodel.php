<?php
class PosterModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'poster';
		parent::__construct($data);		
	}
	
	/**
	 * Initial the fields for manger
	 * 
	 * @return array the field infos of manager
	 */
	protected function _fieldInfos()
	{
		$typeInfos = array(
			'image' => array('key' => 'image', 'value' => '图片'),
			'flash' => array('key' => 'flash', 'value' => '动画'),
		);
		$fieldInfos['fields'] = array(
			'id' => array('name' => '广告ID'),
			'name' => array('name' => '广告名称'),
			'type' => array('name' => '广告类型', 'infos' => $typeInfos),
			'space_id' => array('name' => '版位ID'),
			'start_time' => array('name' => '广告开始时间'),
			'end_time' => array('name' => '广告结束时间'),
			'add_time' => array('name' => '广告录入时间'),
			'listorder' => array('name' => '排序'),
			'status' => array('name' => '状态', 'infos' => array('0' => '<font class="red">终止</font>', '1' => '<font class="green">正常</font>')),
			'url' => array('name' => '广告链接'),
			'pic' => array('name' => '资源地址'),
			'url_ext' => array('name' => '广告链接2'),
			'pic_ext' => array('name' => '资源地址2'),
		);
		$fieldInfos['fieldList'] = array('id', 'name', 'type', 'space_id', 'url', 'start_time', 'end_time', 'listorder', 'status');
		$fieldInfos['fieldChanges'] = array('name', 'type', 'space_id', 'url', 'url_ext', 'add_time', 'start_time', 'end_time', 'listorder', 'status', 'pic', 'pic_ext');
		
		return $fieldInfos;
	}
}