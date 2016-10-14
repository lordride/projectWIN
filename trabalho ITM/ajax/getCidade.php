<?php



include('../cidades.php');


$sigla = $_POST['estadoR'];

$return = array("cidades", "mensagem");

if( !in_array($sigla, $arrCidades)   ){

    $str = "";

    foreach($arrCidades[$sigla] as $key => $nomeCidade){
        $str .= "<option value='{$nomeCidade}'> {$nomeCidade} </option>";
    }

    $return['cidades'] = $str;
}else{
    $return['cidades'] = '<option value=""> Cidades não encontradas!</option>';
}

echo json_encode($return);
