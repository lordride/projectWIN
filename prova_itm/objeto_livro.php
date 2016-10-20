<?php

class Autor{

    private $id;
    private $nome;
    
    
    public function getNome(){
        return $this->nome;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }


    public function Autor($nome){
        $this->nome = $nome;
    }

    public function save($conexaoDB){
        
        $query = "INSERT INTO AUTOR(NOME) VALUES ('{$this->getNome()}')";
        
        return mysqli_query($conexaoDB, $query);
    }

}

//      LIVRO   
class Livro {

    private $id;
    private $numDaObra;
    private $titulo;
    private $assunto;
    private $status;
    private $clienteId;
    private $autorId;

    public function Livro($numDaObra,$titulo,$assunto){        
        $this->numDaObra = $numDaObra;
        $this->titulo = $titulo;
        $this->assunto = $assunto;
    }

    public function save($conexaoDB){
        
        $query = "INSERT INTO LIVRO(NUM_DA_OBRA, TITULO, ASSUNTO) VALUES ('{$this->getNumDaObra()}','{$this->getTitulo()}','{$this->getAssunto()}')";

        print_r($query);
        
        return mysqli_query($conexaoDB, $query);
    }

//      GET
    public function getAutorId(){
        return $this->autorId;
    }
    public function getId(){
        return $this->id;
    }
    public function getNumDaObra(){
        return $this->numDaObra;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAssunto(){
        return $this->assunto;
    }
    public function getStatus(){
        return $this->status;
    }
    public function getClienteId(){
        return $this->clienteId;
    }
    
//     SET
    public function setAutorId($autorId){
        $this->autorId = $autorId;
    }
    public function setId($id){
         $this->id = $id;
    }
    public function setNumDaObra($numDaObra){
         $this->numDaObra = $numDaObra;
    }
    public function setTitulo($titulo){
         $this->titulo = $titulo;
    }
    public function setAssunto($assunto){
         $this->assunto = $assunto;
    }
    public function setStatus($status){
         $this->status = $status;
    }
    public function setClienteId($clienteId){
         $this->clienteId = $clienteId;
    }

}


