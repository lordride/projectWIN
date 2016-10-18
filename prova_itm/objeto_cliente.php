<?php
//      CLIENTE
class Cliente{

    private $id;
    private $nome;
    private $tipo;
    private $documento;
    private $senha;

//      const
    private static $TIPOS = [1=>"Master",2=>"Normal"];

    //get
    
    public function getSenha(){
        return $this->senha;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getTipo(){
        return self::$TIPOS[$this->tipo];
    }
    public function getDocumento(){
        return $this->documento;
    }
    public function getId(){
        return $this->id;
    }
    //set
    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setTipo($tipo){
        if (!in_array($tipo, self::$TIPOS)){
            throw new Exception ("Este tipo de cliente não existe.");
        }
        $this->tipo = array_search($tipo, self::$TIPOS);
    }
    public function setDocumento($documento){
        $this->documento = $documento;
    }
    public function setId($id){
        $this->id = $id;
    }

    //construct
    public function Cliente($nome,$tipo,$documento,$senha){
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->documento = $documento;
        $this->senha = $senha;
    }

}

//      CONTATO
class Contato{

    private $clienteId;
    private $tipoContato;
    

//get
    public function getTipoContato(){
        return $this->tipoContato;
    }
    public function getClienteId(){
        return $this->clienteId;
    }

//set
    public function setClienteId($clienteId){
        $this->clienteId = $clienteId;
    }
    public function setTipoContato($tipoContato){
        $this->tipoContato = $tipoContato;
    }

    //construct
    public function Contato($tipoContato){
        $this->tipoContato = $tipoContato;
    }
}

