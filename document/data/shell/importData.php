<?php
mysql_connect('localhost', 'root', '');
mysql_query("SET max_allowed_packet=5*1024");

$databases = array('bbs', 'bookbar', 'game', 'kidsedu', 'movie', 'passport', 'pay', 'spider', 'ucserver', 'webgame');

foreach ($databases as $database) {
	$database = 'studio_' . $database;
	$sqlFile = './' . $database . '.sql';
	$sql = file_get_contents($sqlFile);

	mysql_select_db($database);
	$re = mysql_query($sql); var_dump($re);

}
