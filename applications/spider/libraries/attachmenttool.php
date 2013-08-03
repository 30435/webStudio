<?php 
class attachmenttool
{
	/**
	 * Init the attachmenttool
	 *
	 * @return void
	 */
	public function __construct($params = array())
	{
		$this->appCode = isset($params['appCode']) ? $params['appCode'] : '';;
		$this->uploadRoot = isset($params['uploadPath']) ? $params['uploadPath'] : '';
		$this->attachmentModel = isset($params['attachmentModel']) ? $params['attachmentModel'] : '';
		$this->uploadFunc = 'copy';
		$this->imgext = array('jpg','gif','png','bmp','jpeg');

		/*$this->catid = intval($catid);
		$this->siteid = intval($siteid)== 0 ? 1 : intval($siteid);
		$this->module = $module ? $module : 'content';
		pc_base::load_sys_func('dir');		
		pc_base::load_sys_class('image','','0');
		
		$this->upload_dir = $upload_dir;*/
	}

	/**
	 * 附件上传方法
	 *
	 * @param $field 上传字段
	 * @param $alowexts 允许上传类型
	 * @param $maxsize 最大上传大小
	 * @param $overwrite 是否覆盖原有文件
	 * @param $thumb_setting 缩略图设置
	 * @param $watermark_enable  是否添加水印
	 */
	public function upload($field, $allowexts = '', $maxsize = 0, $overwrite = 0,$thumb_setting = array(), $watermark_enable = 1)
	{
		$uploadFiles = $this->_getUploadFiles($field, $allowexts, $maxsize);
		if (empty($uploadFiles)) {
			return false;
		}
		$savePath = $this->_getSavePath();

		if (empty($savePath)) {
			return false;
		}

		$aids = array();
		foreach($uploadFiles as $fileKey => $file) {
			$filename = $this->_getName($file['nameExt']);
			$fileFull = $savePath . $filename;

			//$fileFull = preg_replace("/(php|phtml|php3|php4|jsp|exe|dll|asp|cer|asa|shtml|shtm|aspx|asax|cgi|fcgi|pl)(\.|$)/i", "_\\1\\2", $fileFull);
			//$fileFull = preg_replace('|^' . $this->uploadRoot . '|', '', $fileFull);

			if (!$overwrite && file_exists($fileFull)) {
				continue;
			}
			$uploadFunc = $this->uploadFunc;
			if (@$uploadFunc($file['tmp_name'], $fileFull)) {
				$this->uploadeds++;
				@chmod($fileFull, 0644);
				@unlink($file['tmp_name']);
				//$file['name'] = iconv("utf-8", CHARSET, $file['name']);
				$uploadedfile = array(
					'file_name'=> $file['name'], 
					'file_path'=> str_replace($this->uploadRoot, '', $fileFull), 
					'file_size'=> $file['size'], 
					'file_ext'=> $file['nameExt'], 
					//'fn'=>$file['fn']
				);
				/*$thumb_enable = is_array($thumb_setting) && ($thumb_setting[0] > 0 || $thumb_setting[1] > 0 ) ? 1 : 0;	
				$image = new image($thumb_enable,$this->siteid);				
				if($thumb_enable) {
					$image->thumb($savefile,'',$thumb_setting[0],$thumb_setting[1]);
				}
				if($watermark_enable) {
					$image->watermark($savefile, $savefile);
				}*/
				$aids[] = $this->add($uploadedfile);
			}
		}
		return $aids;
	}

	/**
	 * Get the upload files
	 * 
	 * @return array | boolean
	 */
	protected function _getUploadFiles($field)
	{
		if (!is_array($_FILES[$field]) || empty($_FILES[$field])) {
			$this->error = UPLOAD_ERR_OK;
			return false;
		}

		$uploadFiles = array();
		$fn = isset($_GET['CKEditorFuncNum']) && !empty($_GET['CKEditorFuncNum']) ? $_GET['CKEditorFuncNum'] : '1';
		$description = isset($GLOBALS[$field . '_description']) ? $GLOBALS[$field . '_description'] : array();

		if (!is_array($_FILES[$field]['error'])) {
			$uploadFile = $_FILES[$field];
			$fileValid = $this->_checkFile($uploadFile);
			if ($fileValid) {
				$uploadFiles[] = $uploadFile;
			}
		} else {
			foreach($_FILES[$field]['error'] as $key => $error) {
				$uploadFile = array(
					'tmp_name' => $_FILES[$field]['tmp_name'][$key], 
					'name' => $_FILES[$field]['name'][$key], 
					'type' => $_FILES[$field]['type'][$key], 
					'size' => $_FILES[$field]['size'][$key], 
					'error' => $_FILES[$field]['error'][$key], 
					'description' => $description[$key],
					'fn' => $fn
				);
				$fileValid = $this->_checkFile($uploadFile);
				if ($fileValid) {
					$uploadFiles[] = $uploadFile;
				}
			}
		}

		return $uploadFiles;
	}

