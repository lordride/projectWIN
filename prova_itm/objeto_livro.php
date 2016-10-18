<?php

//      LIVRO   
class Livro{

    private $id;
    private $numDaObra;
    private $titulo;
    private $assunto;
    private $status;
    private $clienteId;
    private $autorId;


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
    public function getStatus(){
        return $this->status;
    }
    public function getClienteId(){
        return $this->clienteId;
    }
    public function getAutorId(){
        return $this->autorId;
    }
//     SET
    public function setId(){
        return $this->id;
    }
    public function setNumDaObra(){
        return $this->numDaObra;
    }
    public function setTitulo(){
        return $this->titulo;
    }
    public function setAssunto(){
        return $this->assunto;
    }
    public function setStatus(){
        return $this->status;
    }
    public function setClienteId(){
        return $this->clienteId;
    }
    public function setAutorId(){
        return $this->autorId;
    }
//          CONSTRUCT
    public function Livro($numDaObra,$titulo,$assunto,$status){

        $this->numDaObra = $numDaObra;
        $this->titulo = $titulo;
        $this->assunto = $assunto;
        $this->status = $status;

    }
}

