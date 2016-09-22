<?php

$numero = $_GET["fatorial"];

$contador = $numero;

for ($contador = $numero; $contador <= 1; $contador--){
    echo "$contador<br>";
  //  $result = $contador - 1;
}
echo "<a href='index3.php' class='botao'>voltar</a>";