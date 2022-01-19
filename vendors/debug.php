<?php
//defined('VG_ACCESS') or die('Access denied'); //access denied

//*************************************************************************
//* debug functional
//*************************************************************************

ini_set('display_errors', 1);
error_reporting(E_ALL);

function debug($str){
    echo '<pre>';
    var_dump($str);
    echo '</pre>';
   
}