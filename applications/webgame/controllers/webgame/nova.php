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
		
		$this->templatePre = 'nova/';
	}

	public function indexnew()
	{
		$template = 'newfront/index';//isset($this->templatePre) ? $this->templatePre . 'index' : 'index';
		$this->load->view($template, $this->frontController);
	}

	protected function stopWebgame()
	{
		$stopWebgame = false;
		/**if (!empty($this->currentWebgameInfo['start_maintain']) && !empty($this->currentWebgameInfo['end_maintain'])) {
			if ($this->time > $this->currentWebgameInfo['start_maintain'] && $this->time < $this->currentWebgameInfo['end_maintain']) {
				$urlWebgame = empty($this->currentWebgameInfo['url_maintain']) ? $this->currentWebgameInfo['url_server'] . 'maintain' : $this->currentWebgameInfo['url_maintain'];
			}
		}*/

		$currentHour = date('H', $this->time);
		if ($currentHour >= 7 && $currentHour < 23) {
			return false;
		}
		if ($currentHour >= 0 && $currentHour < 7) {
			return true;
		}

		$currentWeek = date('w', $this->time); echo $currentWeek;
		$inWeekend = $currentWeek == 0 || $currentWeek == 6 ? true : false;

		if ($inWeekend) {
			return false;
		}


		$inHoliday = false;
		if (!empty($this->currentWebgameInfo['holiday'])) {
			$holidayInfo = explode('-', $this->currentWebgameInfo['holiday']);
			$holidayStart = intval(str_replace('/', '', $holidayInfo[0]));
			$holidayEnd = intval(str_replace('/', '', $holidayInfo[1]));

			$currentDay = date('Ymd', $this->time);
			if (strlen($holidayStart) == 8 && strlen($holidayEnd) == 8 && $currentDay >= $holidayStart && $currentDay <= $holidayEnd) {
				$inHoliday = true;
			}
		}
		
		if ($inHoliday) {
			return false;
		}

		return true;
	}
	
	public function novasub()
	{
		$this->load->view('nova/novasub', $this->frontController);
	}

	public function stopgame()
	{
		$this->load->view($this->templatePre . 'stopgame');
	}
}
