<?php


include("../clientes/lista_clientes.php");

    $result = ['resposta' => 'success'];
    

    if (isset($_GET['doc'])) {
        $docCpf = $_GET['doc'];

        foreach ($clientes as $obj){
            if ($obj->getCpf() == $docCpf){
                $result['resposta'] = "error";
                break;
            }
        }
    }

    if (isset($_GET['nom'])){
        $docNom = $_GET['nom'];
        
        foreach ($clientes as $obj){
            if ($obj->getNome() == $docNom){
                $result['resposta'] = "error";
                break;
            }
        }
    }

