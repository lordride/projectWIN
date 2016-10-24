<?php

function validaLogin($login,$senha){
    
    include_once "../conexao_db.php";

    // qu7ery

    // se vier resultado, transforma em array
    // responde o array

    return mysqli_query("SELECT ID,DOCUMENTO,SENHA FROM CLIENTE WHERE DOCUMENTO = '{$login}' AND SENHA = '{$senha}'");
}

