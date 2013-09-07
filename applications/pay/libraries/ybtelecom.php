<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/yeepay.php';

class ybtelecom extends yeepay
{
    public function __construct($params)
    {
    	parent::__construct($params);
    }
}
?>