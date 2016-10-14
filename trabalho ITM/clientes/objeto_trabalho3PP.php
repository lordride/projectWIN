<?php


class Cadastro{

    private $nome;
    private $animal;
    private $documento;
    private $dataNasc;
    private $sexo;
    private $tipoPessoa;
    private $salario;

    public function Cadastro($nome,$animal,$documento,$dataNasc,$sexo,$tipoPessoa,$salario){

        $this->nome = $nome;
        $this->animal = $animal;
        $this->dataNasc = $dataNasc;
        $this->documento = $documento;
        $this->sexo = $sexo;
        $this->tipoPessoa = $tipoPessoa;
        $this->salario = $salario;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getAnimal(){
        return $this->animal;
    }
    public function getDataNascimento(){
        return $this->dataNasc;
    }
    public function getDocumento(){
        return $this->documento;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getTipoPessoa(){
        return $this->tipoPessoa;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setAnimal($animal){
        $this->nome = $animal;
    }
    public function setDataNascimento($dataNasc){
        $this->nome = $dataNasc;
    }
    public function setDocumento($documento){
        $this->nome = $documento;
    }
    public function setSexo($sexo){
        $this->nome = $sexo;
    }
    public function setTipoPessoa($tipoPessoa){
        $this->nome = $tipoPessoa;
    }
    public function setSalario($salario){
        $this->nome = $salario;
    }

}