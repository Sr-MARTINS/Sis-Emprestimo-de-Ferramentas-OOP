<?php

class Database
{
    private $conexao;

    public function __construct()
    {
        $dns = ("mysql:host=localhost;dbname=emprestimo_de_ferramenta");

        $this->conexao = new PDO($dns, 'root', '');

    }

    public function insert(HomeController $materias)
    {
        // var_dump($materias);
        // exit;
        $sql = " INSERT INTO ferramenta ( ferramenta, descricao, status ) VALUES (?, ?, ?) ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $materias->ferramenta);
        $stmt->bindValue(2, $materias->descricao);
        $stmt->bindValue(3, $materias->status);

        $stmt->execute();
    }

    public function select()
    {
        $sql = " SELECT * FROM ferramenta ";
        
        $stmt = $this->conexao->query($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function delete($id)
    {
        $sql = " DELETE FROM ferramenta WHERE id_ferramenta = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        
        $stmt->execute();
    }   
}