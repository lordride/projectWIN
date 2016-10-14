<?php

if (isset($_POST['nome'])){
    $arrNome = $_POST['nome'];

    foreach ($arrNome as $key => $nome){
        echo "Nome $key é $nome"."<br/>";
    }
}


