<?php 
$webgameCodes = array('nova', 'nobao', 'nobei', 'noha', 'noya');
$webgameCode = $_GET['code'];

if (!in_array($webgameCode, $webgameCodes)) {
	exit('code error');
}

$interfaceTypes = array('general', 'md5', 'encrypt');
$interfaceType = isset($_GET['type']) ? $_GET['type'] : '';
$interfaceType = in_array($interfaceType, $interfaceTypes) ? $type : 'general';

$configInfos = require './config.php'; 
$configWebgame = require './webgame_' . $webgameCode . '.php';
$configInfos = array_merge($configInfos, $configWebgame);