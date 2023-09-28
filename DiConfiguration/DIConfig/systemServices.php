<?php


require 'vendor/autoload.php';
use \Monolog\Level;
use \Monolog\Logger;
use \Monolog\Handler\StreamHandler;

 
return [
    'LoggerMonolog' => function (){
        // create a log channel
        
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('php://stdout', Logger::WARNING)); // <<< uses a stream

        return $log;
    }
];

//usage
// add records to the log
// $log->warning('Foo');
// $log->error('Bar');