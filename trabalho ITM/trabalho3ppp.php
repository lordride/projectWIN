<?php

include "clientes/objeto_trabalho3PP.php";

$nome = isset($_GET['nome']) ? $_GET['nome']:'';
$animal = isset($_GET['animal']) ? $_GET['animal']:'';
$documento = isset($_GET['documento']) ? $_GET['documento']:'';
$dataNasc = isset($_GET['dataNasc']) ? $_GET['dataNasc']:'';
$sexo = isset($_GET['sexo']) ? $_GET['sexo']:'';
$tipoPessoa = isset($_GET['tipo']) ? $_GET['tipo']:'';
$salario = isset($_GET['salario']) ? $_GET['salario']:'';


$obj = new Cadastro($nome,$animal,$documento,$dataNasc,$sexo,$tipoPessoa,$salario);
echo "Nome: ".$nome."<br/>";
echo "Sexo: ".$sexo."<br/>";
echo "Data de Nascimento: ".$dataNasc."<br/>";
echo "Tipo da Pessoa: ".$tipoPessoa."<br/>";
echo "Documento: ".$documento."<br/>";
echo "Animal de estimação: ".$animal."<br/>";
echo "Salário: ".$salario."<br/>";
