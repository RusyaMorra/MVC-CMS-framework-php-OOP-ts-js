<?php
//*************************************************************************
//* autoclasses loader function
//*************************************************************************


spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});