<?php
require_once "../config/config.php";
require_once __ROOT__."/controller/postController.php";
$url = explode("/", $_SERVER['PHP_SELF']);
$method = $url[count($url)-1];

switch ($method) {
    case 'newPost':
        echo postController::newPost();
        break;    
    case 'getAll':
        echo postController::getAll();
        break;    
    case 'getPostByUserId':
        echo postController::getPostByUserId();
        break;    
    case 'updataAvator':
        echo postController::updataAvator();
        break;    
}