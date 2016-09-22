<?php
//INDEX 
//----------------------------------------------------------
class Caneta
{

public $cor;
public $carga;
public $tampada;
private $ponta;
private $modelo;
/*
 public function Caneta($m, $c, $p){       metodo construtor

    $this->modelo = $m;
    $this->cor = $c;
    $this->ponta = $p;
    $this->tampar();
}

*/
    public function rabiscar()
    {
        if ($this->tampada == true) {
            echo "nao posso rabiscar!";
        } else {
            echo "estou rabiscando...";
        }
    }
    public function tampar()
    {
        $this->tampada = true;
    }
    public function destampar()
    {
        $this->tampada = false;
    }
    public function carga()
    {
        if ($this->carga <= 10) {
            echo " a tinta esta acabando, compre uma caneta nova...";
        } else {
            echo " a caneta esta bem carregada!";
        }
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($c){
        $this->cor = $c;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }
    public function getCarga(){
        return $this->carga;
    }
    public function setCarga($cg){
        $this->carga = $cg;
    }
    public function getTampada(){
        return $this->tampada;
    }
    public function setTampada($t){
        $this->tampada = $t;
    }
}
class Carro
{

    public $modelo;
    public $ano;
    public $marca;
    public $cor;
    public $garantia;
    public $estado;

// posso usar tambem como ---- public function (nome da classe) que tambem ira funcionar

    public function __construct()
    {
        $this->cor = "preto";
    }
    public function vendas()
    {
        if ($this->garantia == true) {
            echo " A garantia do carro e de 3 anos... ";
        } else {
            echo " Este carro nao possui carantia... ";
        }
    }
    public function chekup()
    {
        if ($this->garantia == true) {
            echo " O carro esta OK! ";
        } else {
            echo " O carro precisa de reparos... ";
        }
    }
    public function estadoCarro()
    {
        if ($this->estado == "novo") {
            echo " Este carro e novo! ";
        } else {
            echo " Este carro e usado... ";
        }
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($m)
    {
        $this->modelo = $m;
    }
    public function getAno()
    {
        return $this->ano;
    }
    public function setAno($a)
    {
        $this->ano = $a;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($mc)
    {
        $this->marca = $mc;
    }
    public function getCor()
    {
        return $this->cor;
    }
    public function setCor($c)
    {
        $this->cor = $c;
    }
    public function getGarantia()
    {
        return $this->garantia;
    }
    public function setGarantia($g)
    {
        $this->garantia = $g;
    }
    public function getEstado()
    {
        return $this->estado;
    }
    public function setEstado($e)
    {
        $this->estado = $e;
    }
}