	/**
	 * Check the upload file 
	 * 
	 * @return boolean
	 */
	protected function _checkFile(&$file)
	{
		$isUpload = is_uploaded_file($file['tmp_name']) || is_uploaded_file(str_replace('\\\\', '\\', $file['tmp_name']));
		if(empty($isUpload)) {
			$this->error = '12';
			return false;
		}

		if(!isset($file['error']) || $file['error'] != 0) {
			$this->error = $file['error'];
			return false;				
		}

		$fileExt = pathinfo($file['name'], PATHINFO_EXTENSION);
		//if(!in_array($fileExt, $this->allowExts)) {
			//$this->error = '10';
			//return false;
		//}
		$file['nameExt'] = $fileExt;

		//if($file['size'] > $maxsize) {
			//$this->error = '11';
			//return false;
		//}

		return true;
	}

	/**
	 * Get the save path
	 *
	 * @param string $path
	 * @return string | boolean
	 */
	protected function _getSavePath($path = '')
	{
		//$this->uploadRoot = 'd:\web\www\github\cishop\wwwroot\uploadfile\\';
		$path = empty($path) ? $this->appCode : $path;
		$savePath = $this->uploadRoot . $path . date('Y/md/');

		if (!is_dir($this->uploadRoot)) {
			$this->error = '8';
			return false;
		}

		if (!$this->dirCreate($savePath)) {
			$this->error = '8';
			return false;
		}

		if(!is_writeable($savePath)) {
			$this->error = '9';
			return false;
		}

		return $savePath;
	}

	/**
	 * Create a path
	 * 
	 * @param	string	$path
	 * @param	string	$mode
	 * @return	boolean path exist return true
	 */
	public function dirCreate($path, $mode = 0755, $isRecursive = true)
	{
		if (is_dir($path)) {
			return true;
		}
		$pathDepth = count(explode($path, DIRECTORY_SEPARATOR));
		if ($pathDepth++ > 30) {
			return false;
		}
		$parentPath = dirname($path);
		@mkdir($path, $mode, $isRecursive);

		return is_dir($path);
	}

