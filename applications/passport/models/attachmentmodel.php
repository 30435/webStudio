<?php
class AttachmentModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'attachment';
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
			'id' => array('name' => '附件ID'),
			'app_code' => array('name' => '所属应用'),
			'catid' => array('name' => '所属栏目'),
			'contentid' => array('name' => '所属内容'),
			'file_name' => array('name' => '附件名称'),
			'file_path' => array('name' => '附件路径'),
			'file_size' => array('name' => '附件大小'),
			'file_ext' => array('name' => '附件扩展名'),
			'uploadtime' => array('name' => '上传时间'),
			'uploadip' => array('name' => '上传IP')
		);
		$fieldInfos['fieldChanges'] = array('title', 'username', 'content');
		
		return $fieldInfos;
	}
}