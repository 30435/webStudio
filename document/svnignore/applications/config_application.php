<?php

$applicationBasePath = dirname(APPPATH);
return array(
	'passport' => array(
		'code' => 'passport',
		'name' => '用户中心',
		'url' => 'http://passport.ci.com',
		'path' => $applicationBasePath . '/passport/',
	),
	'spider' => array(
		'code' => 'spider',
		'name' => '采集系统',
		'url' => 'http://spider.ci.com',
		'path' => $applicationBasePath . '/spider/',
	),
	'51jiansh' => array(
		'code' => '51jiansh',
		'name' => '我要健身',
		'url' => 'http://51jiansh.ci.com',
		'path' => $applicationBasePath . '/51jiansh/',
	),
);