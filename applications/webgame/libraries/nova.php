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
		$this->params['frontController']->_loadModel(APPCODE, 'gamegoldModel');
		$gamegoldModel = $this->params['frontController']->gamegoldModel;
		
		$gamegoldModel->currentDb = $gamegoldModel->_loadDatabase('game');
		$where = array('accname' => $this->userid);
		$infos = $gamegoldModel->getInfo($where);

		if (empty($infos)) {
			/*$data = array(
				'username' => $this->username,
				'userid' => $this->userid,
				'money' => $this->params['money'],
				'lasttime' => $this->time,
			);*/
			$data = array(
				'accname' => $this->userid,
				'money' => $this->params['money'],
			);

			$payResult = $gamegoldModel->addInfo($data);
		} else {
			$data = array(
				'money' => $infos['money'] + $this->params['money'],
				//'lasttime' => $this->time,
			);
			$payResult = $gamegoldModel->editInfo($data, $where);
		}

		return $payResult;
	}
}
?>