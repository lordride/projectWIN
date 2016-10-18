<?php

include "objeto_cliente.php";

include "objeto_livro.php";

//  cliente
$nome = isset($_POST['nome'])? $_POST['nome']:'';
$tipo = isset($_POST['tipo'])? $_POST['tipo']:'';
$documento = isset($_POST['doc'])? $_POST['doc']:'';
$senha = isset($_POST['senha'])? $_POST['senha']:'';

$objCliente = new Cliente($nome,$tipo,$documento,$senha);

// salvar o cliente no banco
// retornar o id cadastrado
// $objCliente->setId(ID DO BANCO);


//  contato
$arrContatos = array();
$arrContatos['Telefone'] = isset($_POST['Telefone'])? $_POST['Telefone']:'';
$arrContatos['Email']    = isset($_POST['Email'])? $_POST['Email']:'';

foreach ($arrContatos as $tipoContato => $array){
    foreach ($array as $key => $valor){
        $objContato = new Contato($objCliente->getId(),$tipoContato, $valor, '');
        // chamar o insert no banco
    }
}


//  livro

$numDaObra = isset($_POST[''])? $_POST['']:'';
$titulo = isset($_POST[''])? $_POST['']:'';
$assunto = isset($_POST[''])? $_POST['']:'';
$status = isset($_POST[''])? $_POST['']:'';
$clienteId = isset($_POST[''])? $_POST['']:'';
$autorId = isset($_POST[''])? $_POST['']:'';

$objLivro = new Livro($numDaObra,$titulo,$assunto,$status,$clienteId,$autorId);
    
    
    
    
