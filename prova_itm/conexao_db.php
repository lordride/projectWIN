<?php

$servidor = "localhost";
$usuario = "root";
$senha = "123";
$porta = "3306";

$banco = "biblioteca";

$conexaoDB = mysqli_connect($servidor, $usuario, $senha);
if (!$conexaoDB) {
    die('Não foi possível conectar: ');
}else{
    
}

$db_selected = mysqli_select_db($conexaoDB, $banco);
if (!$db_selected) {
    die ('Não foi possivel acessar o banco: ');
}else{
    
}

