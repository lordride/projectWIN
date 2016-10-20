<?php
//      CLIENTE
class Cliente{

    private $id;
    private $nome;
    private $tipo;
    private $documento;
    private $senha;

//      const
    private static $TIPOS = [1=>"Master",2=>"Cliente"];
    
//      get    
    public function getSenha(){
        return $this->senha;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getTipo(){
        return $this->tipo;
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
        $this->setTipo($tipo);
        $this->documento = $documento;
        $this->senha = $senha;
    }

    public function save($conexaoDB){
        
            $query = "INSERT INTO CLIENTE(NOME,TIPO_CLIENTE,DOCUMENTO,SENHA) VALUES ('{$this->getNome()}','{$this->getTipo()}','{$this->getDocumento()}','{$this->getSenha()}')";
        
        if (mysqli_query($conexaoDB, $query)){
           $this->id = mysqli_insert_id($conexaoDB);
            return true;
        }

        return false;
    }

}

//      CONTATO
class Contato{
    
    private $id;
    private $clienteId;
    private $tipoContato;
    private $descricao;
    private $link;
    

//get
    public function getLink(){
        return $this->link;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function getId(){
        return $this->id;
    }
    public function getTipoContato(){
        return $this->tipoContato;
    }
    public function getClienteId(){
        return $this->clienteId;
    }

//set
    public function setLink($link){
        $this->link = $link;
    }
    public function setDescricao($descricao){
         $this->descricao = $descricao;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setClienteId($clienteId){
        $this->clienteId = $clienteId;
    }
    public function setTipoContato($tipoContato){
        $this->tipoContato = $tipoContato;
    }

    //construct
    public function Contato($tipoContato,$descricao,$link = '',$clienteId){

        $this->tipoContato = $tipoContato;
        $this->descricao = $descricao;
        $this->link = $link;
        $this->clienteId = $clienteId;
    }

    public function save($conexaoDB){

            $query = "INSERT INTO CONTATO(TIPO_CONTATO,DESCRICAO,LINK,CLIENTE_ID) VALUES ('{$this->getTipoContato()}','{$this->getDescricao()}','{$this->getLink()}','{$this->getClienteId()}')";

        if (mysqli_query($conexaoDB, $query)){
            $this->clienteId = mysqli_insert_id($conexaoDB);
            return true;
        }
        return false;

    }

}

