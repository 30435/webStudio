<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attachment extends Custom_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->_loadModel(APPCODE, 'attachmentModel');
		//var_dump($this->attachmentModel);
		$this->params = array(
			'uploadPath' => $this->uploadPath,
			'attachmentModel' => $this->attachmentModel,
		);
		
		/*$this->userid = param::get_cookie('userid') ? param::get_cookie('userid') : param::get_cookie('_userid');
		$this->isadmin = $_SESSION['roleid'] ? 1 : 0;
		$this->groupid = param::get_cookie('_groupid') ? param::get_cookie('_groupid') : 8;
		$this->admin_username = $_SESSION['roleid'] ? param::get_cookie('admin_username') : '';*/
	}

	/**
	 * 常规上传
	 */
	public function upload() {
		$grouplist = getcache('grouplist','member');
		if($this->isadmin==0 && !$grouplist[$this->groupid]['allowattachment']) return false;
		pc_base::load_sys_class('attachment','',0);
		$module = trim($_GET['module']);
		$catid = intval($_GET['catid']);
		$siteid = $this->get_siteid();
		$site_setting = get_site_setting($siteid);
		$site_allowext = $site_setting['upload_allowext'];		
		$attachment = new attachment($module,$catid,$siteid);
		$attachment->set_userid($this->userid);
		$a = $attachment->upload('upload',$site_allowext);
		if($a){
			$filepath = $attachment->uploadedfiles[0]['filepath'];
			$fn = $attachment->uploadedfiles[0]['fn'];
			$this->upload_json($a[0],$filepath,$attachment->uploadedfiles[0]['filename']);
			$attachment->mkhtml($fn,$this->upload_url.$filepath,'');
		}
	}

	/**
	 * swfupload上传附件
	 *
	 * @return void
	 */
	public function swfupload()
	{			
		if (isset($_GET['dosubmit'])) {
			//if( $_POST['swf_auth_key'] != md5(pc_base::load_config('system','auth_key').$_POST['SWFUPLOADSESSID']) || ($_POST['isadmin']==0 && !$grouplist[$_POST['groupid']]['allowattachment'])) exit();

			$filetypePost = $this->input->post('filetype_post');
			$thumbWidth = $this->input->post('thumb_width');
			$thumbHeight = $this->input->post('thumb_height');
			$watermarkEnable = $this->input->post('watermark_enable');

			$this->load->library('attachmenttool', $this->params);
			$aids = $this->attachmenttool->upload('Filedata', $filetypePost, $thumbWidth, $thumbHeight, $watermarkEnable);

			$uploadedFiles = $this->attachmenttool->uploadedFiles[0];
			if ($aids[0] && !empty($uploadedFiles)) {
				echo $aids[0] . ',' . $this->uploadUrl . $uploadedFiles['file_path'].',' . $uploadedFiles['file_ext'] . ',' . $uploadedFiles['file_name'] . 'fuck';
			} else {
				echo '0,' . $this->attachmenttool->error();
			}
			exit;
		} else {
			$attNotUsed = $this->input->cookie(config_item('cookie_prefix') . 'att_json', true);
			$this->tabStatus = '';
			if (empty($att_not_used) || !isset($att_not_used)) {
				$this->tabStatus = ' class="on"';
			}
			$this->divStatus = '';
			if (!empty($att_not_used)) {
				$this->divStatus = ' hidden';
			}
			//$att = $this->att_not_used();	// 获取临时未处理文件列表
			
			$this->_initUpload();
			$this->load->view('swfupload');
		}
	}

	
	/**
	 * 设置upload上传的json格式cookie
	 */
	public function upload_json($aid,$src,$filename)
	{
		exit('ssss');
		$arr['aid'] = intval($aid);
		$arr['src'] = trim($src);
		$arr['filename'] = urlencode($filename);
		$json_str = json_encode($arr);
		$att_arr_exist = param::get_cookie('att_json');
		$att_arr_exist_tmp = explode('||', $att_arr_exist);
		if(is_array($att_arr_exist_tmp) && in_array($json_str, $att_arr_exist_tmp)) {
			return true;
		} else {
			$json_str = $att_arr_exist ? $att_arr_exist.'||'.$json_str : $json_str;
			param::set_cookie('att_json',$json_str);
			return true;			
		}
	}
		
	/**
	 * 设置swfupload上传的json格式cookie
	 */
	public function swfupload_json()
	{
		return true;
		var_dump($_GET);
		$arr['id'] = intval($_GET['aid']);
		$arr['path'] = trim($_GET['src']);
		$arr['filename'] = urlencode($_GET['filename']);
		$json_str = json_encode($arr);
		$att_arr_exist = param::get_cookie('att_json');
		$att_arr_exist_tmp = explode('||', $att_arr_exist);
		if(is_array($att_arr_exist_tmp) && in_array($json_str, $att_arr_exist_tmp)) {
			return true;
		} else {
			$json_str = $att_arr_exist ? $att_arr_exist.'||'.$json_str : $json_str;
			param::set_cookie('att_json',$json_str);
			return true;			
		}
	}

	/**
	 * Deal the picture
	 * 
	 * @return vaoid
	 */
	public function crop()
	{
		if (isset($_GET['picurl']) && !empty($_GET['picurl'])) {
			$picurl = $_GET['picurl'];

			$catid = intval($_GET['catid']);
			if (isset($_GET['module']) && !empty($_GET['module'])) {
				$module = $_GET['module'];
			}
			$show_header =  '';
			$this->load->view('crop');
		}
	}
	
	/**
	 * 加载图片库
	 */
	public function album_load() {
		/*if(!$this->admin_username) return false;
		$where = $uploadtime= '';
		$this->att_db= pc_base::load_model('attachment_model');
		if($_GET['args']) extract(getswfinit($_GET['args']));
		if($_GET['dosubmit']){
			extract($_GET['info']);
			$where = '';
			$filename = safe_replace($filename);
			if($filename) $where = "AND `filename` LIKE '%$filename%' ";
			if($uploadtime) {
				$start_uploadtime = strtotime($uploadtime.' 00:00:00');
				$stop_uploadtime = strtotime($uploadtime.' 23:59:59');
				$where .= "AND `uploadtime` >= '$start_uploadtime' AND  `uploadtime` <= '$stop_uploadtime'";				
			}
			if($where) $where = substr($where, 3);
		}
		pc_base::load_sys_class('form');
		$page = $_GET['page'] ? $_GET['page'] : '1';
		$infos = $this->att_db->listinfo($where, 'aid DESC', $page, 8,'',5);
		foreach($infos as $n=>$v){
			$ext = fileext($v['filepath']);
			if(in_array($ext,$this->imgext)) {
				$infos[$n]['src']=$this->upload_url.$v['filepath'];
				$infos[$n]['width']='80';
			} else {
				$infos[$n]['src']=file_icon($v['filepath']);
				$infos[$n]['width']='64';
			}
		}
		$pages = $this->att_db->pages;*/
		$this->load->view('album_load');
	}
	
	/**
	 * 目录浏览模式添加图片
	 */
	public function album_dir() {
		/*if(!$this->admin_username) return false;
		if($_GET['args']) extract(getswfinit($_GET['args']));
		$dir = isset($_GET['dir']) && trim($_GET['dir']) ? str_replace(array('..\\', '../', './', '.\\','..'), '', trim($_GET['dir'])) : '';
		$filepath = $this->upload_path.$dir;
		$list = glob($filepath.'/'.'*');
		if(!empty($list)) rsort($list);
		$local = str_replace(array(PC_PATH, PHPCMS_PATH ,DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR), array('','',DIRECTORY_SEPARATOR), $filepath);
		$url = ($dir == '.' || $dir=='') ? $this->upload_url : $this->upload_url.str_replace('.', '', $dir).'/';
		$show_header = true;*/
		$this->load->view('album_dir');
	}
			
	/**
	 * flash上传初始化
	 * 初始化swfupload上传中需要的参数
	 *
	 * @param $isadmin 是否为管理员模式
	 */
	protected function _initUpload()
	{
		$this->uploadArgs = $this->_getUploadArgs();

		$this->_uploadString = <<<SWFUPLOADSTR
var swfu = '';
$(document).ready(function(){
	swfu = new SWFUpload({
		flash_url:"{$this->staticUrl}common/swfupload/swfupload.swf?"+Math.random(),
		upload_url:"{$this->baseUrl}attachment/swfupload?dosubmit=1",
		file_post_name : "Filedata",
		post_params:{
			"SWFUPLOADSESSID":"{$this->uploadArgs['sessId']}",
			"appCode":"{$this->uploadArgs['appCode']}",
			"catid":"{$this->uploadArgs['catid']}",
			"userid":"{$this->uploadArgs['userid']}",
			"dosubmit":"1",
			"thumb_width":"{$this->uploadArgs['thumbWidth']}",
			"thumb_height":"{$this->uploadArgs['thumbHeight']}",
			"watermark_enable":"{$this->uploadArgs['watermarkEnable']}",
			"filetype_post":"{$this->uploadArgs['fileTypesPost']}",
			"swf_auth_key":"{$this->uploadArgs['swfAuthKey']}",
			"isadmin":"{$this->uploadArgs['isadmin']}"
		},
		file_size_limit:"{$this->uploadArgs['fileSizeLimit']}",
		file_types:"{$this->uploadArgs['fileTypes']}",
		file_types_description:"All Files",
		file_upload_limit:"5",
		custom_settings : {progressTarget : "fsUploadProgress",cancelButtonId : "btnCancel"},

		button_image_url: "",
		button_width: 75,
		button_height: 28,
		button_placeholder_id: "buttonPlaceHolder",
		button_text_style: "",
		button_text_top_padding: 3,
		button_text_left_padding: 12,
		button_window_mode: SWFUpload.WINDOW_MODE.TRANSPARENT,
		button_cursor: SWFUpload.CURSOR.HAND,

		file_dialog_start_handler : fileDialogStart,
		file_queued_handler : fileQueued,
		file_queue_error_handler:fileQueueError,
		file_dialog_complete_handler:fileDialogComplete,
		upload_progress_handler:uploadProgress,
		upload_error_handler:uploadError,
		upload_success_handler:uploadSuccess,
		upload_complete_handler:uploadComplete
	});
})
SWFUPLOADSTR;
		return ;
	}
	
	/**
	 * 读取swfupload配置类型
	 * 
	 * @param array $args flash上传配置信息
	 */
	protected function _getUploadArgs()
	{
		$authkey = $this->input->get('authkey');
		//if(upload_key($args) != $authkey) showmessage(L('attachment_parameter_error'));

		$uploadArgs = array();
		$appCode = 'content';//$this->input->get('appCode');
		$appUploadConfig = $this->appInfos[$appCode]['uploadConfig'];

		$args = $this->input->get('args');
		$uploadArgs['args'] = $args;
		$args = explode(',', $args);
		$allowExtArray = array();
		$appAllowExt = $appUploadConfig['allowExt'];
		$allowExt = (!empty($args[1])) ? $args[1] : $appAllowExt;
		$allowExtMids = explode('|', $allowExt);
		foreach ($allowExtMids as $extKey => $extValue) {
			$allowExtArray[$extKey] = '*.' . $extValue;
		}

		$uploadArgs['appCode'] = $appCode;
		$uploadArgs['catid'] = $this->input->get('catid');
		$uploadArgs['sessId'] = $this->time;
		$uploadArgs['swfAuthKey'] = md5('sss' . $this->time);
		$uploadArgs['userid'] = 1;
		$uploadArgs['isadmin'] = 1;
		$uploadArgs['fileSizeLimit'] = $file_size_limit = 10 * 1024;//$appUploadConfig['sizeLimit'] * 1024;
		$uploadArgs['fileTypes'] = implode(';', $allowExtArray);		
		$uploadArgs['fileNumLimit'] = intval($args[0]) ? intval($args[0]) : 8;
		$uploadArgs['fileTypesPost'] = $allowExt;
		$uploadArgs['allowUpload'] = isset($args[2]) ? intval($args[2]) : 0;
		$uploadArgs['thumbWidth'] = isset($args[3]) ? intval($args[3]) : 300;
		$uploadArgs['thumbHeight'] = isset($args[4]) ? intval($args[4]) : 300;
		$uploadArgs['watermarkEnable'] = (isset($args[5]) && $args[5] != '') ? intval($args[5]) : 1;
		return $uploadArgs;
	}	
}