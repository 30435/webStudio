<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/indexBase.php';
class Utaomi extends IndexBase
{
	public function __construct()
	{
		$this->prefix = 'utaomi';
		parent::__construct();
	}

	public function apply()
	{
		$this->load->view($this->prefix . '/apply_1');
	}

	public function security()
	{
		$action = $this->input->get('action');
		$method = '_' . $action;
		$this->$method();
	}

	public function _question()
	{
		$this->load->view($this->prefix . '/bind_question');
	}

	public function securityLevel()
	{
		if (empty($this->loginedUserInfo)) {
			return false;
		}

		$score = 0;
		$haveMovile = !empty($this->loginedUserInfo['mobile']);
		$haveTruename = empty($this->loginedUserInfo['truename']) || empty($this->loginedUserInfo['idcard']);
		$haveEmail = !empty($this->loginedUserInfo['email']);

		if (empty($this->loginedUserInfo['mobile'])) {
		}
	}




	/**
	 * Display the webplat xianlfc  index page
	 *
	 * @return void
	 */
	public function index()
	{
		$this->_getHeader();
		$this->_getFooter();
		//type = $this->input->get('type');
		
		$this->type 		= self::getParam('type');
		$this->userid 	= self::getParam('uid');
		$this->verify 		= self::getParam('verify');
		$this->sign 		= self::getParam('sign');
		$this->str	  		=	'activeemail.php?type='.$this->type.'&uid='.$this->userid.'&verify='.$this->verify;
		$sign_n	  			=	md5($this->str."&key=12345678emailganwanfindpassword6tf7d");
		/*
		$table = 'activation';
		$query = $this->currentDb->get_where($table, array('UserID' => $this->userid));
		$info = $query->row_array();

		if(!empty($info)){
			if($info['Flag'] == 1){
				$this->_messageInfo('链接已经使用过，已无效！', $this->baseUrl);
			}
		}
		*/
		if ($this->sign!=$sign_n){
			$this->_messageInfo('验证码不正确！', $this->baseUrl);
		}
		$verify = base64_decode($this->verify);
		$dtime  = substr(strstr($verify, '='), 1);
		if(time()-$dtime > 259200){
			$this->_messageInfo('对不起，该链接已失效！', $this->baseUrl);
		}
		/*
		$userInfo['UserID'] = $this->userid;
		$userInfo['Activation'] = $sign_n;
		$userInfo['Flag'] = 0;
		$this->currentDb->insert('activation', $userInfo);
		*/
		$this->load->view('changepassword',$this->userid);
		
	}
	
	public function editChangPassword()
	{
		$oldpassword = $this->input->post('oldpassword');
		$password = $this->input->post('password');
		$password2 = $this->input->post('password2');
		$userid 		= $this->input->post('userid');
		$sign_n	  			=	md5("&key=12345678emailganwanfindpassword6tf7d");
		
		if ($password != $password2) {
			echo '您输入的新密码不一致！';
			exit();
		}
		$userInfo = $this->_getUserByUserID($userid);
		if ($this->settings['ucserver']) {
				$result = uc_user_edit($userInfo['username'], $oldpassword, $password, 0,1);//如果是0需要验证旧密码1不需要
				if($result===1){
					$data['password'] = $this->_getPassword($password, $userInfo['encrypt']);
					$this->currentDb->where('userid', $userInfo['userid']);
					if ($this->currentDb->update('members', $data)) {
						/*
						$updateflag = array('Flag' => 1);
						$this->currentDb->where('UserID', $userInfo['userid']);
						$this->currentDb->update('activation', $updateflag);
						*/
						echo 'ok';
					} else {
						echo '帐号被锁定！';
					}
				} else {
					$str = $result == -1 ? '旧密码错误！' : '密码修改失败！';
					echo $str;
				}
				exit();
		}
		
	}
	
	public function getParam($paramName){
		if (isset($_GET[$paramName])) {
			return self::safestr($_GET[$paramName]);
		}elseif (isset($_POST[$paramName])) {
			return self::safestr($_POST[$paramName]);
		} else {
			return false;
		}
	}
	
	/**
	* 	防注入函数，用MYSQL的方法查检字符
	* 	@access	public
	* 	@param	integer		$content
	* 	@return 	string	 				
	*/
	public function safestr($str,$length = 0)
	{
		if (get_magic_quotes_gpc()) {
			return $str;
		} else {
			if (is_array($str)) {
				foreach ($str as $k=>$val) {
					$str[$k] = preg_replace("/\\\\+/","\\", trim(str_replace(array("'",'"'),array("\'",'\"'),$val)));
				}
				return $str;
			} else {
				//$str = str_replace(array(" "," "),array("",""),$str);
				return preg_replace("/\\\\+/","\\", trim(str_replace(array("'",'"'),array("\'",'\"'),$str)));
			}
		}
	}
	

}