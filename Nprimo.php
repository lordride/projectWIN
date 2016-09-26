<?php
//                  AINDA NAO TA FUNCIONANDO

//              INDEX 3
//-------------------------------------------------------------------------
if (isset($_GET["botaoP"])){
    $numero = $_GET["numeroP"];
}

$contador = 2;
$numeroPrimo = 1;

do{
    if ($numero % $contador == 0){
        $numeroPrimo = 0;
    }
    $contador++;
}while($contador > $numero);

if ($numeroPrimo == 1){
    echo "O valor $numero é primo!<br>";
}else{
    echo "O valor $numero não é primo!<br>";
}
echo "<a href='index3.php'>voltar</a>";

