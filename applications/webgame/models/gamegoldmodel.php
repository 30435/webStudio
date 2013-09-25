<?php
class GamegoldModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'gamegold';
		parent::__construct($data);		
	}
}