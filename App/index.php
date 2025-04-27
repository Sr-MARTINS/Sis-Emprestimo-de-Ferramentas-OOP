<?php

include 'Controller/HomeController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// echo $url;

switch ($url) 
{
    case ('/'):
        echo 'Login';
        break;

    case '/home':
        HomeController::index();
        break;
    
    case '/home/cadastro':
        HomeController::form();
        break;

    case '/home/cadastro/save';
        HomeController::save();
        break;

    case '/home/cadastro/delete':
        HomeController::delete();
        break;

    default :
        echo 'ERRO 404';
        break;
}