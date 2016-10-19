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



// salvar o cliente no banco
// retornar o id cadastrado
// $objCliente->setId(ID DO BANCO);

/*

//  CONTATOS
$arrContatos = array();
$arrContatos['Telefone'] = isset($_POST['Telefone'])? $_POST['Telefone']:'';
$arrContatos['Email']    = isset($_POST['Email'])? $_POST['Email']:'';

foreach ($arrContatos as $tipoContato => $array){
    foreach ($array as $key => $valor){
        $objContato = new Contato($objCliente->getId(),$tipoContato, $valor, '');
        // chamar o insert no banco
    }
}

*/



mysqli_close($conexaoDB);


