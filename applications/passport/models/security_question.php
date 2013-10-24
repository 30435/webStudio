<?php
class Security_questionModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'security_question';
		parent::__construct($data);		
	}
	
	/**
	 * Initial the fields for manger
	 * 
	 * @return array the field infos of manager
	 */
	protected function _fieldInfos()
	{
		$fieldInfos['fields'] = array(
			'id' => array('name' => '记录ID'),
			'userid' => array('name' => '用户ID'),
			'question_1' => array('name' => '问题1'),
			'question_custom_1' => array('name' => '自定义问题1'),
			'answer_1' => array('name' => '答案1'),

			'question_2' => array('name' => '问题2'),
			'question_custom_2' => array('name' => '自定义问题2'),
			'answer_2' => array('name' => '答案2'),

			'question_3' => array('name' => '问题3'),
			'question_custom_3' => array('name' => '自定义问题3'),
			'answer_3' => array('name' => '答案3'),

			'inputtime' => array('name' => '记录时间'),
			'updatetime' => array('name' => '更新时间'),
		);
		$fieldInfos['fieldList'] = array('userid', 'question_1', 'question_custom_1', 'answer_1', 'question_2', 'question_custom_2', 'answer_2', 'question_3', 'question_custom_3', 'answer_3');
		
		return $fieldInfos;
	}
}