<?php
//              INDEX 3
// CONDICIONAL 
//-----------------------------------------------------------
$ano = isset($_GET["ano"])?$_GET["ano"]:1900;
$idade = date("Y") - $ano;
echo "<p>VOCE NASCEU EM $ano E TEM $idade ANOS</p>";

/* if ($idade >= 18){
     $maior = "ja pode votar";
     $menor = "ja pode dirigir";
 }else{
     $maior = "nao pode votar";
     $menor = "nao pode dirigir";
 }
 echo "com essa idade voce $maior e $menor"; */

if ($idade < 16){                                            // && = E
    $tipoVoto = "não vota";                                     // || = ou
}elseif (($idade >= 16 && $idade <18) || ($idade > 65)){    //aninhando
    $tipoVoto = "voto opcional";
}else{
    $tipoVoto = "voto obrigatorio";
}

echo "<p>Voce tem: $tipoVoto</p>";

echo "<br><a href='index3.php' class='botao'>voltar</a>";
