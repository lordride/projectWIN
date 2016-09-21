<?php

class Banco{
// ATRIBUTOS
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

// METODOS
    public function abrirConta($tipo){
        $this->setTipo($tipo);
        $this->setStatus(true);

        if ($this->getTipo() == "CC"){
            $this->setSaldo(50);
        }elseif ($this->getTipo() == "CP"){
            $this->setSaldo(150);
        }
    }
    public function fexarConta(){
        if ($this->saldo > 0){
            echo "<p>ERROR AO FEXAR ESTA CONTA! AINDA HÀ SALDO NESTA CONTA!</p>";
        }elseif($this->saldo < 0){
            echo "<p>esta conta possui debito em aberto e nao pode ser encerrada!</p>";
        }else{
            $this->setStatus(false);
        }
    }
    public function depositar($valor){

        if ($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Deposito de $valor na conta de " . $this->getDono() . "</p>";
        }else{
            echo "<p>impossivel depositar!</p>";
        }
    }
    public function sacar($valor){
        if ($this->getStatus() == true) {
            if ($this->getSaldo() > $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>" . $this->getDono() . " sacou $valor de sua conta. </p>";
            }else{
                echo "<p>saldo insuficiente!</p>";
            }
        }else{
            echo "<p>impossivel sacar!</p>";
        }
    }
    public function pagarMensal(){

        if ($this->getTipo() == "CC"){
            $valor = 12;
        }elseif($this->getTipo() == "CP"){
            $valor = 20;
        }
        if ($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() - $valor);
                echo "<p> A mensalidade de $valor foi debitada da conta " . $this->getNumConta() . " de " . $this->getDono() . "</p>";
            }else{
                echo "<p>impossivel efetuar o pagamento!</p>";
        }
    }

// METODOS ESPECIAIS

    public function Banco(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>conta criada com sucesso</p>";
    }

    public function getNumConta(){
        return $this->numConta;
    }
    public function setNumConta($numConta){
        $this->numConta = $numConta;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function getDono(){
        return $this->dono;
    }
    public function setDono($dono){
        $this->dono = $dono;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }

}
