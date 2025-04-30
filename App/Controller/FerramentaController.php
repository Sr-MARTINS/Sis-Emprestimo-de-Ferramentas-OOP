<?php

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
        // $db = new Database();
        $ferramenta = new Ferramenta();

        $rows = $ferramenta->select(); 

        include 'View/Ferramenta/ListFerramenta.php';
    }

    public static function formFerramenta()
    {           
        $edit = new Ferramenta();
        
        if(isset($_GET['id'])) {
            $linha = $edit->selectById($_GET['id']);
            
            $dadosLinha = $linha['0'];
        }

        include 'View/Ferramenta/FormFerramenta.php';   
    }

    public static function saveFerramenta()
    {   
        $dados = new Ferramenta();   

        $dados->ferramenta = $_POST['ferramenta'];
        $dados->descricao = $_POST['descricao'];
        $dados->status   = $_POST['status'];
        
        // $up = new Database();
        
        if (empty($_POST['id_ferramenta'])) {
 
            $dados->insert($dados);
        } else {

            $dados->update($dados);
        } 

        header("Location: /list_ferramenta");
    }

    public static function delete()
    {
        $dl = new Ferramenta();
        $dl->delete($_GET['id']);

        header("Location: /list_ferramenta");
    }
}