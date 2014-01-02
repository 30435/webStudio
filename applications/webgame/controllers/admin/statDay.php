<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__ . '/statCommon.php';
class statDay extends StatCommon
{
	public function __construct()
	{
		parent::__construct();
		$this->table = 'big_count';
	}

	public function big_count()
	{
		$this->tableInfo = array (
			'comment' => '总体统计表',
			'fields' => 
			array (
			  'id' => '',
			  'insert_date' => '插入时间',
			  'register_platfrom_count' => '注册账号总数',
			  'register_nova_count' => '创建角色总数',
			  'register_plat_day_count' => '当日注册账号数量',
			  'register_nova_day_count' => '当日创建角色数量',
			  'pet_all_count' => '宠物总数',
			  'login_nova_count' => '当日登录帐号数量',
			  'day_transformation' => '当日转化率',
			  'one_transformation' => '1日留存(百分比)',
			  'three_transformation' => '3日留存(百分比)',
			  'seven_transformation' => '7日留存(百分比)',
			  'day_active' => '当天活跃用户',
			  'week_active' => '周活跃用户',
			  'mouth_active' => '月活跃用户',
			  'back_flow' => '回流用户',
			  'pet_add' => '玩家每天获得宠物数量',
			  'battle_day_count' => '当天玩家战斗次数',
			  'join_battle_count_rate' => '玩家平均战斗次数', // ext
			  'join_battle_count_no' => '未进行战斗人数', // ext
			  'join_battle_count' => '当天进行过战斗的人数',
			  'battle_bellow_five_day' => '战斗次数5次以下人数',
			  'battle_five_ten_day' => '战斗次数5-10次人数',
			  'battle_up_ten_day' => '战斗次数10次以上人数',
			  'star_one' => '星空探索1次',
			  'star_two' => '星空探索2次',
			  'star_up_three' => '星空探索3次以上',
			  'blackhole_one' => '黑洞进行1次',
			  'blackhole_two' => '黑洞进行2次',
			  'star_challenge_one' => '星际挑战1次',
			  'star_challenge_up_two' => '星际挑战2次以上',
			  'composepet_count' => '宠物合成次数',
			  'babel_one_ten' => '完成1-10层挑战人数',
			  'babel_ten_twoten' => '完成10-20层挑战人数',
			  'babel_twoten_twofive' => '完成20-25层挑战人数',
			  'egg_one' => '参与1次扭蛋人数',
			  'egg_up_two' => '参与2次以上扭蛋人数',
			  'food_one' => '美食活动参与1次',
			  'food_two' => '美食活动参与2次',
			  'join_food' => '参与美食人数',
			  'join_food_rate' => '美食活动使用率', // ext
			  'rubbish_one' => '捡垃圾1次',
			  'rubbish_two' => '捡垃圾2次',
			  'rubbish_up_three' => '捡垃圾3次以上',
			  'join_rubbish' => '参与捡垃圾人数',
			  'join_rubbish_rate' => '捡垃圾使用率', // ext
			  'invest_short_one' => '参与1次短线投资',
			  'invest_short_up_two' => '参与2次以上短线投资',
			  'invest_long' => '参与长线投资',
			  'join_invest' => '参与投资人数',
			  'shop_count' => '商店使用次数',
			  'petevolution_count' => '进化宠物总量',
			  'petevolution_count_rate' => '进化宠物比率', // ext
			  'petlevelup_count' => '当天宠物升级次数',
			  'petlevel_avg' => '当天平均宠物提升等级',
			  'join_praybean' => '参与许愿豆的玩家',
			  'join_praybean_rate' => '许愿豌豆使用率', // ext
			  'join_question' => '参与答题的人数',
			  'join_question_rate' => '答题使用率', // ext
			  'join_restorepet' => '参与宠物治疗人数',
			  'join_restorepet_rate' => '宠物治疗使用率', // ext
			  'seizepet_count' => '当天捕捉宠物总量',
			  'seizepet_count_rate' => '玩家平均捕捉数量', // ext
			),
		);

		$this->template = 'admin/statDay';

		$this->currentInfo = $this->_getInfoById();
		if (empty($this->currentInfo)) {
			$this->baseList();
		} else {
			$this->showDetail = true; 
				$this->currentInfo['day_transformation'] = empty($this->currentInfo['register_plat_day_count']) ? 0 : round($this->currentInfo['register_nova_day_count'] / $this->currentInfo['register_plat_day_count'], 3) * 100 . '%';
				$this->currentInfo['join_battle_count_rate'] = empty($this->currentInfo['login_nova_count']) ? 0 : round($this->currentInfo['battle_day_count'] / $this->currentInfo['login_nova_count'], 3);
			    $this->currentInfo['join_battle_count_no'] = $this->currentInfo['login_nova_count'] - $this->currentInfo['join_battle_count'];
				$this->currentInfo['join_food_rate'] = empty($this->currentInfo['login_nova_count']) ? 0 : round($this->currentInfo['join_food'] / $this->currentInfo['login_nova_count'], 3) * 100 . '%';
				$this->currentInfo['join_rubbish_rate'] = empty($this->currentInfo['login_nova_count']) ? 0 : round($this->currentInfo['join_rubbish'] / $this->currentInfo['login_nova_count'], 3) * 100 . '%';
				$this->currentInfo['petevolution_count_rate'] = empty($this->currentInfo['login_nova_count']) ? 0 : round($this->currentInfo['petevolution_count'] / $this->currentInfo['login_nova_count'], 3) * 100 . '%';
				$this->currentInfo['join_praybean_rate'] = empty($this->currentInfo['login_nova_count']) ? 0 : round($this->currentInfo['join_praybean'] / $this->currentInfo['login_nova_count'], 3) * 100 . '%';
				$this->currentInfo['join_question_rate'] = empty($this->currentInfo['login_nova_count']) ? 0 : round($this->currentInfo['join_question'] / $this->currentInfo['login_nova_count'], 3) * 100 . '%';
				$this->currentInfo['join_restorepet_rate'] = empty($this->currentInfo['login_nova_count']) ? 0 : round($this->currentInfo['join_restorepet'] / $this->currentInfo['login_nova_count'], 3) * 100 . '%';
				$this->currentInfo['seizepet_count_rate'] = empty($this->currentInfo['login_nova_count']) ? 0 : round($this->currentInfo['seizepet_count'] / $this->currentInfo['login_nova_count'], 3);
			$this->load->view($this->template);
		}
	}

