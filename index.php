<?php
//defined('VG_ACCESS',true); // denied access to other files ecxept index.php

require "app/core/FrameworkClass.php";
$initialization = FrameworkClass::getInstance();
$initialization->run();
//session_start();// session on
//*************************************************************************
//* Enrty point index.php
//*************************************************************************

//*************************************************************************
//* base settings
//*************************************************************************

//*************************************************************************
//* Di container
//*************************************************************************
require 'DiConfiguration/DiContainerBuild.php';
//require 'cron/send_massages_to_mails.php';

//*************************************************************************
//* CTX
//*************************************************************************
$ctx = app\core\Ctx::getInstance();
$ctx->init('Open');
$ctx->createCtx($DefaultContainer);

//*************************************************************************
//* logs
//*************************************************************************

$directoriesConfig = require 'config/filesystems.php';
$storageDIR = $directoriesConfig['links']['storage'];
\app\MainTechServices\LoggerService\LoggerService::setRootLogDir($storageDIR);


//*************************************************************************
//* libs
//*************************************************************************
require_once 'libs/debug.php';


//*************************************************************************
//* file connections 
//*************************************************************************
require 'bootstrap/Bootstrap.php';

//*************************************************************************
//* any things and libs
//*************************************************************************
// debug($debugvariable);// we need it if on hosting warnings, notifications and more OFF and for printing arrays
