<?php
include "conexao_db.php";
include "objeto_cliente.php";

//  CLIENTES

    $nome = isset($_POST['nome'])? $_POST['nome']:'';
    $documento = isset($_POST['doc'])? $_POST['doc']:'';
    $senha = isset($_POST['senha'])? $_POST['senha']:'';
    $tipo = isset($_POST['tipo'])? $_POST['tipo']:'';

    $objCliente = new Cliente($nome,$tipo,$documento,$senha);
    if (!$objCliente->save($conexaoDB)){
        echo "salvo com sucesso";
    }

if ($objCliente->getId()){

//  CONTATOS

    if (isset($_POST['Telefone'])){
    
        $arrTelefone = $_POST['Telefone'];
    
        foreach ($arrTelefone as $key => $value){
            
            $objContato = new Contato('Telefone',$value,'',$objCliente->getId());
    
            if (!$objContato->save($conexaoDB)){
                echo "salvo com sucesso";
            }
        }
    }
    
    if (isset($_POST['Email'])){
    
        $arrEmail = $_POST['Email'];
    
        foreach ($arrEmail as $key => $value){
    
            $objContato = new Contato('Email',$value,'',$objCliente->getId());
    
            if (!$objContato->save($conexaoDB)){
                echo "salvo com sucesso";
            }
        }
    }

}




mysqli_close($conexaoDB);


