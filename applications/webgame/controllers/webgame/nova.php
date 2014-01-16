<?php
if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

require dirname(dirname(__FILE__)) . '/index.php';

/**
 * 诺瓦官网
 */
class nova extends Index
{
	public function __construct()
	{
		parent::__construct ();

		$this->currentWebgameInfo = $this->webgameInfos['nova'];
		//$stopWebgame = $this->stopWebgame();
		//$this->currentWebgameInfo['stop_webgame'] = $stopWebgame;

		$this->voteElements = array(
			'1' => '诺瓦活动',
			'2' => '诺瓦宠物',
			'3' => '诺瓦热帖',
			'4' => '诺瓦传说'
		);
	}

	public function indexnew()
	{
		$this->templatePre = 'newfront/';
		parent::index();
	}

	public function categorynew()
	{
		$this->templatePre = 'newfront/';
		parent::category();	
	}
	
	public function shownew()
	{
		$this->templatePre = 'newfront/';
		parent::show();
	}

	public function slistnew()
	{
		$this->templatePre = 'newfront/';
		parent::slist();
	}

	public function spiritnew()
	{
		$this->templateSpiritPre = 'newfront/';
		parent::spirit();
	}

	public function voteRecord()
	{
		$voteType = $this->input->get('voteType');
		$voteElem = $this->input->get('voteElem');
		$isVote = $voteType == 'vote';
		$message = '';

		if ($isVote && !in_array($voteElem, array_keys($this->voteElements))) {
			$this->message = '您没有选择正确的选项';
		}
		$voteMark = $this->session->userdata('voteMark');
		if ($isVote && $voteMark == 'voted') {
			$this->message = '一天内只能投票一次（为了测试功能，当前一分钟可以投票一次）';
		}

		$this->_initCurrentModel('voteModel');
		if ($isVote && empty($this->message)) {
			$this->session->sess_expiration = 60;
			$data = array(
				'username' => isset($this->loginedUserInfo['username']) ? $this->loginedUserInfo['username'] : '',
				'element' => $voteElem,
				'ip' => $this->ip,
				'inputtime' => $this->time
			);
			$this->currentModel->addInfo($data, 'vote');

			$this->message = '投票成功，您选择的是 ' . $this->voteElements[$voteElem] . ' ， 谢谢您的参与';
			$this->session->set_userdata('voteMark', 'voted');
		}

		$sql = "SELECT COUNT(*) AS `elemcount`, `element` FROM `sw_vote` GROUP BY `element`";
		$query = $this->currentModel->currentDb->query($sql);	
		$this->infos = $query->result_array(); 

		$this->sum = 0;
		foreach ($this->infos as $info) {
			$this->sum += $info['elemcount'];
		}
		$this->load->view('newfront/voteRecord');
	}

	public function novaInfos()
	{
		$newInfos = $this->load->view('newfront/infos', $this->frontController, true);
		echo $newInfos;
		exit();
	}
}
