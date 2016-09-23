<?php
//                  AINDA NAO TA FUNCIONANDO

//              INDEX 3
//-------------------------------------------------------------------------
if (isset($_GET["botaoP"])){
    $numero = $_GET["numeroP"];
}

$contador = 1;
$contDiv = 0;

do{
    if (($numero % $contador) == 0){
        $contDiv = $contDiv + 1;
    }
    $contador++;
}while ($contador > $numero);

if ($contDiv > 2){
    echo "O valor $numero não é primo!<br>";
}else{
    echo "O valor $numero é primo!<br>";
}
echo "<a href='index3.php'>voltar</a>";

