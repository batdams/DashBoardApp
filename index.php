<?php

require_once 'app/config/config.php';
require_once 'app/core/Router.php';

DEFINE('BASE_URL', '/DashBoardApp');

// routing system
$request = $_SERVER['REQUEST_URI'];
$router = New App\Router\Router($request);
$router->routing();


