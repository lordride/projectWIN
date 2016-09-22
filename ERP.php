<?php
// PROGRAMA FDP QUE CONTA NA POSIÇAO QUE VOCE INDICAR
// INDEX 4
//-----------------------------------------------------

if (isset ($_GET["botao"])){
    $inicio = $_GET["inicio"];
    $fim = $_GET["fim"];
    $incremento = $_GET["incremento"];
}
if ($inicio <= $fim){
    while ($inicio <= $fim){
        echo " $inicio <br>";
        $inicio = $inicio + $incremento;
    }
}elseif ($inicio >= $fim){
    while ($inicio >= $fim){
        echo " $inicio <br>";
        $inicio = $inicio - $incremento;
    }
}