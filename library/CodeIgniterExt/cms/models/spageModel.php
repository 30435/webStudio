<?php
abstract class CmsSpageModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'spage';
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
			'id' => array('name' => '����ID'),
			'catid' => array('name' => '������Ŀ'),
			'title' => array('name' => '�����˵�'),
			'content' => array('name' => '����'),
			'editor' => array('name' => '�༭'),
			'username' => array('name' => '����Ա�ʺ�'),
			'updatetime' => array('name' => '����ʱ��'),
			'status' => array('name' => '״̬'),
			'inputtime' => array('name' => '¼��ʱ��')
		);
		$fieldInfos['fieldChanges'] = array('title', 'username', 'content');
		
		return $fieldInfos;
	}
}