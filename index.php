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

//*************************************************************************
//* CTX
//*************************************************************************
$CTX = app\core\Ctx::getInstance();
$CTX->init('Open');
$CTX->createCtx($DefaultContainer);
$CTX->serviceLocator('calculatorService');
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
