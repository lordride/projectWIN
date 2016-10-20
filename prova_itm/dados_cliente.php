<?php
include "conexao_db.php";
include "objeto_cliente.php";

//  CLIENTES


    $nome = isset($_POST['nome'])? $_POST['nome']:'';
    $tipo = isset($_POST['tipo'])? $_POST['tipo']:'';
    $documento = isset($_POST['doc'])? $_POST['doc']:'';
    $senha = isset($_POST['senha'])? $_POST['senha']:'';

    $objCliente = new Cliente($nome,$tipo,$documento,$senha);
    if (!$objCliente->save($conexaoDB)){
        echo "nao foi possivel salvar no banco";
    }

if ($objCliente->getId()){

//  CONTATOS

    if (isset($_POST['Telefone'])){
    
        $arrTelefone = $_POST['Telefone'];
    
        foreach ($arrTelefone as $key => $value){
            
            $objContato = new Contato('Telefone',$value,'',$objCliente->getId());
    
            if (!$objContato->save($conexaoDB)){
                echo "nao foi possivel salvar no banco";
            }
        }
    }
    
    if (isset($_POST['Email'])){
    
        $arrEmail = $_POST['Email'];
    
        foreach ($arrEmail as $key => $value){
    
            $objContato = new Contato('Email',$value,'',$objCliente->getId());
    
            if (!$objContato->save($conexaoDB)){
                echo "nao foi possivel salvar no banco";
            }
        }
    }

}




mysqli_close($conexaoDB);


