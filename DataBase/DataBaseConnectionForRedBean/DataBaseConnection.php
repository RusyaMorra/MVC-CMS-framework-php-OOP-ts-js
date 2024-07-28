<?php

require __DIR__ . '/vendor/autoload.php';
use \RedBeanPHP\R as R;


R::setup('sqlite:sqlite3.db');
R::setup('mysql:host=localhost;dbname=mydatabase', 'username', 'password');