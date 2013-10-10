<?php
require_once './config.php';
if (!defined('APPCODE') || !defined('BASEPATH') || !defined('BASEPATH_EXT') || !defined('BASEPATH_APP')) {
	exit('APPCODE or BASEPATH or BASEPATH_EXT or BASEPATH_APP not defined!');
}

define('APPPATH', BASEPATH_APP . APPCODE . '/'); // Path to the application folder
//var_dump(is_dir(BASEPATH)); var_dump(is_dir(BASEPATH_EXT)); var_dump(is_dir(BASEPATH_APP)); var_dump(is_dir(APPPATH));
if (!is_dir(BASEPATH) || !is_dir(BASEPATH_EXT) || !is_dir(BASEPATH_APP) || !is_dir(APPPATH)) {
	exit('BASEPATH, BASEPATH_EXT, BASEPATH_APP and APPPATH must be a dir!');
}

require_once BASEPATH_EXT . 'CodeIgniterExt.php';
$codeIgniterExtObj = new CodeIgniterExt();

// if your controller is not in a sub-folder within the "controllers" folder
// $routing['directory'] = ''; // The directory name, relative to the "controllers" folder.  Leave blank
// $routing['controller'] = ''; // The controller class file name.  Example:  Mycontroller
// $routing['function']	= ''; // The controller function you wish to be called.
// $assign_to_config['name_of_config_item'] = 'value of config item';

define('EXT', '.php'); // The PHP file extension this global constant is deprecated.
//define('SYSDIR', trim(strrchr(trim(BASEPATH, '/'), '/'), '/')); // Name of the "system folder"

@date_default_timezone_set('Etc/GMT-8');

if (DEFINED('XHPROF_OPEN') && XHPROF_OPEN == 'yes') {
	$xhprofOn = false;
	if (mt_rand(1, XHPROF_RAND) == 1) {
		$xhprofOn = true;
		xhprof_enable(XHPROF_FLAGS_MEMORY);
    }
}

require_once BASEPATH.'core/CodeIgniter.php';

if (DEFINED('XHPROF_OPEN') && XHPROF_OPEN == 'yes' && !empty($xhprofOn)) {
	$xhprof_data = xhprof_disable();

	include_once BASEPATH_EXT . 'xhprof_lib/utils/xhprof_lib.php';
	include_once BASEPATH_EXT . 'xhprof_lib/utils/xhprof_runs.php';

	// save raw data for this profiler run using default
	// implementation of iXHProfRuns.
	$xhprof_runs = new XHProfRuns_Default();

	// save the run under a namespace "xhprof_foo"
	$run_id = $xhprof_runs->save_run($xhprof_data, "xhprof_" . APPCODE);
}