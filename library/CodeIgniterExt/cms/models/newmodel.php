<?php
abstract class CmsNewModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'new';
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
			'title' => array('name' => '����'),
			'thumb' => array('name' => '����ͼ'),
			'keywords' => array('name' => '�ؼ���'),
			'description' => array('name' => '����'),
			'url' => array('name' => '����URL'),
			'listorder' => array('name' => '����'),
			'content' => array('name' => '����'),
			'editor' => array('name' => '�༭'),
			'username' => array('name' => '����Ա�ʺ�'),
			'copyfrom' => array('name' => '��Դ'),
			'template' => array('name' => 'ģ��'),
			'status' => array('name' => '״̬'),
			'inputtime' => array('name' => '¼��ʱ��'),
			'updatetime' => array('name' => '����ʱ��'),
		);
		$fieldInfos['fieldList'] = array('id', 'catid', 'title', 'url', 'listorder', 'username', 'updatetime', 'inputtime');
		$fieldInfos['fieldChanges'] = array('catid', 'title', 'thumb', 'template', 'copyfrom', 'description', 'keywords', 'content');
		
		return $fieldInfos;
	}
}