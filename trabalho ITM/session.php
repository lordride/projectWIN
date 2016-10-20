<?php

include 'PESSOAS.php';


$obj = new Pessoa($nome='joão',$tipo='peao', $sexo='masc',$estado='sc',$cidade='blumenau',$endereco='jagaura do carai',$documento='1234587');

session_start();


$_SESSION['pessoa'] = serialize($obj);

print_r($_SESSION['pessoa']);


$objetoSessao = unserialize($_SESSION['pessoa']);


echo "<pre>";
print_r(unserialize($_SESSION['pessoa']));



/*
echo $objetoSessao->getNome()."<br/>";
echo $objetoSessao->getTipo()."<br/>";
echo $objetoSessao->getSexo()."<br/>";
echo $objetoSessao->getEstado()."<br/>";
echo $objetoSessao->getEndereco()."<br/>";
echo $objetoSessao->getCidade()."<br/>";
echo $objetoSessao->getDocumento()."<br/>";

*/



