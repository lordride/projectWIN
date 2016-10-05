<?php


if(count($_POST)){



}



?>
<!DOCTYPE>
<htmL>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <script type="text/javascript" src="../js/jquery-3.1.0.js" ></script>
</head>

<body>


<form method="post" action="">
    <fieldset><legend>Cadastro Cliente</legend>
        Nome:<br/><input type="text" name="nome" id="nomeCliente" placeholder="Nome"><br/><br/>
        CPF:<br/><input type="text" name="cpf" id="numCpf" placeholder="000.000.000-00" style="float: left">
        <div style="float:left" class="infoCPF"> </div>
        <input type="button" value="Validar" id="botaoValidar" onclick=""><br/>
        <br/>Data de Nascimento<br/><input type="date" name="dataNascimento" id="dataNasc"><br/>

        <br/><input type="submit" value="Cadastrar" name="cadastro" id="botaoCadastro">
    </fieldset>
</form>

<script type="text/javascript">
  $(function(){

      $("#botaoValidar").click(function(){

          var doc = $("#numCpf").val();

          // validacao via ajax =>  ajax/index.php

          // resposta da validacao coloca na tela

          //$(".infoCPF").html();

      });
  })



</script>



</body>
</htmL>