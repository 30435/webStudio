<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Config extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->configPayKeys = array('pay_open', 'pay_close_url', 'pay_paymonth_open', 'pay_webgame_open');
	}

	/**
	 * List the all manager log infos
	 *
	 * @return void
	 */
	public function base()
	{
		$this->load->view('admin/config');
	}

    /**
	 * View a manager log info
	 *
	 * @return void
	 */
	public function change()
	{
		$this->lang->load('form_key');
        $this->form_validation->set_rules('username', "lang:username", 'trim|min_length[2]|max_length[20]|xss_clean');
		if ($this->form_validation->run() == false) {
			$this->load->view($this->template);
		} else {
			foreach ($this->configPayKeys as $key) {
				$configPayInfos[$key] = $this->input->post($key);
			}

			$data = "<?php\r\n return "
				. var_export($configPayInfos, TRUE)
				. ";\r\n?>";
			@file_put_contents($this->appInfos[APPCODE]['path'] . 'config/config_pay.php', $data);

			$message = $this->appMenus[$this->method]['name'] . $this->lang->line('admin_successful');
			$this->_showMessage($message, $this->currentMenu['url']);
		}
	}
}