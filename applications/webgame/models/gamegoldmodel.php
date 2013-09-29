<?php
class GamegoldModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'account';
		parent::__construct($data);		
	}
}