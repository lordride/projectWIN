<?php

?>

<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <script type="text/javascript" src="../js/jquery-3.1.0.js" ></script>


</head>
<body><br/><br/>


cpf<input type="text" id="cpf"><br/><br/>
cnpj<input type="text" id="cnpj"><br/><br/>
money<input type="text" id="money"><br/><br/>
data<input type="text" id="data"><br/><br/>
telefone<input type="text" id="telefone"><br/><br/>
senha<input type="password" id="senha"><br/><br/>



<script src="../js/jquery.mask.js" type="text/javascript"></script>
<script type="text/javascript">

    $(function () {

        $("#cpf").mask("999.999.999-99");
        $("#cnpj").mask("999.999.999.999-99");
        $("#money").mask("R$ 999,999,999,99");
        $("#data").mask("99/99/9999",{placeholder:"dia/mes/ano"});
        $("#telefone").mask("(99)-9999-99999");

    })

</script>
</body>
</html>

