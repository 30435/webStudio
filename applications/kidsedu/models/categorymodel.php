<?php
require_once BASEPATH_EXT . 'cms/models/categorymodel.php';

class CategoryModel extends CmsCategoryModel
{
	/**
	 * Initial the fields for menu
	 * 
	 * @return array the field infos of menu
	 */
	protected function _fieldInfos()
	{
		$templatePageInfos = array(
			'default' => array('key' => 'default', 'value' => '标准单网页模板'),
			'aboutus' => array('key' => 'aboutus', 'value' => '单网页模板_关于我们'),
			'service' => array('key' => 'service', 'value' => '单网页模板_服务条款'),
			'aptitude' => array('key' => 'aptitude', 'value' => '单网页模板_资质'),
		);
		$templateBigInfos = array(
			'list_big' => array('key' => 'list_big', 'value' => '标准大栏目模板'),
			'list_big_depart' => array('key' => 'list_big_depart', 'value' => '事业部大栏目模板'),
			'list_big_school' => array('key' => 'list_big_school', 'value' => '视频大栏目模板'),
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