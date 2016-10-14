<?php

$arrCores = array("green" => "Verde");

$arrCores["red"] = "vermelho";
$arrCores["blue"] = "azul";

?>

<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <script type="text/javascript" src="../js/jquery-3.1.0.js" ></script>
</head>
<body>


<form action="" method="post" id="form" style="background-color: pink">
    <fieldset><br/><br/>

        <select id="select" name="select">
            <?php foreach($arrCores as $key => $cores){ ?>
                <option value="<?= $key; ?>">  <?= $cores; ?> </option>
            <?php } ?>
        </select>

        <label for="num_De_Campos">Numero de campos:</label>
        <input type="text" id="num_De_Campos"><br/>

        <h3 class="tituloCampo" style="display: none">Nomes</h3><br/>
        <div id="div">

        </div>

        <div id="resposta"> </div>

    </fieldset>
</form>


<script type="text/javascript">


    $(function () {

        $("#num_De_Campos").keyup(function () {

            var numCamp = parseInt($(this).val());
            var i ;

            $("#div").html('');
            for (i = 1; i <= numCamp; i++){
                $("#div").append('Nome:<input type="text" id="campo-'+i+'" class="campo" name="nome['+i+']"><br/><br/>');
            }
            $("#tituloCampo").show();
            $("#div").append('<input type="submit" value="Enviar">');
        });

       $("#form").submit(function(event) {
                event.preventDefault();
            var data = $('form').serialize();

           $.post("trabalho3p.php", data, function (result) {

               $("#resposta").html(result);
           });
       });

        $("#select").change(function () {

            var cor = $(this).val();

            $("#form").css("background-color",cor);

        });

    })

</script>
</body>
</html>

