<?php

include('functions.inc.php');

if (isset($_GET['fatorial'])){
    fatorial($_GET['fatorial']);
}

if (isset($_GET['peso']) && isset($_GET['metros']) ){
    calculoIMC($_GET['peso'], $_GET['metros']);
}

if (isset($_GET['ano'])){
    votacao($_GET['ano']);
}

if (isset($_GET['anoNasc'])){
    dirigir($_GET['anoNasc']);
}

if (isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['n3']) && isset($_GET['n4'])){
    media($_GET['n1'],$_GET['n2'],$_GET['n3'],$_GET['n4']);
}

if (isset($_GET['numero'])){
    tabuada($_GET['numero']);
}

if (isset($_GET['fatorial'])){
    fatorial($_GET['fatorial']);
}

if (isset($_GET['numeroP'])){
    numeroPrimo($_GET['numeroP']);
}

if (isset($_GET['primeiroBimestre']) && isset($_GET['segundoBimestre']) && isset($_GET['exame'])){
    mediaUniasselvi($_GET['primeiroBimestre'],$_GET['segundoBimestre'],$_GET['exame']);
}
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">

</head>
<body>

<form method="get" action="index3.php">
    <fieldset><legend>Calculo de IMC</legend>
        Peso:<input type="text" placeholder=" 69 KG" name="peso"><br>
        Altura:<input type="text" placeholder=" 1.70 " name="metros"><br>
        <input type="submit" value="Calcular">
    </fieldset>
</form>

<form method="get" action="index3.php">
<fieldset><legend>Calcula sua idade e diz se vc pode votar</legend>
    ANO DE NASCIMENTO:<input type="number" placeholder="4 digitos" name="ano"><br>
    <input type="button" value="verificar">
</fieldset>
</form>

<form method="get" action="index3.php">
    <fieldset><legend>Calcula a idade e diz se você esta apto a tirar a carteira de motorista</legend>
        Ano atual:<?php $date = date("Y"); echo $date."<br>"; ?>
        Ano de nascimento:<input type="date" name="anoNasc"><br>
                            <input type="submit" value="verificar">
    </fieldset>
</form>

<form method="get" action="index3.php">
    <fieldset><legend>Calculador de média</legend>
        Nota 1:<input type="text" placeholder="0.00" name="n1"><br>
        Nota 2:<input type="text" placeholder="0.00" name="n2"><br>
        Nota 3:<input type="text" placeholder="0.00" name="n3"><br>
        Nota 4:<input type="text" placeholder="0.00" name="n4"><br>
        <input type="submit" value="calcular">
    </fieldset>
</form>

<form method="get" action="index3.php">
    <fieldset><legend>Tabuada</legend>
        Digite o número da tabuada que você deseja visualizar:<br>
        <input type="number" name="numero">
        <input type="submit" value="mostrar">
    </fieldset>
</form>

<form method="get" action="index3.php">
    <fieldset><legend>Calculador do Fatorial</legend>
        <input type="number" name="fatorial">
        <input type="submit" value="calcular">
    </fieldset>
</form>

<form method="get" action="index3.php">
    <fieldset><legend>Verificador de numero primo</legend>
        <input type="number" name="numeroP">
        <input type="submit" value="verificar">
    </fieldset>
</form>

<form method="get" action="index3.php">
    <fieldset><legend>Calculo média Uniasselvi</legend>
        1ºB:<input type="number" name="primeiroBimestre"/>
        2ºB:<input type="number" name="segundoBimestre"/>
        Exame:<input type="number" name="exame"/>
        <input type="submit" value="calcular"/>
    </fieldset>
</form>

</body>
</html>