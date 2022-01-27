<?php
//*************************************************************************
//* autoclasses loader function
//*************************************************************************


spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class. '.php');
    //echo $path;
    if(file_exists($path)){
        require $path;
    }
});