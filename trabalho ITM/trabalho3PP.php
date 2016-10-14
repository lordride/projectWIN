<?php

include "clientes/objeto_trabalho3PP.php";

$arrAnimal = array("cat"=>"gato","dog"=>"cachorro");


?>

<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <script type="text/javascript" src="../js/jquery-3.1.0.js" ></script>
</head>
<body>

<form action="" method="get" id="form">
    <fieldset><br/><br/>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br/><br/>

        <label for="masc">Sexo:</label>
        <label for="masc">Masc</label>
        <input type="radio" id="masc" name="sexo" value="masc" checked="true">
        <label for="fem">Fem</label>
        <input type="radio" id="fem" name="sexo" value="fem"><br/><br/>

        <label for="dataN">Data:</label>
        <input type="date" id="dataN" name="dataNasc"><br/><br/>

        <label for="FS">Tipo pessoa:</label>
        <label for="FS">Fisica</label>
        <input type="radio" id="PF" name="tipo" value="PF" checked="true">
        <label for="JR">Jurídica</label>
        <input type="radio" id="PJ" name="tipo" value="PJ"><br/><br/>
        <label for="doc" id="document"> </label>
        <input type="text" id="doc" name="documento"><br/><br/>

        <label for="select">Animal de estimação:</label>
        <select id="select" name="animal">
            <?php foreach($arrAnimal as $key => $animal){ ?>
                <option value="<?= $key; ?>">  <?= $animal; ?> </option>
            <?php } ?>
        </select><br/><br/>

        <label for="salario">Salário:</label>
        <input type="text" id="salario" name="salario"><br/><br/>

        <input type="submit" id="botao" value="Cadastrar">

        <div id="div" style="text-align: center">

        </div>

    </fieldset>
</form>

<script type="text/javascript">

    $(function () {

        $("#select").change(function () {
            var animal = $(this).val();
            if (animal === "dog"){
                alert("Au, Au, Adoramos Cachorros!");
            }else if(animal === "cat"){
                alert("Miau, Adoramos Gatos!");
            }
        });

        $("input[name='tipo']").change(function () {
            var tipo = $(this).val();
            if (tipo === "PF") {
                $("#document").html("CPF");
            } else {
                $("#document").html("CNPJ");
            }
        });

        $("#form").submit(function(event) {
            event.preventDefault();
            var data = $('form').serialize();
            $.get("trabalho3ppp.php?"+data, function (result) {
                $("#div").html(result);
            });
        });

        $("#botao").hover(function () {
            var valor = parseFloat($("#salario").val());
            var result = (valor/100) * 40;
            var resultado = result + parseFloat($("#salario").val());
           if($("#salario").val()!= ''){
               $("#div").html("Seu custo para a empresa é de: "+ resultado);
           }
        });




    })


</script>
</body>
</html>


