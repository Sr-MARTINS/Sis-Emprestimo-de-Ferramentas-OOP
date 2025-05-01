<?php

include 'Controller/FerramentaController.php';
include 'Controller/UsuarioController.php';
include 'Controller/Administracao.php';


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// echo $url;

switch ($url) 
{
    case ('/'):
        include 'View/Login.php';
        break;


        //Adm
    case '/login':
        Administracao::index();
        break;

    case '/usuario':
        break;
    
        
        //Ferramenta
    case '/list_ferramenta':
        FerramentaController::index();
        break;

    case '/cadastro_ferramente':
        FerramentaController::formFerramenta();
        break;

    case '/cadastro/save_ferramenta';
        FerramentaController::saveFerramenta();
        break;

    case '/cadastro_ferramenta/delete':
        FerramentaController::delete();
        break;


        //Usuario
    case '/list_usuario':
        UsuarioController::index();
        break;

    case '/cadastro_usuario':
        // echo "oi";
        UsuarioController::formUsuario();
        break;

    case '/cadastro/save_usuario';
        UsuarioController::saveUsuario();
        break;

    case '/cadastro_usuario/delete':
        UsuarioController::delete();
        break;    
    default :
        echo 'ERRO 404';
        break;
}