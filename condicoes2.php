<?php
//              INDEX 2
//-------------------------------------------------------------------------
//              CONDIÇAO DE MULTIPLOS CASOS

$dia = isset($_GET["dia"])?$_GET["dia"]:0;

switch ($dia){
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
        echo "<p>levanta e vai estudar!</p>";
        break;
    case 7:
    case 8:
        echo "<p>hoje pode dormir...</p>";
        break;
    default:
        echo "<p>Dia da semana invalido</p>";
}

echo "<br><a href='index2.php' class='botao'>voltar</a>";
//---------------------------------------------------------------------------