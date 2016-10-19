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

    //get    
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

        try {
            $query = "INSERT INTO CLIENTE(NOME,TIPO_CLIENTE,DOCUMENTO,SENHA) VALUES ('{$this->getNome()}','{$this->getTipo()}','{$this->getDocumento()}','{$this->getSenha()}')";

            print_r($query);
            return mysqli_query($conexaoDB, $query);
        }catch (Exception $e){
            print_r($e);
        }


    }

}


//      CONTATO
class Contato{
    
    private $contatoId;
    private $clienteId;
    private $tipoContato;
    

//get
    public function getContatoId(){
        return $this->contatoId;
    }
    public function getTipoContato(){
        return $this->tipoContato;
    }
    public function getClienteId(){
        return $this->clienteId;
    }

//set
    public function setContatoId($contatoId){
        $this->contatoId = $contatoId;
    }
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

    public function save($conexaoDB){

            $query = "INSERT INTO CONTATO(TIPO_CLIENTE) VALUES ('{$this->getNome()}','{$this->getTipo()}','{$this->getDocumento()}','{$this->getSenha()}')";

            print_r($query);
            return mysqli_query($conexaoDB, $query);

    }
}

