<?php

function cadastro($nome=0, $cpf=0, $dataNascimento=0){

    $nomeCliente = (string) $nome;
    $cpfCliente = (string) $cpf;
    $dataNascimentoCliente = (string) $dataNascimento;

    $cliente = array( "nome"=>$nomeCliente,
        "cpf"=>$cpfCliente,
        "dataNascimento"=>$dataNascimentoCliente);

    return $cliente;
}
