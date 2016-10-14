<?php
// cria clientes;

class Cliente {
    private $nome;
    private $cpf;
    private $dataNascimento;

// funcoes

// getters
    public function getNome(){
        return $this->nome;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getDataNascimento(){
        return $this->dataNascimento;
    }

// setters
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }

}


    $cliente1 = new Cliente();

    $cliente1->setNome('Julia');
    $cliente1->setCpf('43221479506');
    $cliente1->setDataNascimento('21/09/1995');

    $cliente2 = new Cliente();

    $cliente2->setNome('Kalyna');
    $cliente2->setCpf('65242878193');
    $cliente2->setDataNascimento('01/08/1985');

    $cliente3 = new Cliente();

    $cliente3->setNome('Jessica');
    $cliente3->setCpf('15538212467');
    $cliente3->setDataNascimento('30/04/2000');

    $clientes = array();
    $clientes[] = $cliente1;
    $clientes[] = $cliente2;
    $clientes[] = $cliente3;


/*
    echo '<pre>';
    print_r($cliente1);
    print_r($cliente2);
    print_r($cliente3);

*/