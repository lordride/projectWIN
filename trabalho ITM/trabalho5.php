<?php

?>

<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <script type="text/javascript" src="../js/jquery-3.1.0.js" ></script>
</head>
<body>
<form action="" method="get">
    <fieldset>
        <br/>
        <br/>
        <label for="botao">Clique para adicionar os campos</label>
        <input type="submit" id="botao" value="+">
        <div id="campos">

        </div>
        
    </fieldset>
</form>

<script src="../js/jquery.mask.js" type="text/javascript"></script>
<script type="text/javascript">
    function mascara() {
        $(".campo").mask("(99)-9999-99999");
    }
    
    $(function () {
        var cont = 0;

        $("#botao").click(function (event) {
            event.preventDefault();

            if (cont += 1){
                $("#campos").append('<div id="camp"><br/>Telefone '+cont+':<input type="text" id="campo-'+cont+'" class="campo" name="nome['+cont+']">' +
                    '<input type="submit" id="campo-'+cont+'" class="botaoCamp" value="-"><br/><br/></div>');
                mascara();
            }
        });

        $("#campos").one("click","camp", function () {
                event.preventDefault();
            $(this).parent('div').remove();           
        });

        

    })
    
</script>

</body>
</html>

