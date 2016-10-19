<?php

class Autor{

    private $autorId;
    private $nomeAutor;
    
    
    public function getNomeAutor(){
        return $this->nomeAutor;
    }
    public function getAutorId(){
        return $this->autorId;
    }
    public function setAutorId($autorId){
        $this->autorId = $autorId;
    }
    public function setNomeAutor($nomeAutor){
        $this->nomeAutor = $nomeAutor;
    }
    
}

//      LIVRO   
class Livro extends Autor{

    private $livroId;
    private $numDaObra;
    private $titulo;
    private $assunto;
    private $status;
    private $clienteId;
    

//      GET
    public function getLivroId(){
        return $this->livroId;
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
    public function setLivroId($livroId){
         $this->livroId = $livroId;
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
    
//          CONSTRUCT
    public function Livro($numDaObra,$titulo,$assunto){

        $this->numDaObra = $numDaObra;
        $this->titulo = $titulo;
        $this->assunto = $assunto;
                

    }

    public function save($conexaoDB){
        
            $query = "INSERT INTO AUTOR(NOME) VALUES ('{$this->getNome()}')";

            print_r($query);
            return mysqli_query($conexaoDB, $query);
       
    }
}


