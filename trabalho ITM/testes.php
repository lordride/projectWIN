<?php

class Data{

    private $dataNasc;
    private $dataAtual;
    private $dataFutura;

    public function getDataNasc(){
        return $this->dataNasc;
    }
    public function getDataAtual(){
        return $this->dataAtual;
    }
    public function getDataFutura(){
        return $this->dataFutura;
    }
    public function setDataNasc($dataNasc){
        $this->dataNasc = $dataNasc;
    }
    public function setDataAtual($dataAtual){
        $this->dataAtual = $dataAtual;
    }
    public function setDataFutura($dataFutura){
        $this->dataFutura = $dataFutura;
    }

    public function calcularData(){

        

    }
}


    $data = new Data();
    $data->setDataNasc('25/01/1987');
    $data->setDataAtual(date('d/m/Y'));
    $data->setDataFutura('25/01/2050');
    $data->calcularData();

    echo "<pre>";
    print_r($data);
