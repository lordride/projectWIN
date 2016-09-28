<?php
//----------------------------------------------------------------------
//PROPORÇÃO AUREA algoritmo "Fibonacci"


function fibonacci(&$t1, &$t2)
{
    $t3 = $t1 + $t2;
    $t1 = $t2;
    $t2 = $t3;

    return $t3;
}
echo "PROPORÇÃO AUREA serie de Fibonacci" . "<br>";

$t1 = 0;
$t2 = 1;

for ($i = 3; $i <= 15; $i++) {
    $t3 = fibonacci($t1,$t2);
    echo "$t3 "."<br/>";
}


/*
// =============================================================
// Algoritmo para mostrar os 15 primeiros termos de uma serie de
// Fibonacci (0,1,1,2,3,5,8,...)
//
// AUTOR: Gustavo Guanabara
// Curso COMPLETO disponivel GRATIS no site www.cursoemvideo.com
// =============================================================
var
  C, T1, T2, T3 : Inteiro
inicio
   T1 <- 0
   Escreva (T1)
   T2 <- 1
   Escreva (T2)
   Para C := 3 ate 15 faca
        T3 := T1 + T2
        Escreva (T3)
        T1 := T2
        T2 := T3
   FimPara
fimalgoritmo
  */
