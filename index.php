<?php

use App\Core\Router;

define('MVC', true);

require 'autoload.php';
include "app/config.php";

$router = new Router();
$router->run();
