<?php

$arrTemp = array(0 => "Carolzinha");
$arrTemp[] = "Maria";
$arrTemp[] = "João";
$arrTemp[] = "Edir";
$arrTemp[] = "Rodrigo";
$arrTemp[] = "Larissa";


$arrClientes = array();
foreach ($arrTemp as $key => $value){

    $rand = md5(uniqid(rand(), true)); //chave

    $arrClientes[$rand] = $value;
}


asort($arrClientes);
echo "<pre>";
print_r($arrClientes);



ksort($arrClientes);
echo "<pre>";
print_r($arrClientes);


$arrClientes[md5(uniqid(rand(), true))] = "ITM";
echo "<pre>";
print_r($arrClientes);


$k = array_search("Carolzinha", $arrClientes);
if ($k != false){
   unset($arrClientes[$k]);
}


print_r($arrClientes);



if(in_array("Maria", $arrClientes)){
    echo "Ops, Maria existe.";
}else{
    echo "Cade a Maria?";
    print_r($arrClientes);
}




die("FIM MARIA");





die('FIM');


