<?php

include_once 'Model/Database.php';

class Usuarios extends Database
{
    static public $tabela = "usuario";
    static public $colunas = [
        "usuario",
        "email",
        "senha"
    ];
    static public $primaria = "id_usuario";
    public $id_usuario;
    public $usuario;
    public $email;
    public $senha;
}