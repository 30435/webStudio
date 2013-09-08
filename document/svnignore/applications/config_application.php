<?php

$applicationBasePath = dirname(APPPATH);
return array(
	'passport' => array(
		'code' => 'passport',
		'name' => '用户中心',
		'url' => 'http://passport.ci.com/',
		'path' => $applicationBasePath . '/passport/',
	),
	'pay' => array(
		'code' => 'pay',
		'name' => '支付平台',
		'url' => 'http://pay.ci.com/',
		'path' => $applicationBasePath . '/pay/',
	),
	'webgame' => array(
		'code' => 'webgame',
		'name' => '网页游戏',
		'url' => 'http://webgame.ci.com/',
		'path' => $applicationBasePath . '/webgame/',
	),
	'movie' => array(
		'code' => 'movie',
		'name' => '最爱电影网',
		'url' => 'http://movie.ci.com/',
		'path' => $applicationBasePath . '/movie/',
	),
	'spider' => array(
		'code' => 'spider',
		'name' => '采集系统',
		'url' => 'http://spider.ci.com/',
		'path' => $applicationBasePath . '/spider/',
	),
	'kidsedu' => array(
		'code' => 'kidsedu',
		'name' => '儿童教育',
		'url' => 'http://kidsedu.ci.com/',
		'path' => $applicationBasePath . '/kidsedu/',
	),
	'tbshop' => array(
		'code' => 'tbshop',
		'name' => '淘宝商城',
		'url' => 'http://tbshop.ci.com/',
		'path' => $applicationBasePath . '/tbshop/',
	),
);