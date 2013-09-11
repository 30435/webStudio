<?php
class MessageModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'message';
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
			'1' => array('key' => '1', 'value' => '系统消息'),
			'2' => array('key' => '2', 'value' => '普通消息'),
		);
		$targetGroupInfos = array(
			'course' => array('key' => 'course', 'value' => '目标群组1'),
			'school' => array('key' => 'school', 'value' => '目标群组2'),
		);
		$fieldInfos['fields'] = array(
			'id' => array('name' => '广告ID'),
			'subject' => array('name' => '消息标题'),
			'content' => array('name' => '消息内容'),
			'message_type' => array('name' => '消息类型', 'infos' => $typeInfos),
			'target_group' => array('name' => '目标群组', 'infos' => $targetGroupInfos),
			'start_time' => array('name' => '消息开始时间'),
			'end_time' => array('name' => '消息结束时间'),
			'add_time' => array('name' => '消息录入时间'),
			'listorder' => array('name' => '排序'),
			'message_status' => array('name' => '状态', 'infos' => array('0' => '<font class="red">终止</font>', '1' => '<font class="green">正常</font>')),
		);
		$fieldInfos['fieldList'] = array('id', 'subject', 'message_type', 'add_time', 'target_group', 'start_time', 'end_time', 'listorder', 'message_status');
		$fieldInfos['fieldChanges'] = array('subject', 'message_type', 'add_time', 'target_group', 'start_time', 'end_time', 'listorder', 'message_status', 'content');
		
		return $fieldInfos;
	}
}