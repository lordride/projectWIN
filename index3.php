<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<form method="get" action="calculoIMC.php">
    <fieldset><legend>Calculo de IMC</legend>
        Peso:<input type="text" placeholder=" 69 KG" name="peso"><br>
        Altura:<input type="text" placeholder=" 1.70 " name="metros"><br>
                <input type="submit" name="botao" value="Calcular">
    </fieldset>
</form>

<form method="get" action="votacao.php">
<fieldset><legend>Calcula sua idade e diz se vc pode votar</legend>
    ANO DE NASCIMENTO:<input type="number" placeholder="4 digitos" name="ano"><br>
                        <input type="button" value="verificar">
</fieldset>
</form>

<form method="get" action="dirigir.php">
    <fieldset><legend>Calcula a idade e diz se você esta apto a tirar a carteira de motorista</legend>
        Ano atual:<?php $date = date("Y"); echo "$date<br>";?>
        Ano de nascimento:<input type="date" name="anoNasc"><br>
                            <input type="submit" value="verificar">
    </fieldset>
</form>

<form method="get" action="media.php">
    <fieldset><legend>Calculador de média</legend>
        Nota 1:<input type="text" placeholder="0.00" name="n1"><br>
        Nota 2:<input type="text" placeholder="0.00" name="n2"><br>
        Nota 3:<input type="text" placeholder="0.00" name="n3"><br>
        Nota 4:<input type="text" placeholder="0.00" name="n4"><br>
        <input type="submit" name="botaoMedia" value="calcular">
    </fieldset>
</form>

<form method="get" action="FOR.php">
    <fieldset><legend>Tabuada</legend>
        Digite o número da tabuada que você deseja visualizar:<br>
        <input type="number" name="numero">
        <input type="submit" name="botaoT" value="mostrar">
    </fieldset>
</form>

<form method="get" action="fatorial.php">
    <fieldset><legend>Calculador do Fatorial</legend>
        <input type="number" name="fatorial">
        <input type="submit" value="calcular" name="botaoF">
    </fieldset>
</form>

<form method="get" action="Nprimo.php">
    <fieldset><legend>Verificador de numero primo</legend>
        <input type="number" name="numeroP">
        <input type="submit" name="botaoP" value="verificar">
    </fieldset>
</form>

<form>
    <fieldset><legend></legend>
        <input type="number" name="">
        <input type="submit" name="" value="">
    </fieldset>
</form>



</body>
</html>