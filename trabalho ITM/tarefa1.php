<?php

class Funcionario {

    private $nome;
    private $cpf;
    private $dataNascimento;



    public function getNome(){
        return $this->nome;
    }
    public function getCpf(){
        return $this->cpf;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
}
class Assitente extends Funcionario{

    private $dataCadastro;

    public function getDataCadastro(){
        return $this->dataCadastro;
    }
    public function setDatacadastro($dataCadastro){
        $this->dataCadastro = $dataCadastro;
    }
}

    $funcionario1 = new Funcionario();
    $funcionario1->setCargo('Administrador');
    $funcionario1->setNome('Carlos');
    $funcionario1->setCpf(78224494276);

    $funcionario2 = new Funcionario();
    $funcionario2->setCargo('Diretor');
    $funcionario2->setNome('Juliana');
    $funcionario2->setCpf(94203423791);

    $funcionario3 = new Funcionario();
    $funcionario3->setCargo('Gerente');
    $funcionario3->setNome('Paulo');
    $funcionario3->setCpf(20272551098);

    $funcionario4 = new Assitente();
    $funcionario4->setCargo('Assistente');
    $funcionario4->setNome('Creuza');
    $funcionario4->setCpf(77030665759);
    $funcionario4->setDatacadastro('21/06/2010');

    echo "<pre>";
    print_r($funcionario1);
    print_r($funcionario2);
    print_r($funcionario3);
    print_r($funcionario4);


