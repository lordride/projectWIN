<?php



?>
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <script type="text/javascript" src="../js/jquery-3.1.0.js" ></script>
</head>
<body>

<form class="container" action="" method="post">
    <fieldset><legend>Cadastro do Cliente</legend>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><label for="nome" id="nomeLabel"></label><br/><br/>

        <label for="master">Tipo:</label>
        <label for="master">Master</label>
        <input type="radio" id="master" name="tipo" value="master">
        <label for="cliente">Cliente</label>
        <input type="radio" id="cliente" name="tipo" value="cliente"><br/><br/>

        <label for="documento">CPF:</label>
        <input type="text" id="documento" name="cpf"><br/><br/>

        <label for="addFone">Clique para adicionar um telefone:</label>
        <input type="submit" id="addFone" name="addFone" value="+">
        <div id="campoFone"></div><br/>

        <label for="addEmail">Clique para adicionar um email:</label>
        <input type="submit" id="addEmail" name="addEmail" value="+"><br/><br/>
        <div id="campoEmail"></div>

        <input type="submit" id="cadastrar" value="Cadastrar">

    </fieldset>
</form>

<script src="../js/jquery.mask.js" type="text/javascript"></script>
<script type="text/javascript">
    function mascara() {
        $(".campoFone").mask("(99)-9999-99999");
    }

    $(function () {
        var cont = 0;

        $("#nome").keyup(function () {
            var nome = $("#nome").val().split(" " ,3);
            if (nome.length < 2){
                $("#nomeLabel").html("Nome completo obrigatório!");
                $("#nome").css("background-color","#FF6347");
            }else{
                $("#nomeLabel").html('');
                $("#nome").css("background-color","#00FF7F");
            }
        });

        $("#addFone").click(function (event) {
            event.preventDefault();
            if (cont += 1){
                $("#campoFone").append('<div id="camp"><br/>Telefone '+cont+':<input type="text" id="campo-'+cont+'" class="campoFone" name="nome['+cont+']">' +
                    '<input type="submit" id="campo-'+cont+'" class="botaoCamp" value="-"><br/><br/></div>');
                mascara();
            }
        });

        $("#addEmail").click(function (event) {
            event.preventDefault();
            if (cont += 1){
                $("#campoEmail").append('<div id="camp"><br/>Email '+cont+':<input type="text" id="campo-'+cont+'" name="nome['+cont+']">' +
                    '<input type="submit" id="campo-'+cont+'" class="botaoCamp" value="-"><br/><br/></div>');
            }
        });
        
    })
        
</script>
</body>
</html>
<?php


?>
