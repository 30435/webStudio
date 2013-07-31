<?php
//define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME)); // The name of THIS file
//define('FCPATH', str_replace(SELF, '', __FILE__)); // Path to the front controller (this file)

define('APPCODE', 'passport');
chdir(dirname(__DIR__));
include 'init.php';