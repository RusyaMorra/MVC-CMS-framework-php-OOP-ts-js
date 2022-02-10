<?php
//*************************************************************************
//* Class  model
//*************************************************************************
namespace app\core;
use app\modules\DataBase;

abstract class Model{

    public $db;
	
	public function __construct() {
		$this->db = new DataBase;
        
	}
}