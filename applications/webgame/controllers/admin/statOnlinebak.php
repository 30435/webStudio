<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__ . '/statCommon.php';
class StatOnline extends StatCommon
{
	public function __construct()
	{
		parent::__construct();
		$this->table = 'online';
	}

	public function online()
	{
		$initResult = $this->initExt();
		if (empty($initResult)) {
			return ;
		}

		$extType = $this->input->get_post('extType');
        $this->currentDate = date('Y-m-d', $this->time);

		if (!in_array($extType, array(1, 2, 3))) {
			exit();
		}

		$whereInfos = $this->getWhereInfos($extType);
		$extInfos = array();
		foreach ($whereInfos as $key => $whereInfo) {
			$extInfo = array();
			$where = "`time` >= {$whereInfo['start']} AND `time` < {$whereInfo['end']}";
			$sql = "SELECT SUM(`online_count`) AS `nums` FROM `{$this->table}` WHERE {$where}";
			$sum = $this->getNums($sql);

			$whereFormat = array('time >=' => $whereInfo['start'], 'time <' => $whereInfo['end']);
			$order = array(array('online_count', 'desc'));
			$result = $this->currentModel->getInfos($this->table, $whereFormat, $order, 1, 10);
			$extInfo['daytime'] = $whereInfo['info'];
			$extInfo['infos'] = $result['infos'];
			$extInfo['sum'] = $sum;
			$extInfo['count'] = $result['num'];
			$extInfo['average'] = !empty($result['num']) ? round($sum / $result['num'], 1) : 0;
			$extInfos[$key] = $extInfo;
		}

		$this->extInfos = $extInfos;
		$this->load->view('admin/online');
		
//print_r($extInfos);
		$resultStr = '<meta http-equiv="Content-type" content="text/html; charset=utf-8" /><div class="pad_10"><div class="common-form"><table width="100%" class="table_form contentWrap">';
		$resultStr .= '<thead><tr><th>时间</th><th>平均在线数（总数/记录数）</th><th>在线数前十</th></tr></thead><tbody>';
		foreach ($extInfos as $extInfo) {
			$frontRecordStr = '';
			if (is_array($extInfo['infos'])) {
				foreach ($extInfo['infos'] as $k => $record) {
					$prefix = $k == 4 ? '<br />' : '';
					$frontRecordStr .= $record['online_count'] . '--' . date('Y-m-d H:i:s', $record['time']) . ', ' . $prefix;
				}
			}
			$resultStr .= '<tr><td>' . $extInfo['daytime'] . '</td><td>' . $extInfo['average'] . '(' . $extInfo['sum'] . '/' . $extInfo['count'] . ')' . '</td><td>' . $frontRecordStr . '</td></tr>';
		}
		$resultStr .= '</tbody></table></div></div>';
//		echo $resultStr;
	}

	protected function getWhereInfos($extType)
	{
		$whereInfos = array();
		switch ($extType) {
			case 1:
				$extTime = $this->input->get_post('extTime');
				$baseTime = strtotime($extTime);

				for ($i = 0; $i < 5; $i++) {
					$timeStamp = $baseTime - ($i * 86400);
					$whereInfos[$i] = array('start' => $timeStamp, 'end' => $timeStamp + 86400, 'info' => date('Y-m-d H:i:s', $timeStamp + 80000));
				}
				return $whereInfos;
			case 2:
				$selectHour = intval($this->input->get_post('selectHour'));
				$currentHour = date('H', $this->time);
				$baseTime = $currentHour < $selectHour ? strtotime(date('Y-m-d', $this->time - 86400) . ' ' . $selectHour . ':00:00') : strtotime(date('Y-m-d', $this->time) . ' ' . $selectHour . ':00:00');

				for ($i =0; $i < 5; $i++) {
					$timeStamp = $baseTime - ($i * 86400);
					$whereInfos[$i] = array('start' => $timeStamp, 'end' => $timeStamp + 3600, 'info' => date('Y-m-d H:i:s', $timeStamp + 3000));
				}
				return $whereInfos;
		}
	}
}
