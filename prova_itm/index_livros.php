<?php
include "objeto_livro.php";

session_start();






?>
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <style>
        body{
            background-image: url("imagens/biblioteca.jpeg");
            background-size: 100%;
        }
        #formLivro{
            text-align: center;
            color: #19ade8;
        }
        .botao{
            color: #0f0f0f;
        }
        #cadastroLivro{
            color: #19ade8;
        }
    </style>
    <script type="text/javascript" src="../js/jquery-3.1.0.js" ></script>
</head>
<body>

<form method="post" id="formLivro" class="container">
    <fieldset><legend id="cadastroLivro">Cadastro de Livros</legend>

        <label for="autor">Autor:</label>
            <input type="text" class="form-control" id="autor" name="autor"><br/><br/>

        <label for="titulo">Titulo:</label>
            <input type="text" class="form-control" id="titulo" name="titulo"><br/><br/>

        <label for="numeroDaObra">Numero da obra:</label>
            <input type="text" class="form-control" id="numeroDaObra" name="numeroDaObra"><br/><br/>

        <label for="assunto">Assunto:</label><br/>
            <textarea id="assunto" rows="5" cols="40" maxlength="300" name="assunto"></textarea><br/><br/>

        <input type="submit" id="botCadastro" class="botao btn btn-success" value="Cadastrar"><br/><br/>

        <a href="index.php"><input type="button" class="botao btn btn-primary btn-sm" value="voltar"></a>

    </fieldset>
    
    <div id="result"></div>
</form>


<script src="../js/jquery.mask.js" type="text/javascript"></script>
<script type="text/javascript">

    $(function () {

     $("#formLivro").submit(function (event) {
            event.preventDefault();
         var data = $("#formLivro").serialize();
         $.post("dados_livros.php",data, function (result) {
              $("#result").html(result);
         });         
     });   

        
        
    })

</script>
</body>
</html>

