<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CommonController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->add_package_path(BASEPATH_EXT, true);
		$this->load->helper(array('html', 'url'));
		$this->load->library('encrypt');
	
		$this->module = trim($this->router->directory, '/');
		$this->controller = $this->router->class;
		$this->method = $this->router->method;
		
		$this->time = time();
		$this->ip = $this->input->ip_address();
		$configPublic = $this->_getConfigPublic();
		$this->staticUrl = isset($configPublic['customStaticUrl']) ? $configPublic['customStaticUrl'] : '';
		$this->uploadUrl = isset($configPublic['customUploadUrl']) ? $configPublic['customUploadUrl'] : '';
		$this->uploadPath = isset($configPublic['upload_path']) ? $configPublic['upload_path'] : '';
		$this->frontDomain = isset($configPublic['frontDomain']) ? $configPublic['frontDomain'] : '';

		$this->appInfos = $this->_getAppInfos();
		$this->baseUrl = $this->appInfos[APPCODE]['url'];		
		$this->load->library('session');

		$this->metaDatas = array('title' => 'kids开发团队', 'keywords' => 'kids 少儿 事业部 知金', 'description' => '少儿事业部是个少儿的乐园');
		$this->testUsers = array();
	}
	
	/**
	 * Create a checkcode
	 *
	 * @return  Draw a checkcode png, and write the checkcode info to the session
	 */
	public function checkcode()
	{
		$this->load->library('session');
		$checkCode = new CheckCode();
	
		$checkCodeStr = $checkCode->get_code();
		$checkCodeInfos = array(
				'checkcode'  => $checkCodeStr,
		);
		$this->session->set_userdata($checkCodeInfos);
		$checkCode->doimage();
	}

	/**
	 * Check the checkcode 
	 *
	 * @return string 
	 */
	public function isValidCode()
	{
		$this->load->library('session');
		$targetCheckCode = $this->session->userdata('checkcode');
		$checkCode = $this->input->get_post('checkcode');

		$isValid = $checkCode == $targetCheckCode ? true : false;
		$isAjax = $this->input->get('isajax');
		if ($isAjax == 'yes') {
			$resultStr = $isValid ? 'yes' : 'no';
			echo $resultStr;
			exit();
		}
		return $isValid;
	}

	/**
	 * Init the current model
	 * 
	 * @return void
	 */
	protected function _initCurrentModel($model)
	{
		$this->fieldInfos = array();
		$this->fieldChanges = array();
		if (!empty($model)) {
			$this->_loadModel(APPCODE, $model, 'currentModel');
			$this->fieldInfos = isset($this->currentModel->fieldInfos['fields']) ? $this->currentModel->fieldInfos['fields'] : array();
			$this->fieldChanges = isset($this->currentModel->fieldInfos['fieldChanges']) ? $this->currentModel->fieldInfos['fieldChanges'] : array();
		}
	}
	
	/**
	 * Load a model
	 * 
	 * @param string $appCode
	 * @param string $model
	 */
	public function _loadModel($appCode, $model, $name = '')
	{
		static $models = array();

		$modelBase = basename($model);
		$name = empty($name) ? $modelBase : $name;
		if (isset($models[$name])) {
			return ;
		}
		$models[$name] = 'loaded';

		$modelFile = $this->appInfos[$appCode]['path'] . 'models/' . strtolower($model) . '.php';
		if (!file_exists($modelFile)) {
			exit('model do not exist');
		}
		
		if (!class_exists('CI_Model')) {
			load_class('Model', 'core');
		}
		require_once($modelFile);
		$modelBase = ucfirst($modelBase);
		$this->$name = new $modelBase($appCode);

		return ;
	}

	/**
	 * Load the public config array
	 *
	 * @return  array
	 */
	private function _getConfigPublic()
	{
		$filePath = BASEPATH_APP . '/config_public.php';
		if (!file_exists($filePath)) {
			$this->_messageInfo('公共配置文件不存在！');
		}
	
		$config = require($filePath);
		return $config;
	}
	
	/**
	 * Get the application infos
	 *
	 * @return array the application Infos
	 */
	private function _getAppInfos()
	{
		$filePath = BASEPATH_APP . '/config_application.php';
		if (!file_exists($filePath)) {
			$this->_messageInfo('应用配置文件不存在！');
		}
	
		$appInfos = require($filePath);
		return $appInfos;
	}
	
	/**
	 * Get an info through a pointing id
	 * 
	 * @return array 
	 */
	protected function _getInfoById()
	{
		$info = array();
		$this->id = intval($this->input->get_post('id'));

		if (!empty($this->id)) {
			$where = array('id' => $this->id);
			$info = $this->currentModel->getInfo($where);
		}

		return $info;
	} 
	
	/**
	 * Check User login info
	 *
	 * @return void
	 */
	protected function _checkUserLogin()
	{
		$encrypt = $this->input->cookie(config_item('cookie_prefix') . 'encrypt', true);
		$userid = $this->input->cookie(config_item('cookie_prefix') . 'userid', true);
		$username = $this->input->cookie(config_item('cookie_prefix') . 'username', true);
		//var_dump($encrypt); var_dump($userid); var_dump($username);
		//exit();
		if (empty($encrypt) || empty($userid) || empty($username)) {
			return false;
		}

		$_userid = $_username = $_password = '';
		$encryptKey = $this->_getEncryptKey();
		//print_r(explode("\t", $this->encrypt->decode($encrypt, $encryptKey)));
		$encryptInfo = explode("\t", $this->encrypt->decode($encrypt, $encryptKey));
		$_userid = isset($encryptInfo[0]) ? $encryptInfo[0] : 0;
		$_username = isset($encryptInfo[1]) ? $encryptInfo[1] : '';
		$_password = isset($encryptInfo[2]) ? $encryptInfo[2] : '';
		if (empty($_userid) || empty($_username) || empty($_password) || $userid != $_userid || $username != $_username) {
			return false;
		}

		$where = array('username' => $username);
		//$this->_loadModel('passport', 'memberModel');
		$userInfo = $this->getUserInfo($where); //$this->memberModel->getInfo($where);
		if (empty($userInfo) || $userInfo['userid'] != $userid || $userInfo['username'] != $username) {
			return false;
		}

		$currentPassword = $this->_getPassword($_password, $userInfo['encrypt']);
		if ($userInfo['password'] != $currentPassword) {
			return false;
		}

		return $userInfo;
	}

	/**
	 * Get the encrypt key
	 *
	 * @return string
	 */
	protected function _getEncryptKey($key = '')
	{
		$key = empty($key) ? config_item('encryption_key') : $key;
		$encryptKey = md5($key . $this->input->user_agent());

		return $encryptKey;
	}

	/**
	 * Show the operation message
	 *
	 * @param  string $message
	 * @param  string $urlForward
	 * @param  int $showTime
	 * @return void
	 */
	protected function _messageInfo($message, $urlForward = '', $showTime = 10)
	{
		$this->message = $message;
		$this->urlForward = !empty($urlForward) ? $urlForward : '';
		$this->showTime = $showTime;

		echo $this->load->view('message', '', true);
		exit();
	}

	/**
	 * CKEditor upload method
	 * ckedit上传扩展
	 * 调用JS回调<script type=\\"text/javascript\\">window.parent.CKEDITOR.tools.callFunction($fn,$file,$message);</script>
	 * $fn=2,$file不为空，时为成功，$message是提示消息
	 *
	 * @return void
	 */
	public function ckeditorUpload($type = '')
	{
		$config['upload_path'] = $this->uploadPath . 'content/' . $type; // 配置上传路径
		$config['allowed_types'] = 'gif|jpg|png|swf'; // 允许上传的文件类型
		$config['max_size'] = '30000'; // 允许上传的文件大小
		//$config['encrypt_name'] = TRUE; // 上传文件随机重命名

		$this->load->library('upload', $config); // 加载上传类，并初始化配置
		$fn = $this->input->get('CKEditorFuncNum'); // 接收回调参数###
		if (!is_dir($config['upload_path'])) {
			if (!mkdir($config['upload_path'], 0777, TRUE)) {
				$message='是否有权限追寻目录上传';
				$str="<script type=\"text/javascript\">window.parent.CKEDITOR.tools.callFunction($fn,\"\",'$message');</script>";
				exit($str);
			}
		}

		// 判断是否上传成功
		if (!$this->upload->do_upload('upload')){
			// 做回调显示失败处理
			$message='是否有权限上传';
			$str="<script type=\"text/javascript\">window.parent.CKEDITOR.tools.callFunction($fn,\"\",'$message');</script>";
			exit($str);
		} else {
			$message='Upload successful(上传成功)';
			$updata=$this->upload->data(); // 返回上传文件的相关信息

			// 这里手动处理重命名文件,原文件名+当前时间###
			$rename= $this->_createSingleRandomStr() . $updata['file_ext'];
			$renamepath = $updata['file_path'].$rename;

			// 重命名文件###
			if (!rename($updata['full_path'], $renamepath)){
				$message='重命名失败';
				$str="<script type=\"text/javascript\">window.parent.CKEDITOR.tools.callFunction($fn,\"\",'$message');</script>";
				exit($str);
			}

			// 如需要可以做文件信息写入数据库处理
			$filePath = str_replace($this->uploadPath, '', $config['upload_path'] . '/' . $rename);
			//$filename=base_url().'uploads/'.$rename; ###当前上传的文件，也可以../uploads/6_2012_07_13_11.jpg
			$filename = $this->uploadUrl . $filePath;

			// 关键$filename这里记得加上''，不然会出错
			$str="<script type=\"text/javascript\">window.parent.CKEDITOR.tools.callFunction($fn,'$filename','$message');</script>";  
			exit($str);
		}
	}

	/**
	 * Create a random string
	 *
	 * @param  string $length the length of the string
	 * @return string random string
	 */
	protected function _createRandomstr($length = 6, $chars = '123456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ')
	{
		$hash = '';
		$max = strlen($chars) - 1;
		for($i = 0; $i < $length; $i++) {
			$hash .= $chars[mt_rand(0, $max)];
		}
		return $hash;
	}
	
	/**
	 * Create a single random string
	 *
	 * @return string
	 */
	protected function _createSingleRandomStr()
	{
		mt_srand((double) microtime() * 1000000);
		return date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
	}
	
	/**
	 * Write cache file
	 *
	 * @param  string $id
	 * @param  maxed $data
	 * @return void
	 */
	protected function _cacheWrite($id, $data)
	{
		$this->load->driver('cache');

		$this->cache->file->save($id, $data);
		return ;
	}

	/**
	 * Cache the array to php file
	 *
	 * @param string $file
	 * @param array $data
	 * @return void
	 */
	protected function _cacheData($file, $data)
	{
		if (!is_array($data)) {
			return false;
		}
		if (strpos($file, dirname(BASEPATH_APP)) === false) {
			return false;
		}
		
		$data = "<?php\nreturn " . var_export($data, true) . ";\n?>";
		$strlen = file_put_contents($file, $data);
		return $strlen;
	}

	/**
	 * Check the manager wether exist
	 * @return void
	 */
	protected function _checkExist($field, $isSelf = true)
	{
		$action = $this->input->get_post('action');
		if ($action != 'checkExist') {
			return ;
		}

		$fieldValue = $this->input->get_post($field);
		
		if (empty($fieldValue)) {
			exit('0');
		}

		$where = array($field => $fieldValue);
		$info = $this->currentModel->getInfo($where);

		$currentId = $this->input->get_post('id');
		if (!empty($info) && $info['id'] != $currentId) {
			exit('0');
		}

		exit('1');
	}

	/**
	 * Get cache
	 *
	 * @param  string $id
	 * @return maxed
	 */
	protected function _cacheRead($id, $data)
	{
		$this->load->driver('cache');

		$this->cache->file->save($id, $data);
		return ;
	}

	/**
	 * Deal the password of the manager
	 *
	 * @param  string $password the user password
	 * @param  string $encrypt suffix string
	 * @return array infos of password
	 */
	protected function _getPassword($password, $encrypt = '')
	{
		$passwordInfos = array();
		$passwordInfos['encrypt'] =  empty($encrypt) ? $this->_createRandomstr() : $encrypt;
		$passwordInfos['password'] = md5(md5(trim($password)) . $passwordInfos['encrypt']);
		return empty($encrypt) ? $passwordInfos : $passwordInfos['password'];
	}

	/**
	 * Deal the kay and value of an array
	 * 
	 * @param  array $array
	 * @param  string $function
	 * @param  $applyToKeysAlso
	 * @return void
	 */
	protected function _arrayRecursive(&$array, $function, $applyToKeysAlso = false)
	{
		static $recursiveCounter = 0;
		if (++$recursiveCounter > 1000) {
			die('possible deep recursion attack');
		}
		
		foreach ($array as $key => $value) {
			if (is_array($value)) {
				$this->_arrayRecursive($array[$key], $function, $applyToKeysAlso);
			} else {
				$array[$key] = $function($value);
			}

			if ($applyToKeysAlso && is_string($key)) {
				$newKey = $function($key);
				if ($newKey != $key) {
					$array[$newKey] = $array[$key];
					unset($array[$key]);
				}
			}
		}
		$recursiveCounter--;
	}

	/**
	 * Create a json string for jsonp from an array
	 * 
	 * @param  array $array
	 * @return string
	 */
	protected function _jsonp($array)
	{
		$this->_arrayRecursive($array, 'urlencode', true);
		$json = json_encode($array);
		$json = urldecode($json);
		$json = $_GET["callback"] . '(' . $json . ');';
		return $json;
	}

	/**
	 * Get the url status
	 *
	 * @param string $url
	 * @return boolean
	 */
	protected function _getUrlStatus($url)
	{
		$urlStatus = false;
		if (empty($url)) {
			return $urlStatus;
		}
		
		$headerStatus = @get_headers($url);
		$urlStatus = (strpos($headerStatus[0], '200') === false) ? false : true;

		return $urlStatus;
	}

	/**
	 * Get the code of the string
	 *
	 * @param string $string
	 * @return string 
	 */
	protected function _getStringCode($string)
	{
		$codes = array('ASCII', 'GBK', 'UTF-8');
		foreach($codes as $code){
			if( $string === iconv('UTF-8', $code, iconv($code, 'UTF-8', $string))){
				return $code;
			}
		}

		return null;
	}
	
	/**
	 * Change the code of the string
	 * 
	 * @param string $string
	 * @param boolean $tuUtf8
	 * @return string
	 */
	protected function _changeCode($string, $toUtf8 = true)
	{
		$codeType = mb_detect_encoding($string);
		if ($toUtf8) {
			$string = ($codeType != 'UTF-8') ? iconv('gbk', 'utf-8', $string) : $string;
		} else {
			$string = ($codeType == 'UTF-8') ? iconv('utf-8', 'gbk', $string) : $string;
		}
		
		return $string;
	}

	/**
	 * Create the path
	 * 
	 * @param string $path
	 * @return boolean
	 */
	protected function _makeDir($dir)
	{
		$isDir = is_dir($dir);
		if ($isDir) {
			return true;
		}

		if (strpos($dir, dirname(BASEPATH_APP)) === false) {
			return false;
		}
		
		$parentDir = dirname($dir);
		if (!is_dir($parentDir)) {
			$this->_makeDir($parentDir);
		} else {
			mkdir($dir);
			return true;
		}
	}

	/**
	 * Down the file from web
	 *
	 * @return void
	 */
	protected function _downFile($url, $localFile, $validExts = '', $isForce = false)
	{
		if (file_exists($localFile) && empty($isForce)) {
			return true;
		}

		if (empty($url) || (strpos($localFile, dirname(BASEPATH_APP)) === false)) {
			return false;
		}

		$fileInfos = pathinfo($url);
		$validExts = empty($validExts) ? array('css', 'js', 'jpg', 'gif', 'png') : $validExts;
		if (!in_array($fileInfos['extension'], $validExts)) {
			return false;
		}

		$urlStatus = $this->_getUrlStatus($url);
		$this->_makeDir(dirname($localFile));
		$remoteContent = file_get_contents($url);
		file_put_contents($localFile, $remoteContent);
		return true;
	}

	/**
	 * Get the logined user money info
	 *
	 * @return false | array
	 */
	public function _getMoneyInfo($username, $isLock = false)
	{
		$where = array('username' => $username);
		$this->_loadModel('pay', 'member_payModel');
		$info = $this->member_payModel->getInfo($where);

		if ($isLock) {
			$data = array('locktime' => $this->time);
			$this->member_payModel->editInfo($data, $where);

			$info = $this->time - $info['locktime'] < 0 ? array() : $info;
		}
		return $info;
	}

	/**
	 * Get the user info
	 *
	 * @param string $where
	 */
	public function getUserInfo($where)
	{
		$this->_loadModel('passport', 'memberModel');
		$userInfo = $this->memberModel->getInfo($where);
		return $userInfo;
	}

	/**
	 * Get the webgame infos 
	 *
	 */
	protected function _getWebgameInfos()
	{
		$this->_loadModel('webgame', 'webgameModel');
		$infos = $this->webgameModel->getAllInfos('', 'code', array(), array(array('listorder', 'asc')));
		return $infos;
	}

    /**
     * Get the category infos
     *
     * @return array the category Infos
     */
    protected function _getCategoryInfos($parentid = 0, $getAll = false)
    {
		$this->_loadModel('webgame', 'categoryModel');
        $categoryInfos = $this->categoryModel->getAllInfos('', $keyField = 'id');

    	return $categoryInfos;
    }

	/**
	 * Get the infos 
	 *
	 */
	public function _getFrontInfos($appCode, $table, $page = 1, $pageSize = 15,  $where = array(), $order = array(),$fields = '*', $keyField = '') //($appCode, $table, $keyField, $page = 1, $pageSize = 15, $where = array(), $order = array())
	{
		$model = $table . 'Model';

		$this->_loadModel($appCode, $model);
		$infos = $this->$model->getInfos($table, $where, $order, $page, $pageSize, $fields, $keyField);
		return $infos;
	}
}
