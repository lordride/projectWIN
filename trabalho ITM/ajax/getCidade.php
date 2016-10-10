<?php



include('../cidades.php');


$sigla = $_POST['estadoR'];

$return = "";

if( !in_array($sigla, $arrCidades)   ){
    foreach($arrCidades[$sigla] as $key => $nomeCidade){
        $return .= "<option value='{$nomeCidade}'> {$nomeCidade} </option>";
    }    
}else{
    $return = '<option value=""> Cidades não encontradas!</option>';
}
echo $return;