<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__ . './statCommon.php';
class statAnalyze extends StatCommon
{
	public function __construct()
	{
		parent::__construct();
		$this->table = 'analyze_status';
	}

	public function analyze_status()
	{
		define('ANALYZE_STATUS', "SELECT SUM(plat_count) AS `platcount`, SUM(game_count) AS `gamecount` FROM");
		$this->baseList();
	}
	
    /**
	 * Format the manager infos 
	 *
	 * @param  array $infos the infos
	 * @return array | false formated infos
	 */
	protected function _formatInfos(array $infos)
	{
		$dateFields = array('time', 'insert_date', 'create_time', 'lastin', 'lastout');
		if (is_array($infos) && !empty($infos)) {
			$currentPlatnum = $currentGamenum = 0;
			foreach ($infos as $key => $info) {
				$currentPlatnum += $info['plat_count'];
				$currentGamenum += $info['game_count'];
				foreach ($dateFields as $dateField) {
					if (isset($info[$dateField])) {
						$info[$dateField] = date('Y-m-d H:i:s', $info[$dateField]);
					}
				}
				$infos[$key] = $info;
			}
			//$this->extInfo['currentPlatnum'] = $currentPlatnum;
			//$this->extInfo['currentGamenum'] = $currentGamenum;

			$infos[++$key] = array('id' => '', 'pet_all_count' => '转化率 (' . ($currentGamenum / $currentPlatnum) . ')', 'money_all_count' => '', 'item_all_count' => '', 'insert_date' => '<span style="font-size:18px;color:#009900;">当前页总计</span>', 'plat_count' => $currentPlatnum, 'game_count' => $currentGamenum);
			$infos[++$key] = array('id' => '', 'pet_all_count' => '转化率 (' . ($this->extInfo['gamecount'] / $this->extInfo['platcount']) . ')', 'money_all_count' => '', 'item_all_count' => '', 'insert_date' => '<span style="font-size:18px;color:#009900;">总计</span>', 'plat_count' => $this->extInfo['platcount'], 'game_count' => $this->extInfo['gamecount']);
		}

		return $infos;
	}
}