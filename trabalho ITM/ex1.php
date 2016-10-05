<?php

if(count($_POST)){

}

?>
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="../css/style.css">


    <script type="text/javascript" src="../js/jquery-3.1.0.js" ></script>

</head>
<body>
<form action="indexEX1.php" method="post">
    <fieldset><legend>Somando</legend>
    Numero 1:<input type="text" id="n1"><br/>
    Numero 2:<input type="text" id="n2"><br/>
    Total:<br/><input type="text" id="total1"><br/>
    </fieldset>
    <fieldset><legend>Subtraindo</legend>
    Numero 3:<input type="number" id="n3"><br/>
    Numero 4:<input type="number" id="n4"><br/>
    Total:<br/><input type="number" id="total2"><br/>
    </fieldset>
</form>


<script type="text/javascript">

    $(function () {

        $("#n2").keyup(function () {

            var numero = $("#n1").val();

            if (numero){

                var n2 = $(this).val();
                var total = Number(n2) + Number(numero);

               total = parseFloat(total).toFixed(2);
                $("#total1").val(total);
            }else{
                alert("preenche esses campos caralho");
            }
        });

        $("#n4").keyup(function () {

            var numero = $("#n3").val();

            if (numero){
                var total2 = Number($(this).val()) - Number(numero);
                $("#total2").val(total2);
            }else{
                alert("preenche ai caramba");
            }
            $.ajax({
                type:"GET",
                url:"indexEX1.php",
                data: "total2"+tota2,
                success: function () {
                    
                }

            });
        });               
    })


</script>

</body>
</html>

