<?php
require '../vendor/autoload.php';


use Cron\CronExpression;

$cron = CronExpression::factory('40 00 * * *');
if ($cron->isDue()) {
   echo 123;
}