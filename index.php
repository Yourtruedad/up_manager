<?php

require __DIR__ . '/config/config.php';

require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/models/db.class.php';
require __DIR__ . '/models/curl.class.php';
require __DIR__ . '/models/monolog.class.php';
require __DIR__ . '/models/test.class.php';

echo 'UPMANAGER Test';

$db = new db();
//var_dump($db->select('SELECT * FROM forums;'));

$test = new test();
var_dump($test->logIn());
