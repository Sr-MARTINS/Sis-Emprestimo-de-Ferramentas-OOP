<?php

include 'Controller/FerramentaController.php';
include 'Controller/UsuarioController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// echo $url;

switch ($url) 
{
    case ('/'):
        echo 'Login';
        break;

    case '/home':
        FerramentaController::index();
        break;

        
        //Ferramenta
    case '/home/cadastro_ferramente':
        FerramentaController::formFerramenta();
        break;

    case '/home/cadastro/save_ferramenta';
        FerramentaController::saveFerramenta();
        break;

    case '/home/cadastro/delete':
        FerramentaController::delete();
        break;

        //Usuario
    case '/home/cadastro_usuario':
        // echo "oi";
        UsuarioController::formUsuario();
        break;

    case '/home/cadastro_usuario':
        // FerramentaController::form();
        break;

    case '/home/cadastro/save_usuario';
        UsuarioController::saveUsuario();
        break;

    case '/home/cadastro/delete':
        FerramentaController::delete();
        break;    
    default :
        echo 'ERRO 404';
        break;
}