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
//----------------------------------------------------------------------------------------
/*

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
*/

/*

function parOUimpar($n){
    if ($n % 2 == 0){
        echo "o numero é par";
    }else{
        echo "o numero é impar";
    }
}

$num = 8;

parOUimpar($num);

*/

/*
function triplica($a,$b){
    $n = ($a + $b) * 3;
    echo  $n;
}
$a = 4;
$b = 8;

triplica(4,8);
*/

function soma($a, $b){
    $a = +2;
    $b = +4;
    
}
$x = 5;
$y = 6;

soma($x,$y);
echo "$y $x";


