<?php
class PrivilegeModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'admin_privilege';
		parent::__construct($data);
	}
}