<?php 
$file = $_GET['file'];
$file = $file . '.css';
$content = file_get_contents($file);

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
echo $allnum;
foreach ($data as $file) {

	$fileDeal = str_replace('"', '', $file); $fileDeal = str_replace("'", '', $fileDeal);
	$fileFull = 'E:/www/kidsDepart/wwwroot/static/passport/' . str_replace('../', '', $fileDeal);
	if (file_exists($fileFull)) {
		continue;
		$allnum = $allnum--;
	}
	echo $fileFull . "---no\n";
}

echo $allnum;