<?php

session_start();


$arrResposta = array('status'=> 0);


if (isset($_POST)){
    
    $login = $_POST['documento'];
    $senha = $_POST['senha'];

    $objCliente = validaLogin($login, $senha);
    
    

        if ($objCliente != false) {

            if (isset ($_SESSION['CLIENTE_LOGADO'])) {
            unset($_SESSION['CLIENTE_LOGADO']);
            }

        $_SESSION['CLIENTE_LOGADO'] = serialize($objCliente);
        } else {
        return "retonar algo para redirecionar ao login";    
        }
    
}

echo json_encode($arrResposta);

















