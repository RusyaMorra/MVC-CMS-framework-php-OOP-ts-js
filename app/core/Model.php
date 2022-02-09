<?php
//*************************************************************************
//* Class  model
//*************************************************************************
namespace app\core;
use libs\Db;

abstract class Model{

    public $db;
	
	public function __construct() {
		$this->db = new Db;
        
	}
}