<?php

require_once 'app/config/config.php';
require_once 'app/core/SessionManager.php';
require_once 'app/views/ViewManager.php';
require_once 'app/core/Router.php';

DEFINE('BASE_URL', '/DashBoardApp');

//verification de la session
//session_start();
//$_SESSION['user'] = 'Damien';

$session = new App\Core\SessionManager;
$sessionStatus = $session::sessionCheck();
//$session::sessionDestroy();
//var_dump($sessionStatus);
//var_dump($_SESSION['user']);

// instanciation du ViewManager
$viewManager = new App\View\ViewManager;

// routing system
$request = $_SERVER['REQUEST_URI'];
$router = New App\Router\Router($request);
$router->routing($sessionStatus);