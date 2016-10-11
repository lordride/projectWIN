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

<ul>
    <li> Edir A </li>
    <li> Edir B </li>
    <li> Edir C </li>
</ul>


<form style="text-align: center" name="form" id="form" action="trabalho2P.php" method="post" enctype="multipart/form-data">
    <fieldset><br/><br/>
       
       <input type="text" name="texto" id="world" class="cerveja">
        
        <label for="foto">FOTO:</label>
        <input type="file" id="foto" name="foto" value="">
        <input type="submit" id="enviar" value="Send">         <!-- em JQUERY  fazer o botao mudar de nome quando ja tiver selecionado a foto -->
    </fieldset>
</form>                                                                     <!-- no final mostrar todos os dados da foto -->

<script type="text/javascript">

    $(function () {

        //$("#world").addClass('heineken');
        //$("#world").addClass('skol');
        //$("#world").removeClass('heineken');

        //$("#world").keydown(function () {

        //    alert("soltou a tecla");
        //});


        //$("#form").find("label").css("color", "red");


        $( "li" ).each(function( index ) {

            if(index === 1){
               // $(this).html("FELIZ");
            }

            console.log(  $( this ).html() );
        });


    })




</script>

</body>
</html>
