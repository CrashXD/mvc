<?php

use App\Core\Router;

define('MVC', true);

require 'autoload.php';

$router = new Router();
$router->run();
