<?php
//              CODIÇOES

$numero = isset($_GET["numero"])?$_GET["numero"]:0;
$oper = isset($_GET["oper"])?$_GET["oper"]:1;

    switch ($oper){
        case 1:
            $resultado = $numero * 2;
            break;
        case 2:
            $resultado = $numero ^ 3;
            break;
        case 3:
            $resultado = sqrt($numero);
    }
        echo "O resultado e <span class='foco'>$resultado</span>";

//-----------------------------------------------------------------------
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

//---------------------------------------------------------------------------
