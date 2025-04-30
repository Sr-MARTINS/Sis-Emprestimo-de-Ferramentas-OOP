<?php

include 'Controller/FerramentaController.php';
include 'Controller/UsuarioController.php';
include 'Controller/Admistracao.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// echo $url;

switch ($url) 
{
    case ('/'):
        echo 'Login';
        break;


        //Adm
    case ('/login'):
        Admistracao::index();
        break;
    
        
        //Ferramenta
    case '/list_ferramenta':
        FerramentaController::index();
        break;

    case '/home/cadastro_ferramente':
        FerramentaController::formFerramenta();
        break;

    case '/home/cadastro/save_ferramenta';
        FerramentaController::saveFerramenta();
        break;

    case '/home/cadastro_ferramenta/delete':
        FerramentaController::delete();
        break;


        //Usuario
    case '/home/list_usuario':
        UsuarioController::index();
        break;

    case '/home/cadastro_usuario':
        // echo "oi";
        UsuarioController::formUsuario();
        break;

    case '/home/cadastro/save_usuario';
        UsuarioController::saveUsuario();
        break;

    case '/home/cadastro_usuario/delete':
        UsuarioController::delete();
        break;    
    default :
        echo 'ERRO 404';
        break;
}