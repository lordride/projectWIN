<?php
    echo "<p>CALCULO DE IMC COM ESTRUTURA ANINHADA</p>";
    $massa = 85;
    $altura = 1.79;

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

//--------------------------------------------------------------
    echo "<p>CALCULA SE A PESSOA É APTA A TIRAR CARTEIRA DE MOTORISTA</p>";
    $anoAtual = 2016;
    $anoDeNascimento = 1990;

    $idade = ($anoAtual - $anoDeNascimento);
        echo "<p>sua idade e: $idade</p>";
    if ($idade >= 18){
        echo "<p>voce e maior de idade e esta apto a tirar a sua carteira</p>";
    }else{
        echo "<p>voce e menor de idade e nao pode tira a carteira de motorista</p>";
    }
//--------------------------------------------------------------------
    echo "<p>CALCULO DE MEDIA</p>";
    $nota1 = 5;
    $nota2 = 6;
    $nota3 = 9;
    $nota4 = 8;

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    echo "<p>sua media é: $media</p>";
    if ($media >= 7){
        echo "<p>parabens voce esta aprovado!</p>";
    }else{
        echo "<p>estude mais voce esta reprovado...</p>";
    }
//----------------------------------------------------------------------
    echo "<p>CONDICIONAL ANINHADA</p>";

    $ano = isset($_GET["ano"])?$_GET["ano"]:1900;
    $idade = date("Y") - $ano;
    echo "<p>VOCE NASCEU EM $ano E TERA $idade ANOS</p>";

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
//----------------------------------------------------------------------------------