	/**
	 * 附件下载
	 * Enter description here ...
	 * @param $field 预留字段
	 * @param $value 传入下载内容
	 * @param $watermark 是否加入水印
	 * @param $ext 下载扩展名
	 * @param $absurl 绝对路径
	 * @param $basehref 
	 */
	function download($field, $value,$watermark = '0',$ext = 'gif|jpg|jpeg|bmp|png', $absurl = '', $basehref = '')
	{
		global $image_d;
		$this->att_db = pc_base::load_model('attachment_model');
		$upload_url = pc_base::load_config('system','upload_url');
		$this->field = $field;
		$dir = date('Y/md/');
		$uploadpath = $upload_url.$dir;
		$uploaddir = $this->upload_root.$dir;
		$string = new_stripslashes($value);
		if(!preg_match_all("/(href|src)=([\"|']?)([^ \"'>]+\.($ext))\\2/i", $string, $matches)) return $value;
		$remotefileurls = array();
		foreach($matches[3] as $matche)
		{
			if(strpos($matche, '://') === false) continue;
			dir_create($uploaddir);
			$remotefileurls[$matche] = $this->fillurl($matche, $absurl, $basehref);
		}
		unset($matches, $string);
		$remotefileurls = array_unique($remotefileurls);
		$oldpath = $newpath = array();
		foreach($remotefileurls as $k=>$file) {
			if(strpos($file, '://') === false || strpos($file, $upload_url) !== false) continue;
			$filename = fileext($file);
			$file_name = basename($file);
			$filename = $this->getname($filename);

			$newfile = $uploaddir.$filename;
			$upload_func = $this->upload_func;
			if($upload_func($file, $newfile)) {
				$oldpath[] = $k;
				$GLOBALS['downloadfiles'][] = $newpath[] = $uploadpath.$filename;
				@chmod($newfile, 0777);
				$fileext = fileext($filename);
				if($watermark){
					watermark($newfile, $newfile,$this->siteid);
				}
				$filepath = $dir.$filename;
				$downloadedfile = array('filename'=>$filename, 'filepath'=>$filepath, 'filesize'=>filesize($newfile), 'fileext'=>$fileext);
				$aid = $this->add($downloadedfile);
				$this->downloadedfiles[$aid] = $filepath;
			}
		}
		return str_replace($oldpath, $newpath, $value);
	}	
	/**
	 * 附件删除方法
	 * @param $where 删除sql语句
	 */
	function delete($where) {
		$this->att_db = pc_base::load_model('attachment_model');
		$result = $this->att_db->select($where);
		foreach($result as $r) {
			$image = $this->upload_root.$r['filepath'];
			@unlink($image);
			$thumbs = glob(dirname($image).'/*'.basename($image));
			if($thumbs) foreach($thumbs as $thumb) @unlink($thumb);
		}
		return $this->att_db->delete($where);
	}
	
	/**
	 * 附件添加如数据库
	 *
	 * @param $uploadedfile 附件信息
	 */
	protected function add($uploadedFile)
	{
		/*$uploadedfile['module'] = $this->module;
		$uploadedfile['catid'] = $this->catid;
		$uploadedfile['siteid'] = $this->siteid;
		$uploadedfile['userid'] = $this->userid;
		$uploadedfile['uploadtime'] = SYS_TIME;
		$uploadedfile['uploadip'] = ip();
		$uploadedfile['status'] = pc_base::load_config('system','attachment_stat') ? 0 : 1;
		$uploadedfile['authcode'] = md5($uploadedfile['filepath']);
		$uploadedfile['filename'] = strlen($uploadedfile['filename'])>49 ? $this->getname($uploadedfile['fileext']) : $uploadedfile['filename'];
		$uploadedfile['isimage'] = in_array($uploadedfile['fileext'], $this->imageexts) ? 1 : 0;*/

		$aid = $this->attachmentModel->addInfo($uploadedFile);
		$this->uploadedFiles[] = $uploadedFile;
		return $aid;
	}

	/**
	 * 获取缩略图地址..
	 * @param $image 图片路径
	 */
	function get_thumb($image){
		return str_replace('.', '_thumb.', $image);
	}


	/**
	 * 获取附件名称
	 * @param $fileext 附件扩展名
	 */
	protected function _getName($nameExt)
	{
		return date('YmdHis') . rand(100, 999) . '.' . $nameExt;
	}

	/**
	 * 返回附件大小
	 * @param $filesize 图片大小
	 */
	
	function size($filesize) {
		if($filesize >= 1073741824) {
			$filesize = round($filesize / 1073741824 * 100) / 100 . ' GB';
		} elseif($filesize >= 1048576) {
			$filesize = round($filesize / 1048576 * 100) / 100 . ' MB';
		} elseif($filesize >= 1024) {
			$filesize = round($filesize / 1024 * 100) / 100 . ' KB';
		} else {
			$filesize = $filesize . ' Bytes';
		}
		return $filesize;
	}
	
