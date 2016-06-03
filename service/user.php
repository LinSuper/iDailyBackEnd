<?php
require_once "../config/config.php";
require_once __ROOT__."/controller/userController.php";
$url = explode("/", $_SERVER['PHP_SELF']);
$method = $url[count($url)-1];

switch ($method) {
    case 'register':
        echo userController::register();
        break;    
    case 'login':
        echo userController::login();
        break;    
    case 'logout':
        echo userController::logout();
        break;    
    case 'like':
        echo userController::logout();
        break;    
}