<?php

$servidor = "localhost";
$usuario = "root";
$senha = "123";
$porta = "3306";

$banco = "exercicio1";

$link = mysqli_connect($servidor, $usuario, $senha);
if (!$link) {
    die('Não foi possível conectar: ');
}else{
    echo 'Conexão bem sucedida';
}

$db_selected = mysqli_select_db($link, $banco);
if (!$db_selected) {
    die ('Não foi possivel acessar o banco: ');
}else{
    echo "Banco acessado com sucesso!";
}