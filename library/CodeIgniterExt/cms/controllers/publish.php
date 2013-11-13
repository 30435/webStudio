<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class CmsPublish extends Custom_AdminController
{
	public function __construct()
	{
		parent::__construct();

		$this->_initCurrentModel('categoryModel');
		$this->template = 'cms/' . $this->controller;

		$this->form_validation->set_rules('name5', 'name5', 'trim|min_length[5]|max_length[12]|xss_clean');
	}

	/**
	 * Create the index html
	 *
	 * @return void
	 */
	public function index()
	{
		$this->load->helper('file');

		$staticContent = $this->load->view('index', $this->frontController, true);
		$file = BASEPATH_WWWROOT . APPCODE . '/index.html';
		file_exists($file) && @unlink($file);
		write_file($file, $staticContent);

		$this->_showMessage('更新首页成功！', '', '');
	}

	/**
	 * Create the index html
	 *
	 * @return void
	 */
	public function webgame()
	{
		return ;
		$this->load->helper('file');
		
		foreach ($this->webgameInfos as $webgameCode => $webgameInfo) {
			$this->currentWebgameInfo = $webgameInfo;
			if ($webgameCode == 'nova') {
				$staticContent = $this->load->view($webgameCode . '/index', $this->frontController, true);
				$file = BASEPATH_WWWROOT . APPCODE . '/' . $webgameCode . '/index.html';
				file_exists($file) && @unlink($file);
				write_file($file, $staticContent);
			}
		}

		$this->_showMessage('更新首页成功！', '', '');
	}

	/**
	 * Create the index html
	 *
	 * @return void
	 */
	public function category()
	{
		$this->load->helper('file');

		$staticContent = $this->load->view('index', $this->frontController, true);
		$file = BASEPATH_WWWROOT . APPCODE . '/index.html';
		file_exists($file) && @unlink($file);
		write_file($file, $staticContent);
	}
	
	/**
	 * Create the index html
	 *
	 * @return void
	 */
	public function content()
	{
		$this->load->helper('file');

		$staticContent = $this->load->view('index', $this->frontController, true);
		$file = BASEPATH_WWWROOT . APPCODE . '/index.html';
		file_exists($file) && @unlink($file);
		write_file($file, $staticContent);
	}
	
	/**
	 * Create the index html
	 *
	 * @return void
	 */
	public function url()
	{
		$this->load->helper('file');

		$staticContent = $this->load->view('index', $this->frontController, true);
		$file = BASEPATH_WWWROOT . APPCODE . '/index.html';
		file_exists($file) && @unlink($file);
		write_file($file, $staticContent);
	}
}