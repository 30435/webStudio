<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('PASSWD_OR_AID_EMPTY',  10001);
define('PASSWD_OR_AID_WRONG',  10002);
define('UNAME_EXIST',            10003);
define('UNAME_INVALID',          10004);
define('PASSWD_INVALID',          10005);
define('DATABASE_ERROR',          10006);
define('CAPTCHA_EMPTY',          10007);
define('CAPTCHA_WRONG',          10008);
define('EMAIL_WRONG',            10009);
define('SALT'         ,          'nova');

class Api1 extends Custom_Controller
{

	public function auth()	{		
		$msg['status'] = true;		
		$passwd=$this->input->get('passwd',false);
		$aid =trim($this->input->get('aid',false));
		
		//用户名或密码不能为空
		if(empty($passwd) or empty($aid)){
			$msg['status'] = false;
			$msg['code']   = PASSWD_OR_AID_EMPTY;
			$msg['msg']    = 'PASSWD_OR_AID_EMPTY';
		}else{
			if($uinfo = $this->db->from('account')->where(array('account_id'=>$aid,'passwd'=>md5($passwd.SALT)))->limit(1)->get()->row()){
				$msg['user_info'] = $uinfo;
				$this->db->update('account',array('last_login_date'=>time()),array('account_id'=>$uinfo->account_id));
			}else{
				$msg['status'] = false;
				$msg['code']   = PASSWD_OR_AID_WRONG;
				$msg['msg']    = 'PASSWD_OR_AID_WRONG';
			} 
		}
		echo json_encode($msg);
		exit;
	}
	
	public function register(){
		$msg['status'] = true;
		
		$passwd = $this->input->get('passwd');
		$email  = $this->input->get('email');
		
		if($code = $this->_is_valide_passwd($passwd)){
			if($code == 1){
				$msg['status'] = false;
				$msg['code']   = PASSWD_INVALID;
				$msg['msg']    = 'PASSWD_INVALID';
			}
		}elseif(!isset($_GET['captcha'])){
				$msg['status'] = false;
				$msg['code']   = CAPTCHA_EMPTY;
				$msg['msg']    = 'CAPTCHA_EMPTY';
		}elseif(! $this->is_right_captcha($_GET['captcha'])){
				$msg['status'] = false;
				$msg['code']   = CAPTCHA_WRONG;
				$msg['msg']    = 'CAPTCHA_WRONG';
		}
		
                //输入消息没错
		if($msg['status']){
			//创建uid
			$aid = $this->_create_uid();
			$data = array(
						'regist_date'=>time(),
						'reg_ip'=>$this->input->ip_address(),
						'account_id'=>$aid,
						'email'=>$email,
						'passwd'=>md5($passwd.SALT),
 		 				'reg_resource'=>isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']: ''
					);
			$this->db = DB('default');
			//创建用户
			$affected_rows = $this->db->insert('account',$data);
			if((int)$affected_rows == 1 ){
				$msg['aid']=$aid;
			}else{
				$msg['status'] = false;
				$msg['code']   = DATABASE_ERROR;
				$msg['msg']    = 'DATABASE_ERROR';
			}
		}
		echo json_encode($msg);
	}
	
	//return 1 用户名已存在  2，名称不合法  
	private function _is_valid_name($name){
		if($this->db->select('account_id')->from('account')->where(array('user_name'=>$name))->limit(1)->get()->row()){
			return 1;
		}
		$namelen = strlen($name);
		
		if( $namelen < 2 or $namelen > 10 ){
			return 2;
		}
		return 0;
	}
	
	private function _is_valide_passwd($passwd){
		$wdlen = strlen($passwd);
		if($wdlen < 6){
			return 1;
		}
		return 0;
	}
	
	private  function _create_uid(){
		$db=DB('nova');		
		$id_info = $db->from('aid_cre')->where(array('aid_status'=>0))->limit(1)->get()->row();
		$db->update('aid_cre',array('aid_status'=>1),array('id'=>$id_info->id));
		return $id_info->aid;
	}

	public function create_captcha($show=false,$json=true){
		$this->load->helper('captcha');
		$this->load->helper('string');
		$word = random_string('alnum',4);
		$vals = array(
			'word'=>$word,
		    'img_path' => './captcha/',
		    'img_url' => 'http://localhost/member/captcha/',
		    'img_width' => 90,
		    'img_height' => 35,
		    'expiration' => 1800,
			'font_path' => BASEPATH . 'fonts/elephant.ttf'
	    );
	    $cap = create_captcha($vals);
	    $data = array(
	    			'word'=>strtolower($cap['word']),
	    			'captcha_time'=>$cap['time'],
	    );
	    $this->db->insert('captcha',$data);
	    if($show){
	    	if($json){
		    	echo json_encode(array('img_path'=>$cap['image_path']));
		    	exit;
	    	}else{
	    		echo $cap['image'];
	    		exit;
	    	}
	    }else{
	    	return $cap['image'];
	    }
	}

	public function is_right_captcha($word){
		$word = strtolower($word);
		$expiration = time() - 1800;
		$this->db->delete('captcha',array('captcha_time <'=>$expiration));
		$cap = $this->db->select('captcha_id')->from('captcha')
			->where(array(
					'word'=>$word,
					'captcha_time >'=>$expiration,
			))
			->limit(1)->get()->row();

		return $cap ? true : false;
	}
	
	public function test_auth(){
		$this->load->view('auth');
	} 
	public function test_register(){
		$this->load->helper('date');
		$captcha_img = $this->create_captcha();
		
		$this->load->view('register',array('captcha'=>$captcha_img));
	}
}