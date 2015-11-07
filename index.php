<?php

require __DIR__ . '/config/config.php';

require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/models/db.class.php';
require __DIR__ . '/models/monolog.class.php';

echo 'UPMANAGER Test';

$db = new db();
var_dump($db);
//var_dump($db->dbConnect());
var_dump($db->select('SELECT * FROM reputation_center_preferences;'));

new monolog('ERROR', 'Error msg');

new monolog('WARNING', 'warning!');
