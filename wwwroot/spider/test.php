<?php 
$file = $_GET['file'];
$isDown = $_GET['isdown'];
$downInfos = require './downinfo/' . $file . '.php';
foreach ($downInfos['files'] as $cssFile) {
	$content .= file_get_contents($file);
}

$pattern = '@src=.*"(?P<url>.*)".*@Us';
$pattern2 = "@src=.*'(?P<url>.*)'.*@Us";
$pattern3 = '@<link.*type="text/css".*href="(?P<css>.*)".*>@Us';
$pattern4 = "@url\(.*'(?P<images>.*)'.*\)@Us";
$pattern5 = '@url\(.*"(?P<images>.*)".*\)@Us';
$pattern6 = '@url\((?P<images>.*)\)@Us';
$pattern7 = "@<link.*href='(?P<css>.*\.css)'.*>@Us";
preg_match_all($pattern, $content, $url);
preg_match_all($pattern2, $content, $url2);
preg_match_all($pattern3, $content, $url3);
preg_match_all($pattern4, $content, $url4);
preg_match_all($pattern5, $content, $url5);
preg_match_all($pattern6, $content, $url6);
preg_match_all($pattern7, $content, $url7);

$data = array_merge($url['url'], $url2['url'], $url3['css'], $url4['images'], $url5['images'], $url6['images'], $url7['css']);
$data = array_unique($data);
var_dump($data);
$allnum = count($data);


foreach ($data as $file) {
	$file = str_replace('"', '', $file); $fileDeal = str_replace("'", '', $file);
	$url = strpos($file, 'http') ? $file : $urlPre . basename($file);
	$localFile = $localFilePre . basename($file);

	if (isset($isDown)) {
		downFile($url, $localFile);
		echo 'down file from:' . $url . '===to===' . $localFile . "\n";
	} else {
		$string = (file_exists($localFile)) ? ' already down' : ' no down';
		echo 'file ' . $url . $string;
	}
}

function _downFile($url, $localFile,  $isForce = false)
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