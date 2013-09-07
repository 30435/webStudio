<?php
abstract class CmsCategoryModel extends CommonModel 
{
	public function __construct($data = '')
	{			
		$this->modelInfos = array(
        	1 => array('id' => 1, 'table' => 'spageModel', 'name' => '单网页'),
        	2 => array( 'id' => 2, 'table' => 'newModel', 'name' => '新闻类'),
        	3 => array( 'id' => 3, 'table' => 'info', 'name' => '分类信息类' ),
        	4 => array( 'id' => 4, 'table' => 'picture', 'name' => '图片类')
        );
		
		$this->table = 'category';
		parent::__construct($data);	
	}
			
	/**
	 * Initial the fields for menu
	 * 
	 * @return array the field infos of menu
	 */
	protected function _fieldInfos()
	{
		$templateInfos = array(
			'page_default' => array('key' => 'page_default', 'value' => '标准单网页模板'),
			'page_aboutus' => array('key' => 'page_aboutus', 'value' => '单网页模板_关于我们'),
			'page_service' => array('key' => 'page_service', 'value' => '单网页模板_服务条款'),
			'list' => array('key' => 'list', 'value' => '标准列表页模板'),
			'list_big' => array('key' => 'list_big', 'value' => '标准大栏目模板'),
			'list_mid' => array('key' => 'list_mid', 'value' => '标准中栏目模板'),
		);
		$urlruleInfos = array(
			'biglist_php' => array('key' => 'biglist_php', 'value' => '大栏目页动态url规则'),
			'biglist_html' => array('key' => 'biglist_html', 'value' => '大栏目页静态url规则'),
			'list_php' => array('key' => 'biglist_php', 'value' => '列表页动态url规则'),
			'list_html' => array('key' => 'biglist_html', 'value' => '列表页静态url规则'),
			'show_php' => array('key' => 'biglist_php', 'value' => '内容页动态url规则'),
			'show_html' => array('key' => 'biglist_html', 'value' => '内容页静态url规则'),
		);

		$fieldInfos['fields'] = array(
			'id' => array('name' => '菜单ID'),
			'catname' => array('name' => '菜单名称'),
			'parentid' => array('name' => '父级菜单'),
			'modelid' => array('name' => '所属模型', 'infos' => $this->modelInfos),
			'catdir' => array('name' => '英文目录'),
			'image' => array('name' => '栏目图片'),
			'description' => array('name' => '描述'),
			'ishtml' => array('name' => '是否生成静态页', 'infos' => array('0' => '<font class="gray4">不生产</font>', '1' => '<font class="green">生成</font>')),
			'template' => array('name' => '模板', 'infos' => $templateInfos),
			'meta_title' => array('name' => 'META Title（栏目标题）'),
			'meta_keywords' => array('name' => 'META Keywords（栏目关键词）'),
			'meta_description' => array('name' => 'META Description（栏目描述）'),
			'listorder' => array('name' => '排序'),
			'urlrule' => array('name' => 'URL规则', 'infos' => $urlruleInfos)
		);
		$fieldInfos['fieldChanges'] = array(
			'catname', 'parentid', 'modelid', 'catdir', 'image', 'description', 'ishtml', 'template', 'meta_title', 'meta_keywords', 
			'meta_description', 'listorder', 'urlrule'
		);
		
		return $fieldInfos;
	}
}