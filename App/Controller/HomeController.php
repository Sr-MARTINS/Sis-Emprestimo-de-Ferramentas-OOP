<?php

class HomeController
{
    public $ferramenta;
    public $descricao;
    public $status;

    public $rows;

    public static function index()
    {
        include 'Model/Database.php';

        $db = new Database();

        $rows = $db->select();
        // var_dump($rows); 

        include 'View/Ferramenta/ListFerramenta.php';
    }

    public static function form()
    {   
        include 'View/Ferramenta/FormFerramenta.php';   
    }

    public static function save()
    {
        $materias = new HomeController();

        $materias->ferramenta = $_POST['ferramenta'];
        $materias->descricao = $_POST['descricao'];
        $materias->status   = $_POST['status'];


        include 'Model/Database.php';
        
        $db = new Database();
        $db->insert($materias);

        header("Location: /home");
    }

    public static function delete()
    {
        // var_dump($_GET['id']);
        include 'Model/Database.php';

        $db = new Database();
        $db->delete($_GET['id']);
        
        header("Location: /home");
    }
}