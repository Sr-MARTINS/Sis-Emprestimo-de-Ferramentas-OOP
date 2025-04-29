<?php

// include 'Model/Database.php';
include 'Model/Usuarios.php';

class UsuarioController
{
    public $id_usuario;
    public $usuario;
    public $email;
    public $password;

    // public function index()
    // {

    // }

    public static function formUsuario()
    {
        // echo "oi";
        include 'View/Usuario/FormUser.php';
    }

    public static function saveUsuario()
    {
        $dados = new Usuarios();

        $dados->usuario = $_POST['nome'];
        $dados->email = $_POST['email'];
        $dados->senha = $_POST['senha'];

        $dados->insert($dados);
 
        header("Location: /home");
    }
}