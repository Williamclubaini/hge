<?php

require 'system/autoloader.php';
require 'config/config.php';
require 'config/constants.php';
require 'system/error.php';
require 'helpers/helpers.php';

use System\Controller;

define('ROOTDIR', basename(__DIR__), FALSE);

// filename should be equivalent to class & method name in the controller (**MUST**)
$page = $_GET['page'] ?? 'home';

$Controller = new Controller();

$Controller->AppRun($page);
?>