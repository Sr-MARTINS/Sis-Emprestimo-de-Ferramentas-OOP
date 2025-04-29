<?php
// include_once 'Model/Database.php';

include_once 'Model/Ferramenta.php';

class FerramentaController 
{

    public $id_ferramenta;
    public $ferramenta;
    public $descricao;
    public $status;

    public $rows;

    public static function index()
    {
        $db = new Database();

        $rows = $db->select(); 

        include 'View/Ferramenta/ListFerramenta.php';
    }

    public static function formFerramenta()
    {   
         $edit = new Database();
        
        if(isset($_GET['id'])) {
            $linha = $edit->selectById($_GET['id']);
        
            $dadosLinha = $linha['0'];
        }

        include 'View/Ferramenta/FormFerramenta.php';   
    }

    public static function saveFerramenta()
    {   
        $dados = new Ferramenta();   

        // $dados->id_ferramenta = $_POST['id_ferramenta'];
        $dados->ferramenta = $_POST['ferramenta'];
        $dados->descricao = $_POST['descricao'];
        $dados->status   = $_POST['status'];
        
        // $up = new Database();
        
        if (empty($_POST['id_ferramenta'])) {
 
            $dados->insert($dados);
        } else {

            $dados->update($dados);
        } 

        header("Location: /home");
    }

    public static function delete()
    {
        $db = new Database();
        $db->delete($_GET['id']);

        header("Location: /home");
    }
}