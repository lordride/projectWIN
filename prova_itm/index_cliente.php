<?php

include "objeto_cliente.php";

?>
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <script type="text/javascript" src="../js/jquery-3.1.0.js" ></script>
</head>
<body>

<form class="container" action="" method="post" id="form">
    <fieldset><legend>Cadastro do Cliente</legend>

        <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome"><label for="nome" id="nomeLabel"></label><br/><br/>

        <label for="senha">Senha:</label>
            <input type="password" id="senha" class="campoSenha" name="senha"><label for="senha" id="senhaLabel"></label><br/><br/>

        <label for="documento">CPF:</label>
        <input type="text" id="documento" name="doc"><br/><br/>

        <label for="master">Tipo de conta:</label>
        <label for="master">Master</label>
            <input type="radio" id="master" name="tipo" value="Master">
        <label for="cliente">Cliente</label>
            <input type="radio" id="cliente" name="tipo" value="Cliente"><br/><br/>

        <label for="addFone">Clique para adicionar um telefone:</label>
            <input type="submit" id="addFone" name="addFone" value="+">
        <div id="campoFone"></div><br/>

        <label for="addEmail">Clique para adicionar um email:</label>
            <input type="submit" id="addEmail" name="addEmail" value="+"><br/><br/>
        <div id="campoEmail"></div>

            <input type="submit" id="cadastrar" value="Cadastrar"><br/><br/>
            <a href="index.php"><input type="button" class="voltar" value="voltar"></a>
        
        <div id="div"></div>

    </fieldset>
</form>

<script src="../js/jquery.mask.js" type="text/javascript"></script>
<script type="text/javascript">
    function mascara() {
        $(".campoFone").mask("(99)-9999-99999");
        $(".campoSenha").mask("99999999999999999999");
    }
    $(function () {

        var cont = 0;
        var cont2 = 0;

        $("#nome").keyup(function () {
            var nome = $("#nome").val().split(" " ,3);
            if (nome.length < 2){
                $("#nomeLabel").html("Nome completo obrigatório!").css("color","#FF0000");
                $("#nome").css("background-color","#FF6347");
            }else{
                $("#nomeLabel").html('');
                $("#nome").css("background-color","#00FF7F");
            }
        });

        $("#addFone").click(function (event) {
            event.preventDefault();
            if (cont += 1){
                $("#campoFone").append('<div id="campF-'+cont+'"><br/>Telefone '+cont+':<input type="text" id="campoF-'+cont+'" class="campoFone" name="Telefone[]">' +
                    '<input type="submit" id="bot-'+cont+'" class="botaoCamp" value="-"><br/><br/></div>');
                mascara();
            }
        });

        $("#addEmail").click(function (event) {
            event.preventDefault();
            if (cont2 += 1){
                $("#campoEmail").append('<div id="campE-'+cont2+'" class="divIndividual"><br/>Email '+cont2+':<input type="text" id="campoE-'+cont2+'" name="Email[]">' +
                    '<input type="submit" id="bot-'+cont2+'" class="botaoCamp" value="-"><br/><br/></div>');
            }
        });

        $("#form").submit(function(event) {
            event.preventDefault();
            var data = $("#form").serialize();
            $.post("objetos_config.php",data, function (result) {
                $("#div").html(result);
            });
        });

        $("#senha").keyup(function () {
           var senha = $("#senha").val();
            var digitos = senha.length;

            if (digitos < 8){
                $("#senhaLabel").html("Senha muito curta!").css("color","#FF6347");
                $("#senha").css("background-color","#FF0000");
                mascara();
            }else{
                $("#senhaLabel").html('');
                $("#senha").css("background-color","#00FF7F");
                mascara();
            }
        });
        

    })
        
</script>
</body>
</html>
<?php

?>