	/**
	 * Get the where clause
	 *
	 * @return array | null
	 */
	protected function _where()
	{
		$this->pagination->page_query_string=TRUE;
		$this->pagination->enable_query_strings=TRUE;
		$whereArray = array();
		$urlStr = '&table=' . $this->input->get_post('table');

		$timeFields = array('analyze_status' => 'insert_date', 'nova_behind' => 'create_time');


		$startTime = $this->input->get('start_time');
		$endTime = $this->input->get('end_time');

		if (!empty($startTime) || !empty($endTime)) {
			$whereArray = empty($startTime) ? $whereArray : array_merge($whereArray, array('insert_date >=' => str_replace('-', '', $startTime)));
			$whereArray = empty($endTime) ? $whereArray : array_merge($whereArray, array('insert_date <=' => str_replace('-', '', $endTime)));

			$urlStr .= empty($startTime) ? '' : '&start_time=' . $startTime;
			$urlStr .= empty($endTime) ? '' : '&end_time=' . $endTime;
		}

		$weeks = array(0, 1, 2, 3, 4, 5, 6);
		$week = $this->input->get_post('week');
		if ($week > 0 || $week === 0) {
			$whereArray = array_merge($whereArray, array('day_of_week' => $week));
			$urlStr .= '&week=' . $week;
		}

		$this->_paginationStr($urlStr);
		return $whereArray;
	}

    /**
	 * Format the manager infos 
	 *
	 * @param  array $infos the infos
	 * @return array | false formated infos
	 */
	protected function _formatInfos(array $infos)
	{
		if (is_array($infos) && !empty($infos)) {
			foreach ($infos as $key => $info) {
				$info['day_transformation'] = empty($info['register_plat_day_count']) ? 0 : round($info['register_nova_day_count'] / $info['register_plat_day_count'], 3) * 100 . '%';
				$info['join_battle_count_rate'] = empty($info['login_nova_count']) ? 0 : round($info['battle_day_count'] / $info['login_nova_count'], 3);
			    $info['join_battle_count_no'] = $info['login_nova_count'] - $info['join_battle_count'];
				$info['join_food_rate'] = empty($info['login_nova_count']) ? 0 : round($info['join_food'] / $info['login_nova_count'], 3) * 100 . '%';
				$info['join_rubbish_rate'] = empty($info['login_nova_count']) ? 0 : round($info['join_rubbish'] / $info['login_nova_count'], 3) * 100 . '%';
				$info['petevolution_count_rate'] = empty($info['login_nova_count']) ? 0 : round($info['petevolution_count'] / $info['login_nova_count'], 3) * 100 . '%';
				$info['join_praybean_rate'] = empty($info['login_nova_count']) ? 0 : round($info['join_praybean'] / $info['login_nova_count'], 3) * 100 . '%';
				$info['join_question_rate'] = empty($info['login_nova_count']) ? 0 : round($info['join_question'] / $info['login_nova_count'], 3) * 100 . '%';
				$info['join_restorepet_rate'] = empty($info['login_nova_count']) ? 0 : round($info['join_restorepet'] / $info['login_nova_count'], 3) * 100 . '%';
				$info['seizepet_count_rate'] = empty($info['login_nova_count']) ? 0 : round($info['seizepet_count'] / $info['login_nova_count'], 3);

				$infos[$key] = $info;
			}
		}

		return $infos;
	}
	
	/**
	 * The pagination config infos
	 *
	 * @return array config infos
	 */
	protected function _paginationConfig()
	{
		$config['per_page'] = 12; // Max number of items you want shown per page
		$config['num_links'] =  5; // Number of "digit" links to show before/after the currently viewed page
		$config['use_page_numbers'] = TRUE; // Use page number for segment instead of offset
		$config['next_link'] = '&gt;&gt;';
		$config['prev_link'] = '&lt;&lt;';
		//$config['uri_segment'] = 4;
		$config['cur_tag_open'] = '<span>';
		$config['cur_tag_close'] = '</span>';
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';
	
		return $config;
	}
}
