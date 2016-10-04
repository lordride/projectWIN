<?php
?>
<!DOCTYPE>
<htmL>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <script type="text/javascript" src="/js/jquery-3.1.0.js" >

    </script>
</head>

<body>
<form method="post" action="funcoesFORMULARIO.php">
    <fieldset><legend>Cadastro Cliente</legend>
        Nome:<br/><input type="text" name="nome" id="nomeCliente" placeholder="Nome"><br/>
        CPF:<br/><input type="text" name="cpf" id="numCpf" placeholder="000.000.000-00">
            <input type="button" value="Validar" id="botaoValidar" onclick=""><br/>
        Data de Nascimento<br/><input type="date" name="dataNascimento" id="dataNasc"><br/>
        <br/><input type="submit" value="Cadastrar" name="cadastro" id="botaoCadastro">
    </fieldset>
</form>
<form method="post" action="funcoesFORMULARIO.php">
    <div style="border: 1px solid; text-align: center;">

        <?php

        include ('funcoesFORMULARIO.php');

            if (isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['dataNascimento'])){
                $resultado = cadastro($_POST['nome'],$_POST['cpf'],$_POST['dataNascimento']);
                echo "$resultado ";
            }else{
                echo "erro!";
            }



        ?>
    </div>
</form>

</body>

</htmL>