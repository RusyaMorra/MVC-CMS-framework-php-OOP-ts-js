<?php
//defined('VG_ACCESS') or die('Access denied'); //access denied


//*************************************************************************
//* starting 
//*************************************************************************

use app\core\Router;

//*************************************************************************
//* starting  Routing
//*************************************************************************
$router = Router::getInstance($ctx);
$router->adminRun();


