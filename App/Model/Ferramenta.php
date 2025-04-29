<?php

include 'Model/Database.php';

class Ferramenta extends Database 
{
    static public $tabela = "ferramenta";
    static public $colunas = [
        "ferramenta",
        "descricao",
        "status"
    ];
    static public $primaria = "id_ferramenta";
    public $ferramenta;
    public $descricao;
    public $status;
}