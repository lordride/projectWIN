<?php


class Pessoa
{
    private $nome;
    private $tipo;
    private $sexo;
    private $estado, $cidade, $endereco;
    private $documento;


//----------------GET / SET--------------------
    public function getNome(){
        return $this->nome;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function getSexo()
    {
        return $this->sexo;
    }
    public function getEstado()
    {
        return $this->estado;
    }
    public function getCidade()
    {
        return $this->cidade;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }
    public function getDocumento()
    {
        return $this->documento;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function setSexo($sexo)
    {
        $this->mulher = $sexo;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
    public function setCpf($documento)
    {
        $this->documento = $documento;
    }


//---------------------objetos------------------

    public function Pessoa($nome,$tipo, $sexo,$estado,$cidade,$endereco,$documento){
        
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->sexo = $sexo;
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->endereco = $endereco;
        $this->documento = $documento;
            
    }


}