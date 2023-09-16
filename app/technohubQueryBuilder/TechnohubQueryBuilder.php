<?php
//defined('VG_ACCESS') or die('Access denied'); //access denied

//*************************************************************************
//* db classes with methods
//*************************************************************************
//*************************************************************************
//* namespaces
//*************************************************************************
namespace app\technohubQueryBuilder;


//*************************************************************************
//* class loading
//*************************************************************************
use PDO;



class TechnohubQueryBuilder {

    /**
     * @var
     */
	static private $_instance = null;

	
	protected $db;
	
	 /**
     *  Construct, create opject of PDO class
     */
	
	public function __construct() {
		$this->connect();
		$this->defaultSetting();
     
	}

	/**
     *  singleton
     */

	static public function getInstance(){
		if(self::$_instance == null){
		   return self::$_instance = new self;
		   
		}

		return self::$_instance;
   }

	/**
     *  default settings for PDO
     */

	private function defaultSetting () {
		// set default setting database
		$this->db->exec("SET NAMES 'utf8'");
		$this->db->exec("SET CHARACTER SET utf8");
		$this->db->exec("SET CHARACTER_SET_CONNECTION=utf8");
		$this->db->exec("SET SQL_MODE = ''");

	}

 	/**
     * Db connection
     */

	private function connect() {
		try {
			$config = require 'config/database.php';
			$this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['DBname'].'', $config['user'], $config['password']);	
		
		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die('bd connection error');
		}
	}

 	/**
     * exec query statement
     */

    public function query(string $sql, array $params = []) {
		$stmt = $this->db->prepare($sql);
		if (!empty($params)) {
			foreach ($params as $key => $val) {
				$stmt->bindValue(':'.$key, $val);
			}
		}
		$stmt->execute();
		return $stmt;
	}

	/**
     * row statement
     */
	
	public function row(string $sql, array $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	} 
    
    /**
     * columnstatement
     */
	
	public  function column(string $sql, array $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetchColumn();
	}
	
}