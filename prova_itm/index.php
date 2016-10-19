<?php
include "conexao_db.php";


?>
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <style>
        body{
            background-image: url('imagens/livros.jpg');
            background-size: 100%;
        }
        #formIndex{
            color: #19ade8;
            text-align: center;
        }
        h1{
            color: #19ade8;
            text-align: center;
        }
        .botao{
            color: #0f0f0f;
        }
    </style>
    <script type="text/javascript" src="../js/jquery-3.1.0.js" ></script>
</head>
<body class="container">

<header style="text-align: center" id="cabecalho"><h1>Biblioteca Cuca Fresca</h1><br/><br/>

</header>
    <form action="" method="post" id="formIndex" class="container">

        <label for="cliente">Área do Cliente</label><br/>
        <a href="index_area_cliente.php"><input type="button" id="cliente" value="Entrar" class="botao btn btn-primary"></a><br/><br/>
        <div id="login">

            <label for="cpfLogin">CPF:</label>
            <input type="text" id="cpfLogin" class="form-control"><br/>
            <label for="senha">Senha:</label>
            <input type="text" id="senha" class="form-control"><br/><br/>
        </div>

        <label for="livro">Biblioteca</label><br/>
            <a href="index_livros.php"><input type="button" id="livro" value="Entrar" class="botao btn btn-primary"></a><br/><br/>

        <label>Se você não é cadastrado clique no botão abaixo.</label><br/>
            <a href="index_cliente.php"><input type="button" class="botao btn btn-primary" value="Cadastrar"></a><br/><br/>

</form>

<footer id="rodape">


</footer>

<script src="../js/jquery.mask.js" type="text/javascript"></script>
<script type="text/javascript">

    $(function () {
        
        
    })
    
</script>
</body>
</html>

<?php
mysqli_close($link);

?>