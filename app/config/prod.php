<?php

// Doctrine (db)
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'charset'  => 'utf8',
    'host'     => 'localhost',
    'port'     => '3306',
    'dbname'   => 'blogjf',
    'user'     => 'root',
    'password' => 'root',
);

// define log level
$app['monolog.level'] = 'WARNING';
