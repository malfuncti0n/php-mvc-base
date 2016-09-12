<?php

use Illuminate\Database\Capsule\Manager as Capsule;
global $config;
$capsule = new Capsule();
$capsule->addConnection([
    'driver'=>$config->get('db.driver'),
    'host' =>$config->get('db.host'),
    'username'=> $config->get('db.username'),
    'password'=> $config->get('db.password'),
    'database'=> $config->get('db.database'),
    'charset' => $config->get('db.charset'),
    'collation' => $config->get('db.collation'),
    'prefix' => $config->get('db.prefix')
]);

$capsule->bootEloquent();
