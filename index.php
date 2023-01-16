<?php
//defined('VG_ACCESS',true); // denied access to other files ecxept index.php

require "app/core/Framework.class.php";
$initialization = Framework::getInstance();
$initialization ->run();
//session_start();// session on
//*************************************************************************
//* Enrty point index.php
//*************************************************************************

//*************************************************************************
//* base settings
//*************************************************************************


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
