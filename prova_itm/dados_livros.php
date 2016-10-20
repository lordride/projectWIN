<?php
include "conexao_db.php";
include "objeto_livro.php";


//  AUTOR
$autor = isset($_POST['autor'])? $_POST['autor']:'';

$objAutor = new Autor($autor);

if (!$objAutor->save($conexaoDB)){
    echo "nao foi possivel salvar no banco";
}



//  LIVRO
$numeroObra = isset($_POST['numeroDaObra'])? $_POST['numeroDaObra']:'';
$titulo = isset($_POST['titulo'])? $_POST['titulo']:'';
$assunto = isset($_POST['assunto'])? $_POST['assunto']:'';


$objLivro = new Livro($numeroObra,$titulo,$assunto);

if (!$objLivro->save($conexaoDB)){
    echo "nao foi possivel salvar no banco";
}







mysqli_close($conexaoDB);

