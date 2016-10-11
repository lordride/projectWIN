<?php

if(count($_POST)){

}

?>
<!DOCTYPE>
<htmL>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <script type="text/javascript" src="../js/jquery-3.1.0.js" ></script>
</head>

<body>

<form method="POST" action="/trabalho%20ITM/ajax/index.php">
    <fieldset><legend>Cadastro Cliente</legend>

        Nome:<br/><input type="text" name="nome" id="nomeCliente" placeholder="Nome">
        
        <input type="button" id="validaNome" value="Validar"><br/><br/>
        
        CPF:<br/><input type="text" name="cpf" id="numCpf" placeholder="000.000.000-00" style="float: left" required>
        
        <input type="button" value="Validar" id="botaoValidar"><br/>
        
        <br/>Data de Nascimento<br/><input type="date" name="dataNascimento" id="dataNasc"><br/>
        
        <br/><input type="submit" value="Cadastrar" name="cadastro" id="botaoCadastro"><br/>
        
        <div style="float:left" class="info"> </div>

    </fieldset>
</form>

<script type="text/javascript">
    function escrever(valor) {
        $(".info").html(valor);
    }
  $(function(){
      $("#botaoValidar").click(function(){
          var doc = $("#numCpf").val();
          $.ajax({
                    type: 'GET',
                    url: 'ajax/index.php',
                    data: 'doc='+doc,
                success: function (result) {
                    if (result === 'error'){
                        alert('Ops! Caralho este cpf ja existente porra!!!');
                    }
                }
          });
      });

      $("#validaNome").click(function () {

          var nom = $("#nomeCliente").val();
          $.ajax({
                    type: 'GET',
                    url: 'ajax/index.php',
                    data: 'nom='+nom,
              beforeSend: function () {
                   escrever('hakunamatata');
              },
              success: function (retorno) {
                  if (retorno === 'error'){
                      alert('Porra tu ja esta cadastrado caralho??');
                  }
              }
          });
      });
  })
</script>


</body>
</htmL>