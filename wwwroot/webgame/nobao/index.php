<?php
$routing['directory'] = 'webgame'; // The directory name, relative to the "controllers" folder.  Leave blank
$routing['controller'] = 'nobao'; // The controller class file name.  Example:  Mycontroller
if (isset($_SERVER['REQUEST_URI']) && !empty($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], 'webgame') === false) {
	$_SERVER['REQUEST_URI'] = '/webgame/nobao' . $_SERVER['REQUEST_URI'];
}

chdir(dirname(__DIR__));
include 'index.php';