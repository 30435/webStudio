<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CodeIgniterExt 
{
	public function __construct()
	{
		spl_autoload_register(array(__CLASS__, 'autoload'));
	}

	public function autoload($class)
	{
		if (class_exists($class)) {
			return true;
		}
		
		$file = BASEPATH_EXT . $class . '.php';
		if (file_exists($file)) {
			include_once($file);
		}
		
		if (class_exists($class)) {
			return true;
		}
		return false;
	}
}