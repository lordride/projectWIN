<?php
include "conexao_db.php";
include "objeto_livro.php";

$autor = isset($_POST['autor'])? $_POST['autor']:'';

$numeroObra = isset($_POST['numerDaObra'])? $_POST['numerDaObra']:'';
$titulo = isset($_POST['titulo'])? $_POST['titulo']:'';
$assunto = isset($_POST['assunto'])? $_POST['assunto']:'';

$obj = new Livro($numeroObra,$titulo,$assunto,$autor);


echo "<pre>";
print_r($obj);









mysqli_close($conexaoDB);

