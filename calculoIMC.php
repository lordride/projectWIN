<?php
//              INDEX 3
// CONDICIONAL ANINHADA
//-----------------------------------------------------------

if (isset($_GET["peso"])){
    $massa = (int) $_GET["peso"];
    $altura = (real) $_GET["metros"];
}
$IMC = $massa / ($altura*2);

echo "seu IMC é: $IMC ";
if ($IMC <17){
    echo "<p>Muito abaixo do peso!</p>";
}elseif(($IMC >= 17) && ($IMC < 18.5)){
    echo "<p>Abaixo do peso!</p>";
}elseif (($IMC >= 18.5) && ($IMC < 25)){
    echo "<p>Peso ideal!</p>";
}elseif (($IMC >= 25) && ($IMC < 30)){
    echo "<p>Sobre peso!</p>";
}elseif (($IMC >= 30) && ($IMC < 35)){
    echo "<p>Obesidade!</p>";
}elseif (($IMC >= 35) && ($IMC < 40)){
    echo "<p>Obesidade severa!</p>";
}else{
    echo "<p>Obesidade morbida!</p>";
}
echo "<br><a href='index3.php' class='botao'>voltar</a>";
