<?php

session_start();


$arrResposta = array('status'=> 0);


if (isset($_POST)){

   include "include/function.inc.php";

    $login = $_POST['documento'];
    $senha = $_POST['senha'];

    $objCliente = validaLogin($login, $senha);

        if ($objCliente != false) {

            $arrResposta['status'] = 1;

            if (isset ($_SESSION['CLIENTE_LOGADO'])) {
              unset($_SESSION['CLIENTE_LOGADO']);
            }

            $_SESSION['CLIENTE_LOGADO'] = serialize($objCliente);

        }
}

echo json_encode($arrResposta);

















