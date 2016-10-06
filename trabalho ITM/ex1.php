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
    <br/>
    Resultado Final:
    <input type="text" id="resultadoFinal">
    <br/>
    <input type="button" id="calcular" value="calcula">
    </fieldset>
</form>


<script type="text/javascript">

    $(function () {
                    // float
        $("#n2").keyup(function () {
            var numero = $("#n1").val();
            if (numero){
                var n2 = $(this).val();
                var total1 = Number(n2) + Number(numero);   // TIRANDO PONTO DOS NUMEROS
               total1 = parseFloat(total1).toFixed(2);      //  COLOCANDO PONTO NO MEIO DOS NUMEROS
                $("#total1").val(total1);                   // ISSO É NESCESSARIO PARA FAZER SOMA EM JAVASCRIPT
            }else{
                alert("preenche esses campos caralho");
            }
        });
                    // int
        $("#n4").keyup(function () {
            var numero = $("#n3").val();
            if (numero){
                var total2 = Number($(this).val()) - Number(numero);
                $("#total2").val(total2);
            }else{
                alert("preenche ai caramba");
            }
        });

        $("#calcular").click(function () {
            var tot1 = $("#total1").val();
            var tot2 = $("#total2").val();
            $.ajax({
               type:"GET",
               url:"indexEX1.php",
               data:"total1="+tot1+"&total2="+tot2,
                success: function (data) {              // NUNCA ESQUECER DE COLOCAR COLOCAR DE ONDE VEM A RESPOSTA NO FUNCTION
                    $("#resultadoFinal").val(data);
                }
            });
        });
    })


</script>

</body>
</html>

