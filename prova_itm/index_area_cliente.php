<?php
include "conexao_db.php";

session_start();

if((!isset ($_SESSION['documento']) == true) and (!isset ($_SESSION['senha']) == true))
{
    unset($_SESSION['documento']);
    unset($_SESSION['senha']);
    header('location:index.php');
}else{
    echo "hello";
}


?>

<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <style>

    </style>
    <script type="text/javascript" src="../js/jquery-3.1.0.js" ></script>
</head>
<body>



<form>






    <a href="index.php"><input type="button" class="botao btn btn-primary btn-sm" value="voltar"></a>

</form>


<script src="../js/jquery.mask.js" type="text/javascript"></script>
<script type="text/javascript">

    $(function () {


    })

</script>
</body>
</html>
