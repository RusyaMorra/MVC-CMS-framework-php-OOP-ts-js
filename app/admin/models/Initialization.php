<?php
//*************************************************************************
//* main model
//*************************************************************************
namespace app\admin\models;

use app\core\Model;

class Initialization extends Model{

    public function getNews() {
        $result = $this->db->row('SELECT title, body FROM news');
	    debug($result);
    }

}