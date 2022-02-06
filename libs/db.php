<?php
//defined('VG_ACCESS') or die('Access denied'); //access denied

//*************************************************************************
//* db classes with methods
//*************************************************************************

namespace libs;

use PDO;

class Db {

	protected $db;
	
	public function __construct() {
		
		$this->connect();
		

	}

	private function connect() {
		try {
			$config = require 'config/database.php';
			$this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['DBname'].'', $config['user'], $config['password']);	
		
		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die('bd connection error');
		}
	}

    public function query($sql, $params = []) {
		$stmt = $this->db->prepare($sql);
		if (!empty($params)) {
			foreach ($params as $key => $val) {
				$stmt->bindValue(':'.$key, $val);
			}
		}
		$stmt->execute();
		return $stmt;
	}


	public function row($sql, $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	} 
    
	public  function column($sql, $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetchColumn();
	}
	
}