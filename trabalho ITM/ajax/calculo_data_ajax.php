<?php

if(isset($_GET['dataNasc'])){

    $d = isset($_GET['dataNasc'])? $_GET['dataNasc']:'';

    $ano = date("Y",strtotime($d));
    
    $anoAtual = date("Y");
    
    echo "Sua idade é: ".($anoAtual - $ano)."<br/>";
    
}
