<?php

include "objeto_cliente.php";



session_start();


if (isset($_POST['documento']) && isset($_POST['senha'])) {

    $login = $_POST['documento'];
    $senha = $_POST['senha'];


}





$resultado = mysqli_query("SELECT ID,DOCUMENTO,SENHA FROM CLIENTE WHERE DOCUMENTO = '$login' AND SENHA = '$senha'");


if (mysqli_num_rows ($resultado) > 0){

    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;

    print_r($_SESSION);
}










