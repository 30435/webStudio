<?php
class BookModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'book';
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
			'1' => array('key' => '1', 'value' => '小说'),
			'2' => array('key' => '2', 'value' => '散文'),
			'3' => array('key' => '3', 'value' => '杂文'),
		);

		$fieldInfos['fields'] = array(
			'id' => array('name' => '图书ID'),
			'name' => array('name' => '图书名称'),
			'code' => array('name' => '图书代码'),
			'author' => array('name' => '图书作者'),
			'type' => array('name' => '图书类型', 'infos' => $typeInfos),
			'listorder' => array('name' => '图书排序'),
			'positions' => array('name' => '图书推荐位'),
			'is_publish' => array('name' => '是否出版', 'infos' => array('0' => '<font class="red">未出版</font>', '1' => '<font class="green">已出版</font>')),
			'description' => array('name' => '图书描述'),
			'fcover_small' => array('name' => '图书封面_小图'),
			'fcover' => array('name' => '图书封面'),
			'num_words' => array('name' => '图书字数'),
		);
		$fieldInfos['fieldChanges'] = array('name', 'code', 'type', 'author', 'listorder', 'is_publish', 'description', 'positions', 'fcover_small', 'fcover', 'num_words');
		
		return $fieldInfos;
	}
}