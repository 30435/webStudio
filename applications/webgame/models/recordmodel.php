<?php
class RecordModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'record';
		parent::__construct($data);		
	}
}