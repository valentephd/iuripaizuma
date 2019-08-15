<?php

class Veiculo {

    private $pdo;

    protected $idVeiculo;
    protected $placa;
    protected $numChassi;
    protected $cor;
    protected $ano;
    protected $marca;
    protected $modelo;
    protected $pesoMaximo;
    protected $preco;
    protected $numRodas;

    public function __construct() {
        
        $this->pdo = new PDO("mysql:dbname=base;host=127.0.0.1", "root", "");

        // Duvida: No modelo UML dado, o que seria o parametro dadosVeiculo do tipo string na entrada do metodo contrutor ?
    }

    abstract public function inserir() {

    }

    abstract public function listarUm() {
        
    }

    abstract public function listarTodos() {

    }

    //setters

    //getter

}

?>