<?php

if (isset($_GET["botaoT"])){
    $n = $_GET["numero"];
}

for ($contador = 0; $contador <= 10; $contador++){
    $resp = $contador * $n;
    echo "$n x $contador = $resp<br>";

}
echo "<br><a href='index3.php'>voltar</a>";

