<?php

class HomeController
{
    public $ferramenta;
    public $descricao;
    public $status;

    public static function index()
    {
        include 'View/Ferramenta/ListFerramenta.php';
    }

    public static function form()
    {
        // var_dump($_POST, "<br>");
        
        $materias = new HomeController();

        $materias->ferramenta = $_POST['ferramenta'];
        $materias->descricao = $_POST['descricao'];
        $materias->status   = $_POST['status'];


        include 'Model/Database.php';
        
        $db = new Database();
        $db->insert($materias);

        header("Location: ListFerramenta.php");
    }
}