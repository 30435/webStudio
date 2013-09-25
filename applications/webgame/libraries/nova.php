<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/WebgameCommon.php';

class Nova extends WebgameCommon
{
	/**
	 * Initial the webgame object
	 *
	 * @param  array $params
	 */
	public function __construct($params)
	{
		parent::__construct($params);
	}

	/**
	 * Get the enter url of the webgame
	 *
	 * @return  string the enter url
	 */
	protected function _getPlayUrl($loginIp, $loginKey)
	{}

	/**
	 * 充值接口
	 *
	 * @param unknown_type $orderInfo
	 */
	public function payGame()
	{
		$this->params['frontController']->_loadModel('game', 'gamegoldModel');
		$where = array('username' => $this->username);
		$infos = $this->$model->getInfo($where);
		
		var_dump($infos);
		print_r($this->params);
		exit();
		//$data['money'] = isset($infos['money']) ? $infos['money'] + $this->

		return $payResult;
	}
}
?>