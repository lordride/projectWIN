<?php
session_start();

include "PESSOAS.php";

$objetoSessao = unserialize($_SESSION['pessoa']);

print_r($objetoSessao);


/*
if (!isset($_SESSION['nome'])) {
    exit('o usuario não está logado');
}
if (empty($_SESSION['nome']) && empty($_SESSION['senha'])){
    exit('sessao terminada, faça seu login novamente');
}

// Simulação de um usuário do banco de dados
$usuario_bd = 'Rachel';

// Verifica se a sessão do usuário está vazia
if ( $_SESSION['usuario'] != $usuario_bd ) {
    // Ação a ser executada: mata o script e manda uma mensagem
    exit('Você não é o usuário correto.');
}

*/


echo "<br/>";
echo "<br/>";
echo "<br/>";

$arrTest = array($nome='pedro',$apelido='boca de lata',$altura='1.89');

$implode = implode(" , ",$arrTest);

echo $implode;


echo "<br/>";
echo "<br/>";
echo "<br/>";


$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";

$pieces = explode(" ", $pizza,-1);

echo $pieces[0]; // piece1
echo $pieces[1]; // piece2
echo $pieces[3]; // piece4

echo "<br/>";
echo "<br/>";
print_r($pieces);

