<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Custom_Controller extends CommonController
{
	public function __construct()
	{
		parent::__construct();

        $this->metaInfos = array(
				array('name' => 'robots', 'content' => 'no-cache'),
				array('name' => 'description', 'content' => '敢玩网(ganwan)是一家专以原创网页游戏为业务方向的网站，旗下运营独代产品《闪客快打》，以及数十款联运产品，包括《仙落凡尘》、《神仙道》、《神曲》、《龙将》等国内精品网页游戏。'),
				array('name' => 'keywords', 'content' => '敢玩网 ganwan,敢玩游戏 敢拼天下,网页游戏大全,webgame,网页游戏平台,网页游戏排行榜,网页游戏开服表,最新网页游戏,网络游戏,游戏'),
				array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
		);


		$this->paymentInfos = $this->_getPaymentInfos();
		$this->webgameInfos = $this->_getWebgameInfos();
		$this->load->library('form_validation');
	}

	/**
	 * Get the payment infos
	 *
	 * @return array webgame infos
	 */
	protected function _getPaymentInfos()
	{
		$this->_loadModel(APPCODE, 'paymentModel');
		$infos = $this->paymentModel->getAllInfos('', 'code', array(), array(array('listorder', 'asc')));
		return $infos;
	}

	/**
	 * 更新用充值记录
	 *
	 * @return void
	 */
	public function _updateUserMoney($money, $username, $getuserid)
	{
		$money = (double) $money;
		if ($money <= 0)  {
			return ;
		}
		
		$moneyInfo = $this->_getMoneyInfo($username);
		$data = array(
			'want_money' => isset($moneyInfo['valid_money']) ? $moneyInfo['want_money'] + $money : $money,
			'want_times' => isset($moneyInfo['valid_times']) ? $moneyInfo['want_times'] + 1 : 1,
			'lasttime_account' => $this->time,
		);
		if (empty($moneyInfo)) {
			$data['username'] = $username;
			$data['userid'] = $getuserid;

			$this->member_payModel->addInfo($data);
		} else {
			$where = array('username =' => $username);
			$this->member_payModel->editInfo($data, $where);
		}
	}

}

class Custom_AdminController extends AdminController
{
	public function __construct()
	{
		parent::__construct();
	}
}