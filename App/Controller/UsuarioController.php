<?php

// include 'Model/Database.php';
include 'Model/Usuarios.php';

class UsuarioController
{
    public $id_usuario;
    public $usuario;
    public $email;
    public $password;


    public static function index()
    {
        $user = new Usuarios();

        $user = $user->select();

        include 'View/Usuario/ListUsuario.php';
    }

    public static function formUsuario()
    {
        $edit = new Usuarios();

        if(isset($_GET['id'])) {
            $linha = $edit->selectById($_GET['id']);

            
            $dadosLinha = $linha['0'];
            // var_dump($dadosLinha);
            // exit;
        }
        include 'View/Usuario/FormUser.php';
    }

    public static function saveUsuario()
    {
        $dados = new Usuarios();
        
        $dados->usuario = $_POST['nome'];
        $dados->email = $_POST['email'];
        $dados->senha = hash('sha256', $_POST['senha']);
        $dados->id_usuario = $_POST['id_usuario'];
        
        if (empty($dados->id_usuario)) {

            $dados->insert($dados);
        } else {
            
            $dados->update($dados);
        }

        header("Location: /list_usuario");
    }

    public static function delete()
    {
        $dl = new Usuarios();
        // var_dump($dl);
        $dl->delete($_GET['id']);

        header("Location: /list_usuario");
    }
}