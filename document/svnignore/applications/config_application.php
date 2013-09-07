<?php

$applicationBasePath = dirname(APPPATH);
return array(
	'passport' => array(
		'code' => 'passport',
		'name' => '用户中心',
		'url' => 'http://passport.kids.com',
		'path' => $applicationBasePath . '/passport/',
	),
	'pay' => array(
		'code' => 'pay',
		'name' => '支付平台',
		'url' => 'http://pay.kids.com',
		'path' => $applicationBasePath . '/pay/',
	),
	'webgame' => array(
		'code' => 'webgame',
		'name' => '网页游戏',
		'url' => 'http://webgame.kids.com',
		'path' => $applicationBasePath . '/webgame/',
	),
);