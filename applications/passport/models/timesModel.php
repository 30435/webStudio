<?php
class TimesModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'times';
		parent::__construct($data);
	}
	
	/**
	 * Check the times of login
	 * 
	 * @param array $where
	 * @return int $remainMinute the result of checking
	 */
	public function checkLoginTimes($where)
	{
		$remainMinute = 0;
		$info = $this->getInfo($where);
		if (empty($info) || $info['times'] <= 4) {
			return $remainMinute;
		}
		
		$remainMinute = 1 - floor(($this->time - $info['logintime']) / 60);
		if ($info['times'] > 4 && $remainMinute <= 0) {
			$this->deleteInfo($where);
		}
		
		return $remainMinute;			
	}
	
	/**
	 * Change the login tiems info
	 * 
	 * @param boolean $checkPassword 
	 * @param array $where
	 * @return void
	 */
	public function writeLoginTimes($where, $checkPassword, $ip)
	{
		if ($checkPassword) {
			$this->deleteInfo($where);
			return ;
		}
		
		$info = $this->getInfo($where);
		$timesOld = isset($info['times']) ? intval($info['times']) : 0;
		$timesUpdateInfo = array('ip' => $ip, 'times' => $timesOld + 1, 'logintime' => $this->time);
		if (!empty($info)) {
			$this->editInfo($timesUpdateInfo, $where);
		} else {
			$timesAddInfo = array_merge($where, $timesUpdateInfo);
			$this->addInfo($timesAddInfo);
		}
		
		return ;
	}
}