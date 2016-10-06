<?php

include('cidades.php');

include ("PESSOAS.php");


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <script type="text/javascript" src="../js/jquery-3.1.0.js" ></script>

</head>

<body>
<form action="cidadesESTADOS.php" method="GET" id="form" name="form">
    <fieldset>
        <br/>
        <label for="nome">Nome:</label>

        <input type="text" id="nome" name="nome" placeholder="nome"><br/><br/>

        <label for="MASC">Sexo:</label>

        <input type="radio" name="sexo" id="MASC" value="masc">

        <label for="MASC">m</label>

        <input type="radio" name="sexo" id="FEM" value="fem">

        <label for="FEM">f</label><br/><br/>

        <label for="PF">Pessoa Fisica</label>

        <input type="radio" name="tipo" id="PF" value="pf" checked="true">

        <label for="PJ">Pessoa Juridica</label>

        <input type="radio" name="tipo" id="PJ" value="pj"><br/><br/>


        <label class="nomeDocumento"> CPF</label>

        <input type="text" id="DOC" name="documento" style="background-color: greenyellow">
        <br/><br/>

        <label for="estados">Estados:</label>
            <select id="estados" name="estado">
            <?php foreach($arrCidades as $sigla => $arrayCidades){ ?>
                <option value="<?= $sigla; ?>">  <?= $sigla; ?> </option>
            <?php } ?>
            </select>

        <label for="cidades">Cidades:</label>
        <select id="cidades" name="cidade"> </select><br/><br/>


        Endereço:<input type="text" id="endereco" name="endereco">
        <label for="endereco"></label><br/><br/>

        <input type="submit" id="cadastrar" value="Cadastrar">
    </fieldset>
</form>

<script type="text/javascript">


    $(function () {
        
        $("#estados").change(function () {

            var sigla = $("#estados").val();

            $.ajax({
               type:"GET",
               url:"ajax/getCidade.php",
               data: "sigla="+sigla,
                success: function (data) {
                    $("#cidades").html(data)
                }
            });                       
        });

        $("input[name='tipo']").change(function () {
            var tipo = $(this).val();
            if(tipo === "pf"){
                $(".nomeDocumento").html("CPF");
                $("#DOC").css("background-color","greenyellow");
            }else{
                $(".nomeDocumento").html("CNPJ");
                $("#DOC").css("background-color","deepskyblue");
            }
        });



    })



</script>
</body>

</html>



<!--

asdsa

var var_name = $("input[name='radio_name']:checked").val();

if (){
$("#DOC").css("<input style='background-color: greenyellow'>");
}else {
$("#DOC").css("<input style='background-color: deepskyblue'>");
}
