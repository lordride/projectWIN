<?php
//              INDEX 3
//  CALCULO DE UM NUMERO FATORIAL
//--------------------------------------------------------------------
if (isset ($_GET["botaoF"])){
    $numero = $_GET["fatorial"];
}
$cont = $numero;
$fatorial = 1;

    do{
        $fatorial = $fatorial * $cont;
        $cont--;
    }while($cont >= 1);
    echo "fatorial de  $numero != $fatorial";

echo "<br><a href='index3.php'>voltar</a>";

