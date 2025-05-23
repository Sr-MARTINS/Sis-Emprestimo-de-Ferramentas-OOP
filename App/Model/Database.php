<?php

class Database
{
    static public $tabela;
    static public $primaria;
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
        $sql = " SELECT * FROM " .static::$tabela ;
        
        $stmt = $this->conexao->query($sql);
     
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function selectById($id)
    {
        // var_dump(static::$tabela);
        // exit;
        $sql = " SELECT * FROM " .static::$tabela ." WHERE " .static::$primaria  ."=$id ";
     
        $stmt = $this->conexao->query($sql);
     
        
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function update($dados)
    {
        $campos = [];    
        foreach(static::$colunas as $campo){
            $campos[$campo] = $dados->$campo;
        } 
         
        $setClause = implode(', ', array_map(fn($col) => "$col = ?", array_keys($campos)));

        $sql = "UPDATE " . static::$tabela . " SET $setClause WHERE " . static::$primaria . " = ?";

        $stmt = $this->conexao->prepare($sql);

        $valores = array_values($campos);
        $valores[] = $dados->{static::$primaria};

        $stmt->execute($valores);

        return $stmt->rowCount();

    }



    public function delete($id)
    {
        $sql = " DELETE FROM " .static::$tabela ." WHERE " .static::$primaria ."=$id";
        
        // var_dump($sql);
        $stmt = $this->conexao->query($sql);
        // var_dump($stmt);
        // exit;
        
        // $stmt->bindValue(1, $id);
        // $stmt->execute();

        return $stmt;
    }   
}