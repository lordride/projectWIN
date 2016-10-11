<?php

?>
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <script type="text/javascript" src="../js/jquery-3.1.0.js" ></script>

</head>
<body>
    <form method="post" action="">
        <fieldset>

            <label for="fem_id">Feminino</label>
            <input type="radio" id="fem_id" name="sexo" value="fem">
            <label for="masc_id">Masculino</label>
            <input type="radio" id="masc_id" name="sexo" value="masc" checked="true"><br/><br/>
            <label for="nome_id" class="pessoa">Nome:</label>
            <input type="text" id="nome_id" name="nome" style="background-color: #6e6e6e"><br/><br/>
            <label for="documento_id">Documento:</label>
            <input type="text" id="documento_id" name="documento"><br/><br/>
            <input type="button" id="botao" name="botao" value="botaoFDP">
            <input type="che">
            
        </fieldset>
    </form><br/>

    <img src="death-01.jpg" id="dt" name="death" title="devil" style="width: 400px; height: 300px;">

<script type="text/javascript">
    $(function () {

        $("input[name='sexo']").change(function () {
            var tipo = $(this).val();            
            if (tipo === "masc"){
                $(".pessoa").html("Homem:");
                $("#nome_id").css("background-color","#436FFF");
                $("#dt").attr("title","capiroto");
            }else{
                $(".pessoa").html("Mulher:");
                $("#nome_id").css("background-color","#FF5DC8");
                $("#dt").attr("title","capirota");
            }
        });

        $("#botao").click(function () {
            $("#documento_id").css("background-color","#FFC700");
        });
        
        
    })

</script>
</body>
</html>

