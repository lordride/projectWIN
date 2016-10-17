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

<form action="" method="post" id="formularioA" class="container">
    <fieldset><legend><h2>Dados Pessoais</h2></legend><br/>

        <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome"><br/><br/>

        <label for="docCPF">CPF:</label>
            <input type="text" id="docCPF" name="cpf">
            <input type="submit" id="validarCPF" value="validar"><br/><br/>
        
        <label for="docRG">RG:</label>
            <input type="text" id="docRG" name="rg"><br/><br/>

        <label for="dataNascimento">Data de Nascimento:</label>
        <input type="text" id="dataNascimento" name="dataNasc"><br/><br/>

        <label for="masc">Sexo:</label>
        <label for="masc">Masc</label>
            <input type="radio" id="masc" name="sexo" value="masc" checked="true">
        <label for="fem">Fem</label>
            <input type="radio" id="fem" name="sexo" value="fem">
        <label for="outros">Outros</label>
            <input type="radio" id="outros" name="sexo" value="out"><br/><br/>
        
    </fieldset>
</form>

<form action="" method="post" id="formularioB" class="container">
    <fieldset><legend><h2>Dados Profissionais</h2></legend><br/>

        <label for="">Grau de Escolaridade:</label>
        <select id="select" name="animal">
            <?php foreach($arrEscolaridade as $key => $escolaridade){ ?>
                <option value="<?= $key; ?>">  <?= $escolaridade; ?> </option>
            <?php } ?>
        </select><br/><br/>

        <label for="formacao">Formação:</label>
            <input type="text" id="formacao" name="formacao"><br/><br/>

        <label for="cursos">Cursos:</label>
            <textarea id="cursos"> </textarea><br/><br/>
            
    </fieldset>
</form>

        <input type="submit" id="botao" value="Cadastrar">



<script src="../js/jquery.mask.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {

        $("#docCPF").mask("999.999.999-99");
        $("#docRG").mask("9.999.999-9");
        $("#dataNascimento").mask("9999/99/99");

        $("#botao").hover(function () {
            var nome = $("#nome").val().split(" " ,3);
            if (nome.length < 2){
                alert("Nome comepleto obrigatório.");
                $("#nome").css("background-color","#FF0000");
            }else{
                $("#nome").css("background-color","#00FF7F");
            }
        });

        $("#validarCPF").click(function () {
            var validar = $("#docCPF").val();
            $.post("validacaoCPF.php", {validacao:validar}, function () {
                if (validar === "result"){
                    $("#docCPF").css("background-color","#FF0000");
                }else{
                    $("#docCPF").css("background-color","#00FF7F");
                }
            });
        });


    })

</script>
</body>
</html>
