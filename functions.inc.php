<?php
//              INDEX 3
// CONDICIONAL ANINHADA
//-----------------------------------------------------------

function calculoIMC ($peso=0, $metros=0){

    $imc = (int)$peso / ((float)$metros*2);
    
    if ($imc <17){
        echo "<p>Muito abaixo do peso!</p>";
    }elseif(($imc >= 17) && ($imc < 18.5)){
        echo "<p>Abaixo do peso!</p>";
    }elseif (($imc >= 18.5) && ($imc < 25)){
        echo "<p>Peso ideal!</p>";
    }elseif (($imc >= 25) && ($imc < 30)){
        echo "<p>Sobre peso!</p>";
    }elseif (($imc >= 30) && ($imc < 35)){
        echo "<p>Obesidade!</p>";
    }elseif (($imc >= 35) && ($imc < 40)){
        echo "<p>Obesidade severa!</p>";
    }else{
        echo "<p>Obesidade morbida!</p>";
    }
    return $imc;
}
//              INDEX 3
//  CALCULO DE UM NUMERO FATORIAL
//--------------------------------------------------------------------
function fatorial($fatorial=0)
{
    $numero = (int)$fatorial;

    $cont = $numero;
    $numeroFatorial = 1;

    do {
        $numeroFatorial = $numeroFatorial * $cont;
        $cont--;
    } while ($cont >= 1);
    return $numeroFatorial;
}
//              tabuada
//-----------------------------------------------------------------

function tabuada($numero=0)
{
    $numero = (int)$numero;
    $resp = 0;

    for ($contador = 0; $contador <= 10; $contador++) {
        $resp = $contador * $numero;
        echo "$numero x $contador = $resp<br>";
    }
    return $resp;
}
// PROGRAMA FDP QUE CONTA NA POSIÇAO QUE VOCE INDICAR
// INDEX 4
//-----------------------------------------------------
function contadorInteligente($inicio=0,$fim=0,$incremento=0)
{
    $inicio = (int)$inicio;
    $fim = (int)$fim;
    $incremento = (int)$incremento;

    if ($inicio <= $fim) {
        while ($inicio <= $fim) {
            echo " $inicio <br>";
            $inicio = $inicio + $incremento;
        }
    } elseif ($inicio >= $fim) {
        while ($inicio >= $fim) {
            echo " $inicio <br>";
            $inicio = $inicio - $incremento;
        }
    }
    return $inicio;
}
//              INDEX 3
//-------------------------------------------------------------------------
function numeroPrimo($numeroPrimo=0)
{
    $numeroP = (int)$numeroPrimo;


    $contador = 2;
    $numeroPrimo = 1;

    do {
        if ($numeroP % $contador == 0) {
            $numeroPrimo = 0;
        }
        $contador++;
    } while ($contador > $numeroP);

    if ($numeroPrimo == 1) {
        echo "O valor $numeroP é primo!<br>";
    } else {
        echo "O valor $numeroP não é primo!<br>";
    }
    return $numeroP;
}
//---------------------------------------------------------------
//              INDEX 3
// CONDICIONAL 
//-----------------------------------------------------------
function dirigir($anoNasc=0)
{
    $anoAtual = date("Y");

    $idade = ((int)$anoAtual - (int)$anoNasc);

    if ($idade >= 18) {
        echo "<p>voce e maior de idade e esta apto a tirar a sua carteira</p>";
    } else {
        echo "<p>voce e menor de idade e nao pode tira a carteira de motorista</p>";
    }
    return $idade;
}

//              INDEX 3
// CONDICIONAL 
//-----------------------------------------------------------
function votacao($ano=0)
{
    $idade = date("Y") - (int)$ano;

    echo "<p>VOCE NASCEU EM $ano E TEM $idade ANOS</p>";

    /* if ($idade >= 18){
         $maior = "ja pode votar";
         $menor = "ja pode dirigir";
     }else{
         $maior = "nao pode votar";
         $menor = "nao pode dirigir";
     }
     echo "com essa idade voce $maior e $menor"; */

    if ($idade < 16) {                                            // && = E
        $tipoVoto = "não vota";                                     // || = ou
    } elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) {    //aninhando
        $tipoVoto = "voto opcional";
    } else {
        $tipoVoto = "voto obrigatorio";
    }
    return $tipoVoto;
}

//              INDEX 3
// CONDICIONAL 
//-----------------------------------------------------------
function media($n1=0,$n2=0,$n3=0,$n4=0)
{
    $nota1 = (float)$n1;
    $nota2 = (float)$n2;
    $nota3 = (float)$n3;
    $nota4 = (float)$n4;

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    if ($media >= 7) {
        echo "<p>parabens voce esta aprovado!</p>";
    } else {
        echo "<p>estude mais voce esta reprovado...</p>";
    }
    return $media;
}
//-----------------------------------------------------------------------
//              INDEX 3 MEDIA UNIASSELVI
//------------------------------------------------------------------------

/*
function mediaUniasselvi($primeiroBimestre=0, $segundoBimestre=0, $exame=0){

    $primeiroB = (float)$primeiroBimestre;
    $segundoB = (float)$segundoBimestre;
    $ex = (float)$exame;

    if (($primeiroB + $segundoB) / 2 >= 7){
        $mediaF = ($primeiroB + $segundoB) / 2;
    }
    if($mediaF < 7){
        $mediaEx = ($mediaF + $ex) / 2;
    }
    if ($mediaF >= 7){
        echo "Sua média é $mediaF, você está aprovado!";
    }elseif($mediaEx >= 6){
        echo "Sua média é $mediaF, você está aprovado!";
    }elseif($mediaF < 7){
        echo "Sua média é $mediaF, você está em exame!";
    }elseif ($mediaEx < 6){
        echo "Sua média é $mediaEx, você está reprovado!";
    }elseif ($mediaF < 2){
        echo "Sua média é $mediaF, você está reprovado!";
    }
    return $mediaF;
}

*/






















