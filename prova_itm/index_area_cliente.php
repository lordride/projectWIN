<?php
include_once "session_start.php";

if(isset($_SESSION['CLIENTE_LOGADO'])){

    print_r($_SESSION['CLIENTE_LOGADO']);
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
