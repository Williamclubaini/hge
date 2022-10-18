<?php

/*
################################################
--------------Works With MySQL with PDO_MYSQL, MS SQL Server and Sybase with PDO_DBLIB

$config['database_type'] = 'mysql';
$config['host']          = '127.0.0.1';
$config['database']      = 'database_name';
$config['charset']       = 'utf8mb4';
$config['username']      = 'root';
$config['password']      = '';
$config['port']          = 3306

*/

$config['driver']        = 'mysql';
$config['host']          = 'localhost';
$config['database']      = 'hge';
$config['charset']       = 'utf8mb4';
$config['username']      = 'root';
$config['password']      = '';
$config['port']          = 3306;

/*
 SET:
 $config['environment']   = 'development'; when still in development
 ------------ OR ------------------------
 $config['environment']   = 'production'; when the system is in production
 */
$config['environment']   = 'development';

//array => $configurations
define('CONFIG', $config, FALSE);