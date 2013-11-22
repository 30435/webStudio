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
		$templatePageInfos = array(
			'page_default' => array('key' => 'page_default', 'value' => '标准单网页模板'),
			'page_aboutus' => array('key' => 'page_aboutus', 'value' => '单网页模板_关于我们'),
			'page_service' => array('key' => 'page_service', 'value' => '单网页模板_服务条款'),
			'page_aptitude' => array('key' => 'page_aptitude', 'value' => '单网页模板_资质'),
		);
		$templateBigInfos = array(
			'list_big' => array('key' => 'list_big', 'value' => '标准大栏目模板'),
			'list_depart_big' => array('key' => 'list_depart_big', 'value' => '事业部大栏目模板'),
			'list_school_big' => array('key' => 'list_school_big', 'value' => '视频大栏目模板'),
		);
		$templateListInfos = array(
			'list' => array('key' => 'list', 'value' => '标准列表页模板'),
			'list_depart' => array('key' => 'list_depart', 'value' => '事业部列表页模板'),
			'list_school' => array('key' => 'list_school', 'value' => '视频列表页模板'),
		);
		$templateShowInfos = array(
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
			'template_page' => array('name' => '单网页页模板', 'infos' => $templatePageInfos),
			'template_big' => array('name' => '大列表页模板', 'infos' => $templateBigInfos),
			'template_list' => array('name' => '列表页模板', 'infos' => $templateListInfos),
			'template_show' => array('name' => '内容页模板', 'infos' => $templateShowInfos),
			'meta_title' => array('name' => 'META Title（栏目标题）'),
			'meta_keywords' => array('name' => 'META Keywords（栏目关键词）'),
			'meta_description' => array('name' => 'META Description（栏目描述）'),
			'listorder' => array('name' => '排序'),
			'bind_domain' => array('name' => '绑定域名'),
			//'urlrule' => array('name' => 'URL规则', 'infos' => $urlruleInfos)
		);
		$fieldInfos['fieldChanges'] = array(
			'catname', 'parentid', 'modelid', 'catdir', 'image', 'description', 'ishtml', 'template_page', 'template_big', 'template_list', 'template_show', 'meta_title', 'meta_keywords', 
			'meta_description', 'listorder', 'bind_domain'
		);
		
		return $fieldInfos;
	}
}