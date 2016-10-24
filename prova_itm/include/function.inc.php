<?php


function validaLogin($login,$senha){
    
    include_once "conexao_db.php";


/* @var $conexaoDB msqli */

    return mysqli_query($conexaoDB,"SELECT DOCUMENTO,SENHA FROM CLIENTE WHERE DOCUMENTO = '{$login}' AND SENHA = '{$senha}'");
}

