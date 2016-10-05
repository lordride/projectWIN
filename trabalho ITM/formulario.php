<!DOCTYPE>
<htmL>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <script type="text/javascript" src="/js/jquery-3.1.0.js" >

    </script>
</head>

<body>
<form action="funcoesFORMULARIO.php" method="post" >
    <fieldset><legend>Cadastro Cliente</legend>
             <label for="nomeCliente">Nome:</label>
        <br/><input type="text" name="nome" id="nomeCliente" placeholder="Nome"><br/>
             <label for="numCpf">CPF:</label>
        <br/><input type="text" name="cpf" id="numCpf" placeholder="000.000.000-00" required>
             <input type="button" value="Validar" id="botaoValidar" onclick=""><br/>
             <label for="dataNasc">Data de Nascimento:</label>
        <br/><input type="date" name="dataNascimento" id="dataNasc"><br/>
        <br/><input type="submit" value="Cadastrar" name="cadastro" id="botaoCadastro">
    </fieldset>
</form>


</body>

</htmL>