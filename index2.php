<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<form method="get" action="condicoes.php" enctype="multipart/form-data">

      Numero: <input type="number" placeholder="num" name="numero">
       <fieldset><legend>Operacao</legend>
           <input type="radio" name="oper" value="1" checked>
           <label for="dobro">Dobro</label>
           <input type="radio" name="oper" value="2">
           <label for="cubo">Cubo</label>
           <input type="radio" name="oper" value="3">
           <label for="raiz">Raiz Quadrada</label>
       </fieldset>

       <input type="submit" value="calcular"><br>
</form>

<form method="get" action="condicoes2.php">

           <br>DIA DA SEMANA: <input type="number" name="dia" min="2" max="8" >

           <input type="submit" value="avaliar">
      <!-- "<br><a href='pagina' class='botao'>voltar</a>"  -->
</form>

</body>
</html>