<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

abstract class CmsPosition extends Custom_AdminController
{
	public function __construct() {
		parent::__construct ();
		//$this->_game_arr = $this->_get_index_array ($this->webgameInfos, 'name' );
		$this->template = 'cms/' . $this->controller;
		

		$this->form_validation->set_rules ( 'name' );
		$this->fields = array ('name' );
		$this->table = 'position';
		$this->template = 'admin/position';
	}
	
	public function listinfo() {
		$this->_listinfo ();
	}
	
	public function add() {
		$this->_add ();
	}
	
	public function edit() {
		$this->_edit ();
	}
	
	public function view() {
		$this->_view ();
	}
	public function delete() {
		$this->_delete ();
	}
}
?>