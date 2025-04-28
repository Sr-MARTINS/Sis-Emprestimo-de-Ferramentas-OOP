<?php

class HomeController
{
    public $id_ferramenta;
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
        include 'Model/Database.php';

        $edit = new Database();
        // $edit->selectById($_GET['id']);
        
        if(isset($_GET['id'])) {
            $linha = $edit->selectById($_GET['id']);
        
            $dadosLinha = $linha['0'];
        }

        include 'View/Ferramenta/FormFerramenta.php';   

    }

    public static function save()
    {
        
        $materias = new HomeController();   

        $materias->id_ferramenta = $_POST['id_ferramenta'];
        $materias->ferramenta = $_POST['ferramenta'];
        $materias->descricao = $_POST['descricao'];
        $materias->status   = $_POST['status'];

        
        include 'Model/Database.php';
        
        $up = new Database();
        
        if (empty($_POST['id_ferramenta'])) {
 
            $up->insert($materias);
        } else {
            
            $up->update($materias);
        } 

        // $up->update($materias);

        // var_dump($up);

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