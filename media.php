<?php
//              INDEX 3
// CONDICIONAL 
//-----------------------------------------------------------
if (isset($_GET["botaoMedia"])){
    $nota1 = (real) $_GET["n1"];
    $nota2 = (real) $_GET["n2"];
    $nota3 = (real) $_GET["n3"];
    $nota4 = (real) $_GET["n4"];
}

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

echo "<p>sua media é: $media</p>";
if ($media >= 7){
    echo "<p>parabens voce esta aprovado!</p>";
}else{
    echo "<p>estude mais voce esta reprovado...</p>";
}

echo "<br><a href='index3.php' class='botao'>voltar</a>";