	/**
	* 补全网址
	*
	* @param	string	$surl		源地址
	* @param	string	$absurl		相对地址
	* @param	string	$basehref	网址
	* @return	string	网址
	*/
	function fillurl($surl, $absurl, $basehref = '') {
		if($basehref != '') {
			$preurl = strtolower(substr($surl,0,6));
			if($preurl=='http://' || $preurl=='ftp://' ||$preurl=='mms://' || $preurl=='rtsp://' || $preurl=='thunde' || $preurl=='emule://'|| $preurl=='ed2k://')
			return  $surl;
			else
			return $basehref.'/'.$surl;
		}
		$i = 0;
		$dstr = '';
		$pstr = '';
		$okurl = '';
		$pathStep = 0;
		$surl = trim($surl);
		if($surl=='') return '';
		$urls = @parse_url(SITE_URL);
		$HomeUrl = $urls['host'];
		$BaseUrlPath = $HomeUrl.$urls['path'];
		$BaseUrlPath = preg_replace("/\/([^\/]*)\.(.*)$/",'/',$BaseUrlPath);
		$BaseUrlPath = preg_replace("/\/$/",'',$BaseUrlPath);
		$pos = strpos($surl,'#');
		if($pos>0) $surl = substr($surl,0,$pos);
		if($surl[0]=='/') {
			$okurl = 'http://'.$HomeUrl.'/'.$surl;
		} elseif($surl[0] == '.') {
			if(strlen($surl)<=2) return '';
			elseif($surl[0]=='/') {
				$okurl = 'http://'.$BaseUrlPath.'/'.substr($surl,2,strlen($surl)-2);
			} else {
				$urls = explode('/',$surl);
				foreach($urls as $u) {
					if($u=="..") $pathStep++;
					else if($i<count($urls)-1) $dstr .= $urls[$i].'/';
					else $dstr .= $urls[$i];
					$i++;
				}
				$urls = explode('/', $BaseUrlPath);
				if(count($urls) <= $pathStep)
				return '';
				else {
					$pstr = 'http://';
					for($i=0;$i<count($urls)-$pathStep;$i++) {
						$pstr .= $urls[$i].'/';
					}
					$okurl = $pstr.$dstr;
				}
			}
		} else {
			$preurl = strtolower(substr($surl,0,6));
			if(strlen($surl)<7)
			$okurl = 'http://'.$BaseUrlPath.'/'.$surl;
			elseif($preurl=="http:/"||$preurl=='ftp://' ||$preurl=='mms://' || $preurl=="rtsp://" || $preurl=='thunde' || $preurl=='emule:'|| $preurl=='ed2k:/')
			$okurl = $surl;
			else
			$okurl = 'http://'.$BaseUrlPath.'/'.$surl;
		}
		$preurl = strtolower(substr($okurl,0,6));
		if($preurl=='ftp://' || $preurl=='mms://' || $preurl=='rtsp://' || $preurl=='thunde' || $preurl=='emule:'|| $preurl=='ed2k:/') {
			return $okurl;
		} else {
			$okurl = preg_replace('/^(http:\/\/)/i','',$okurl);
			$okurl = preg_replace('/\/{1,}/i','/',$okurl);
			return 'http://'.$okurl;
		}
	}

	/**
	 * 返回错误信息
	 */
	function error() {
		$UPLOAD_ERROR = array(
		0 => L('att_upload_succ'),
		1 => L('att_upload_limit_ini'),
		2 => L('att_upload_limit_filesize'),
		3 => L('att_upload_limit_part'),
		4 => L('att_upload_nofile'),
		5 => '',
		6 => L('att_upload_notemp'),
		7 => L('att_upload_temp_w_f'),
		8 => L('att_upload_create_dir_f'),
		9 => L('att_upload_dir_permissions'),
		10 => L('att_upload_limit_ext'),
		11 => L('att_upload_limit_setsize'),
		12 => L('att_upload_not_allow'),
		13 => L('att_upload_limit_time'),
		);
		
		return iconv(CHARSET,"utf-8",$UPLOAD_ERROR[$this->error]);
	}
	
	/**
	 * ck编辑器返回
	 * @param $fn 
	 * @param $fileurl 路径
	 * @param $message 显示信息
	 */
	
	function mkhtml($fn,$fileurl,$message) {
		$str='<script type="text/javascript">window.parent.CKEDITOR.tools.callFunction('.$fn.', \''.$fileurl.'\', \''.$message.'\');</script>';
		exit($str);
	}
	/**
	 * flash上传调试方法
	 * @param $id
	 */
	function uploaderror($id = 0)	{
		file_put_contents(PHPCMS_PATH.'xxx.txt', $id);
	}
	
	/**
	 * 获取站点配置信息
	 * @param  $siteid 站点id
	 */
	private function _get_site_setting($siteid) {
		$siteinfo = getcache('sitelist', 'commons');
		return string2array($siteinfo[$siteid]['setting']);
	}
}
?>