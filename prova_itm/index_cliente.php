<?php
include "objeto_cliente.php";

?>
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <style>
        body{
            background-image: url('imagens/cadatro.jpg');
            background-size: 100%;
        }
        #formCliente{
            color: #19ade8;
            text-align: center;
        }
        #cadastro{
            color: #19ade8;
            text-align: center;
        }
        .botao{
            color: #0f0f0f;
        }
        fieldset{
            position: absolute;
            right: 320px;
            left: 320px;
            top: 100px;
        }
    </style>
    <script type="text/javascript" src="../js/jquery-3.1.0.js" ></script>
</head>
<body>

<form class="container" method="post" id="formCliente">
    <fieldset class="col-md-5"><legend id="cadastro">Cadastro do Cliente</legend>

        <label for="nome">Nome:</label>
            <input type="text" id="nome" class="form-control" name="nome"><label for="nome" id="nomeLabel"></label>

        <label for="senha">Senha:</label>
            <input type="password" id="senha" class="campoSenha form-control" name="senha"><label for="senha" id="senhaLabel"></label>
        <label for="documento">CPF:</label>
        <input type="text" id="documento" class="form-control" name="doc"><br/>

        <label for="master">Tipo de conta:</label><br/>
        <label for="master">Master</label>
            <input type="radio" id="master" name="tipo" value="Master">
        <label for="cliente">Cliente</label>
            <input type="radio" id="cliente" name="tipo" value="Cliente"><br/><br/>

        <label for="addFone">Telefone:</label>
            <input type="submit" id="addFone" class="botao btn btn-info btn-xs" name="addFone" value="+"><br/>
        <div id="campoFone"></div><br/>

        <br/><label for="addEmail">Email:</label>
            <input type="submit" id="addEmail" name="addEmail" class="botao btn btn-info btn-xs" value="+"><br/><br/>
        <div id="campoEmail"></div>

            <input type="submit" id="cadastrar" class="botao btn btn-success" value="Cadastrar"><br/><br/>
            <a href="index.php"><input type="button" class="botao btn btn-primary btn-sm" value="voltar"></a>

    </fieldset>

    <div id="div"></div>

</form>

<script src="../js/jquery.mask.js" type="text/javascript"></script>
<script type="text/javascript">
    function mascara() {
        $(".campoFone").mask("(99)-9999-99999");
        $(".campoSenha").mask("99999999999999999999");
        $(".campoDocumento").mask("999.999.999-99");
    }
    $(function () {
        //  VARIAVEIS DE CONTAGEM DOS CAMPOS INTERATIVOS
        var campMaxFone = 3;
        var xF = 1;
        var campMaxEmail = 3;
        var xE = 1;
        //  VALIDACAO DE NOME COMPLETO
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
        //  ADICIONA CAMPO TELEFONE
        $("#addFone").click(function (event) {
                event.preventDefault();
            if (xF < campMaxFone){
                $("#campoFone").append('<div class="col-xs-6">Telefone '+xF+':<input type="text" class="campoFone form-control" name="Telefone[]">' +
                    '<a href="#" class="removerFone"><input type="button" class="botaoFone btn btn-info btn-xs" value="-"><a/></div>');
                xF++;
                mascara();
            }
        });
        // ADICIONA CAMPO EMAIL
        $("#addEmail").click(function (event) {
                event.preventDefault();
            if (xE < campMaxEmail){
                $("#campoEmail").append('<div class="col-xs-6">Email '+xE+':<input type="text" class="campoEmail form-control" name="Email[]">' +
                    '<a href="#" class="removerEmail"><input type="button" class="botaoEmail btn btn-info btn-xs" value="-"></a></div>');
                xE++;
            }
        });
        // REMOVE CAMPO TELEFONE
        $('#campoFone').on("click",".removerFone",function(event) {
            event.preventDefault();
            $(this).parent('div').remove();
            xF--;
        });
        // REMOVE CAMPO EMAIL
        $('#campoEmail').on("click",".removerEmail",function(event) {
            event.preventDefault();
            $(this).parent('div').remove();
            xE--;
        });
        //  ENVIA FORMULARIO VIA AJAX
        $("#formCliente").submit(function(event) {
            event.preventDefault();
            var data = $("#formCliente").serialize();
            $.post("dados_cliente.php",data, function () {
                alert("Dados enviados com sucesso!");
            });
        });
        //  MASCARA DE SENHA
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
