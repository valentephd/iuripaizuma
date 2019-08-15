<?php
include 'veiculo.php';

class caminhao extends Veiculo {

    private $idCaminhao;
    private $idVeiculo;      // Dúvida aqui. Já extende a variável idVeiculo !!
    private $pesoMaximo;     // Mesma dúvida .. O attrib pesoMaximo já existe na classe principal
    private $quantidadeEixo;
    
    public function __construct() {
        
    }

    //setters TODO

    //getters TODO
}