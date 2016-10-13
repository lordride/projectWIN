<?php


echo '<pre>';
var_dump($_POST);

if (isset($_FILES['foto'])){

    $img = $_FILES['foto'];

    $imgTamanho = $img['size'];
    $imgNome = $img['name'];

    $arrImage =  getimagesize($img['tmp_name']);
    $imgLargura = $arrImage['0'];
    $imgAltura  = $arrImage['1'];
    $imgTipo = $arrImage['2'];
    $imgMime = $arrImage['mime'];


    $arrTiposPermitidos = array("image/jpeg", "image/gif", "image/bmp");


    if(in_array($imgMime, $arrTiposPermitidos)){
        $pasta = "imagens/";

       if(move_uploaded_file($img['tmp_name'], $pasta.$imgNome)){
           echo 'imagem enviada com sucesso';
       }
    }else{
        echo "imagem nao permitida";
    }


    // Verificar se o Mime de imagem

    // tudo ok, faz upload

}
