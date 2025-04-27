<?php

include 'Controller/HomeController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// echo $url;

switch ($url) 
{
    case '/':
        HomeController::index();
        break;
    
    case '/home':
        HomeController::index();
        break;

    case '/home/Cadastro/formFerramenta/save';
        HomeController::form();
        break;

    case '/home/Cadastro/delete':
        echo 'delete';
        break;

    default :
        echo 'ERRO 404';
        break;
}