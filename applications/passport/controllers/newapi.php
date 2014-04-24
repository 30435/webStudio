<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/apiBase.php';
class Newapi extends ApiBase
{
	public function __construct()
	{
		parent::__construct();

		$this->messageInfos = array(
			'10000' => array('SUCCESSFUL'),
			'10001' => array('PARAMS_WRONG'),
			'10002' => array('VERIFICATION_WRONG'),

			'10003' => array('LOGIN_INFO_EMPTY'),
			'10004' => array('PASSWD_WRONG_TIMESOVER'),
			'10005' => array('USERNAME_NOT_EXIST'),
			'10006' => array('PASSWD_WRONG'),
			'10007' => array('EXTRA_WRONG'),
			'10008' => array('DATABASE_ERROR'),

			'10009' => array('REGISTER_INFO_EMPTY'),
			'10010' => array('REGISTER_PASSWORD_NOEQUAL'),
			'10011' => array('CAPTCHA_WRONG'),
			'10012' => array('EMAIL_WRONG'),

			'11000' => array('EXCEPTION'),
		);
	}
	
	/**
	 * The enter function
	 */
	public function index1()
	{
		$infos = array();
		$strSource = serialize($_POST);
		$strSource .= '===' . serialize($_GET);
		file_put_contents($this->uploadPath . time() . 'source.txt', $strSource);
		$param = $this->input->get_post('jstr');
		file_put_contents($this->uploadPath . time() . '.txt', $param);
		if (empty($param)) {
			$data = array(
				'status' => 0,
				'message' => 'param error',
			);
			exit(json_encode($data));
		}

		$infos = json_decode($param, true);
		//print_r($infos);
		$infos = $this->formatInfos($infos);
		
		echo json_encode($infos);
	}

	protected function formatInfos($infos)
	{
		if (!is_array($infos)) {
			return '';
		}
		foreach ($infos as $key => $value) {
			if (is_array($value)) {
				$value = $this->formatInfos($value);
				$infos[$key] = $newValue;
			} else {
				$value = 'server: ' . $value;
			}

			$infos[$key] = $value;
		}
		
		return $infos;
	}

	public function test()
	{
		$info = json_decode('{"url":"http://upload.ci.com/1398307161.png","type":"png"}');print_r($info);exit();
		$this->load->view('test');
	}

	public function index()
	{
		$strSource .= '===' . serialize($_GET);
		file_put_contents($this->uploadPath . time() . 'source.txt', $strSource);

		//var_dump($_GLOBALS);
		$data = file_get_contents('php://input'); 
		//$data = file_get_contents ( 'php://input' ) ? file_get_contents ( 'php://input' ) : gzuncompress ( $GLOBALS ['HTTP_RAW_POST_DATA'] );
		$filename = $this->uploadPath . time();
		$ret = file_put_contents($filename, $data, true);


		/*$file = fopen($filename, "rb");
$bin = fread($file, 2); //只读2字节
fclose($file);
$strInfo = @unpack("C2chars", $bin);
$typeCode = intval($strInfo['chars1'].$strInfo['chars2']);
$fileType = '';
switch ($typeCode) {
case 7790: $fileType = 'exe'; break;
case 7784: $fileType = 'midi'; break;
case 8297: $fileType = 'rar'; break;
case 255216: $fileType = 'jpg'; break;
case 7173: $fileType = 'gif'; break;
case 6677: $fileType = 'bmp'; break;
case 13780: $fileType = 'png'; break;
default: echo'unknown';
}

$filenameNew = $filename . '.' . $fileType;
rename($filename, $filenameNew);*/

$returnInfo['url'] = str_replace($this->uploadPath, $this->uploadUrl, $filename);
$returnInfo['extName'] = 'server-' . $this->input->get_post('extName');
//$returnInfo['type'] = $fileType;
//rint_r($returnInfo);
echo json_encode($returnInfo);
exit();
echo'这是一个'.$fileType.' file:'.$typeCode;
		//echo strlen($data);
	}

	public function requestMethod()
	{
		$data = array(
			'1' => 'test1',
			'2' => array(
				'11' => 'test11',
				'22' => 'test22',
			),
			'3' => 'tesi中文t3',
			'4' => array(
				'11' => 'test11',
				'22' => array(
					'111' => 'test111',
					'222' => 'test222',
				)
			)
		);
		$str = json_encode($data);
//echo 'http://passport.ci.com/newapi?jstr=' . $str;exit();
		header('Location: http://passport.ci.com/newapi?jstr=' . $str);
	}
}

