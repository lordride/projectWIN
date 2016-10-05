<?php
/*
function cadastro($nome = 0, $cpf = 0, $dataNascimento = 0){

    $nomeCliente = $nome;
    $cpfCliente = $cpf;
    $dataNascimentoCliente = $dataNascimento;

    $error = 0;

    if (empty($nomeCliente) OR strstr($nomeCliente,'') == false){
        $error = 1;
    }
    if (strlen($cpfCliente) < 11 || strstr($cpfCliente,'') == false){
        $error = 1;
    }
    if (strlen($dataNascimentoCliente) != 8 || empty($dataNascimentoCliente) == false){
        $error = 1;
    }
    if ($error == 0){
        echo "Cadastro efetuado com sucesso!"."<br/>";

        echo "Nome: $nomeCliente"."<br/>".
            "CPF: $cpfCliente"."<br/>".
            "Data de Nascimento: $dataNascimentoCliente"."<br/>";
    }
    return $nomeCliente;

}


include ('funcoesFORMULARIO.php');

if (isset($_POST['nome']) && isset($_POS['cpf']) && isset($_POS['dataNascimento'])) {
    $resul = cadastro($_POS['nome'], $_POS['cpf'], $_POS['dataNascimento']);
    echo "$resul ";
}


*/




        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $dataNascimento = $_POST['dataNascimento'];

        echo "$nome";
        echo "$cpf";
        echo "$dataNascimento";

