<?php
//              INDEX 2
//----------------------------------------------------------------------------
//                  CODIÇOES

$numero = isset($_GET["numero"])?$_GET["numero"]:0;
$oper = isset($_GET["oper"])?$_GET["oper"]:1;

switch ($oper){
    case 1:
        $resul = $numero * 2;
        break;
    case 2:
        $resul = $numero ^ 3;
        break;
    case 3:
        $resul = sqrt($numero);
}
echo "O resultado e $resul";

//-----------------------------------------------------------------------
