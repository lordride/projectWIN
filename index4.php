<?php
include ("functions.inc.php");

if (isset($_GET['inicio']) && isset($_GET['fim']) && isset($_GET['incremento'])){
    contadorInteligente($_GET['inicio'],$_GET['fim'],$_GET['incremento']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<form method="get" action="index4.php">
    Inicio:<br><input type="number" name="inicio" value="inicio" min="0" required>
    <br/>
    Final:<br><input type="number" name="fim" value="fim" min="0" required>
    <br/>
    Incremento:<br><input type="number" name="incremento" value="incremento" min="1" required>
    <br/>
        <input type="submit" value="enviar">
</form>


</body>
</html>