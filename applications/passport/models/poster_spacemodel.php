<?php
class Poster_spaceModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'poster_space';
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
			'banner' => array('key' => 'banner', 'value' => '举行横幅'),
			'fixure' => array('key' => 'fixure', 'value' => '固定位置'),
			'float' => array('key' => 'float', 'value' => '漂浮移动'),
			'couplet' => array('key' => 'couplet', 'value' => '对联广告'),
			'imagechange' => array('key' => 'imagechange', 'value' => '图片轮换广告'),
			'imagelist' => array('key' => 'imagelist', 'value' => '图片列表广告'),
			'text' => array('key' => 'banner', 'value' => '文字广告'),
			'code' => array('key' => 'code', 'value' => '代码广告'),
		);

		$fieldInfos['fields'] = array(
			'id' => array('name' => '版位ID'),
			'name' => array('name' => '版位名称'),
			'space_type' => array('name' => '版位类型', 'infos' => $typeInfos),
			'width' => array('name' => '尺寸-宽'),
			'height' => array('name' => '尺寸-高'),
			'description' => array('name' => '描述'),
			'space_status' => array('name' => '状态', 'infos' => array('0' => '<font class="red">终止</font>', '1' => '<font class="green">正常</font>')),
		);
		$fieldInfos['fieldList'] = array('id', 'name', 'space_type', 'width', 'height', 'description', 'space_status');
		$fieldInfos['fieldChanges'] = array('name', 'space_type', 'width', 'height', 'description', 'space_status');
		
		return $fieldInfos;
	}
}