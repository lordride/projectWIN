<?php
/*

function soma( $a , $b){

    return $a + $b;
}

//soma(3,4);

$x = 4;
$e = 5;

//soma($x,$e);

$res = soma(3,4);

echo "$res";

*/

function soma(){
    $p = func_get_args();       //usado para passar varios argumentos
    $tot = func_num_args();     //usado para retornar o numero de argumentos passados
    $s = 0;
    for ($i=0;$i<$tot;$i++){
        $s=$s+$p[$i];           //
    }
    return $s;
}

$r = soma(5,8,9,6);

echo "$r";
