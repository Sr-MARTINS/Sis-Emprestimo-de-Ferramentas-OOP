<?php

class Database
{
    static public $tabela;
    static public $colunas;
    
    private $conexao;

    public function __construct()
    {
        $dns = ("mysql:host=localhost;dbname=emprestimo_de_ferramenta");

        $this->conexao = new PDO($dns, 'root', '');

    }


    public function insert($dados)
    {
        $campos = [];    
        foreach(static::$colunas as $campo){
            $campos[$campo] = $dados->$campo;
        } 

        $colunas = implode(', ', array_keys($campos));
        
        $placeholders = rtrim(str_repeat('?, ', count($campos)), ', ');
        
        // Monta o SQL dinamicamente
        $sql = "INSERT INTO " .static::$tabela ." ({$colunas}) VALUES ({$placeholders})";

        $stmt = $this->conexao->prepare($sql);

        // Faz o bind dos valores dinamicamente
        $i = 1;
        // var_dump($campos);
        // exit;
        foreach ($campos as $campo ) {
            $stmt->bindValue($i, $campo);
            $i++;
        }

        $stmt->execute();
    }

    public function select()
    {
        $sql = " SELECT * FROM ferramenta ";
        
        $stmt = $this->conexao->query($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function selectById($id)
    {
        include_once 'Controller/HomeController.php';

        $sql = " SELECT * FROM " .static::$tabela ." WHERE " .static::$colunas = "$id ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
     
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function update($materias)
    {
        $sql = " UPDATE ferramenta SET  ferramenta = ? , descricao = ? , status = ?  WHERE id_ferramenta = ? ";
    
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $materias->ferramenta);
        $stmt->bindValue(2, $materias->descricao);
        $stmt->bindValue(3, $materias->status);
        $stmt->bindValue(4, $materias->id_ferramenta);

       return  $stmt->fetchAll(PDO::FETCH_OBJ);
    }



    public function delete($id)
    {
        $sql = " DELETE FROM ferramenta WHERE id_ferramenta = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }   
}