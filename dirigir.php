<?php
//              INDEX 3
// CONDICIONAL 
//-----------------------------------------------------------

if (isset($_GET["anoNasc"])){
    $anoAtual = date("Y");
    $anoNasc = $_GET["anoNasc"];
}

$idade = ($anoAtual - $anoNasc);
echo "<p>sua idade e: $idade</p>";
if ($idade >= 18){
    echo "<p>voce e maior de idade e esta apto a tirar a sua carteira</p>";
}else{
    echo "<p>voce e menor de idade e nao pode tira a carteira de motorista</p>";
}

echo "<br><a href='index3.php' class='botao'>voltar</a>";
