<?php
/**
 * Created by PhpStorm.
 * User: ALEXIS
 * Date: 21/02/15
 * Time: 19:04
 */
// Doctrine (db)

$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'charset'  => 'utf8',
    'host'     => 'localhost',
    'port'     => '3306',
    'dbname'   => 'microcms',
    'user'     => 'root',
    'password' => '',
);