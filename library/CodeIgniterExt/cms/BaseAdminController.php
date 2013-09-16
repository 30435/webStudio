<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base_AdminController extends AdminController
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Do some operations after adding an info 
	 *
	 * @return void
	 */
	protected function _afterAdd($info)
	{
        $id = $this->currentModel->currentDb->insert_id();
		$info['id'] = $id;

		$data['url'] = $this->_getUrl($info);

		$where = array('id =' => $id);
		$this->currentModel->editInfo($data, $where);
	}
}