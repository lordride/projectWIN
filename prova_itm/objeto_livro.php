<?php

class Autor{

    private $id;
    private $nome;
    
    

    public function Autor($nome){
        $this->nome = $nome;
    }

    public function save($conexaoDB){

        $query = "INSERT INTO AUTOR(NOME) VALUES ('{$this->getNome()}')";

        if (mysqli_query($conexaoDB, $query)){
            $this->id = mysqli_insert_id($conexaoDB);
            return true;
        }
        return false;
    }
    
    
    
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



}

//      LIVRO   
class Livro {

    private $id;
    private $numDaObra;
    private $titulo;
    private $assunto;
    private $clienteId;
    private $autorId;

    public function Livro($numDaObra,$titulo,$assunto,$clienteId,$autorId){
        $this->numDaObra = $numDaObra;
        $this->titulo = $titulo;
        $this->assunto = $assunto;
        $this->clienteId = $clienteId;
        $this->autorId = $autorId;
    }

    public function save($conexaoDB){
        
        $query = "INSERT INTO LIVRO(NUM_DA_OBRA, TITULO, ASSUNTO,CLIENTE_ID,AUTOR_ID) VALUES ('{$this->getNumDaObra()}','{$this->getTitulo()}','{$this->getAssunto()}','','{$this->getAutorId()}')";

        if (mysqli_query($conexaoDB, $query)){
            $this->autorId = mysqli_insert_id($conexaoDB);
            return true;
        }
        return false;
    }

    
    
//      GET

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
    public function getClienteId(){
        return $this->clienteId;
    }
    public function getAutorId(){
        return $this->autorId;
}
    
//     SET
    
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
    public function setClienteId($clienteId){
         $this->clienteId = $clienteId;
    }
    public function setAutorId($autorId){
        $this->autorId = $autorId;
    }
}


