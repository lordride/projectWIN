<?php

/*
$pessoa1 = array("Ana","Paulo","Lucas");

$pessoa2 = array("Julia","Maria","Joao");

$pessoaMaster = array_merge($pessoa1,$pessoa2);

asort($pessoaMaster);

echo "<pre>";
print_r($pessoaMaster);


ksort($pessoaMaster);

print_r($pessoaMaster);

//-------------------------------------------------------------------

if (is_array($pessoaMaster)){
    echo "yes is array";
}else{
    echo "<br/>"."no is array";
}

//-------------------------------------------------------------------

if (array_key_exists("1",$pessoa2)){
    echo "<br/>"."yes $pessoa2[1]  exists";
}else{
    echo "<br/>"." dont exists"."<br/>"."<br/>";
}
//-------------------------------------------------------------------

*/

/*

$arrPneus = array();
$arrPneus["PNEUS"] = array("Pireli","Rinaldi","Levorin");

$arrCores = array();
$arrCores["CORES"] = array("Azul","Laranja");


$arrMarcas = array();
$arrMarcas["HONDA"] = array("Civic","City");
$arrMarcas["GM"] = array("Prisma","Corsa","UP");
$arrMarcas["PEUGEOT"] = array("206","207","307","308","408");

$arrCor307 = array_merge($arrCores["CORES"],array("Vermelho","Preto"));
$arrMarcas["PEUGEOT"]["307"] = array("CORES"=>$arrCor307, "PNEUS"=>array_merge($arrPneus["PNEUS"], array("FireStone")));


//unset($arrMarcas["PEUGEOT"]["307"]["CORES"]);

$idCorPreto = array_search("Vermelho",$arrMarcas["PEUGEOT"]["307"]["CORES"]);

//unset($arrMarcas["PEUGEOT"]["307"]["CORES"][$idCorPreto]);

echo "<pre>";
//print_r($arrMarcas);

/*
foreach ($arrMarcas as $marcas => $carros){
    foreach ($carros as $modelo =>$cor){

        echo "<br/>";
        print_r("Marca: ".$marcas."  ----  Modelo: ".$modelo."  ----  Cor: $cor");
    }
}

*/


//-------------------------------------------------------------------

$arrCoresA = ["azul","javali"=>"laranja","preto"];

$arrCoresB = ["verde","branco","javali"=>"roxo"];

echo $keyJavali = array_key_exists("javali",$arrCoresA);



echo "<pre>";
print_r(array_merge_recursive($arrCoresA,$arrCoresB));


//-------------------------------------------------------------------

//-------------------------------------------------------------------