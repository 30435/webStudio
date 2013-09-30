<?php
mysql_connect('localhost', 'root', '');

$databases = array('bbs', 'bookbar', 'kidsedu', 'movie', 'passport', 'pay', 'spider', 'ucserver', 'webgame');

$tableNum = 0;
foreach ($databases as $database) {
	$tableNumSub = 0;
	$database = 'studio_' . $database;
	mysql_select_db($database);
	$tableInfos = mysql_query('SHOW TABLES');
	while ($arr = mysql_fetch_array($tableInfos)) {
		$deleteTable = mysql_query('DROP TABLE ' . $arr[0]);
		if ($deleteTable) {
			$tableNum++;
			$tableNumSub++;
		}
	}
	echo 'DATABASE ' . $database . ' delete ' . $tableNumSub . ' talbes<br />';
}

echo 'delete ' . $tableNum . ' tables';
