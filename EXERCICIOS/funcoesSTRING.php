<?php

//                  FUNCOES DE STRING
//----------------------------------------------------------------------------
$produto = "leite";
$preco = 4.5;

printf("o %s custa %.2f", $produto,$preco);

//Permite exibir uma string com itens formatados.
//---------------------------------------------------------------------------
echo "<br>";

$v[0] = 4;
$v[1] = 6;
$v[2] = 8;

print_r($v);                    // MAIS USADO PARA DEBUG
//
echo "<br>";
//
$v2 = array(3,8,9,4,7,);

print_r($v2);

//Exibe coleções, objetos e variáveis compostas (vetores e matrizes) de maneira organizada.
//-------------------------------------------------------------------------------
echo "<br>";

$txt = "hakuna matata raaxinchabaa ahuuuuhuhuhuuu";
$res = wordwrap($txt , 20,"<br>\n",false); // ou true
echo $res;

//Cria quebras de linha ou divisões em uma string em um tamanho especificado.
//-----------------------------------------------------------------------------------
echo "<br>";

$txt = "Curso em video";
$tamanho = strlen($txt);

echo "<br>";
//-----------------------------------------------------------------------------------

$nome = "   José da Silva   ";

echo (strlen($nome));

echo "<br>";

$novo = trim($nome);
echo ($novo);
echo "<br>";
echo (strlen($novo));

//      strlen()
//Permite verificar o tamanho de uma string, contando seus caracteres (inclusive espaços em branco).
//
//      trim()
//Elimina espaços em branco antes e depois de uma string.
//
//      ltrim()
//Elimina espaços no início de uma string.
//
//      rtrim()
//Elimina espaços em branco no final de uma string.
//------------------------------------------------------------------------------------------

echo "<br>";

$frase = "eu vou ficar bom em programcao";
$cont = str_word_count($frase,0); // possui 3 funcoes 0, 1 e 2
echo "$cont";

//      str_word_count()
// 0 Conta quantas palavras uma string possui.
// 1 se quiser criar um vetor
// 2 vetor mantendo o posicionamento de cada palavra dentro da string
//--------------------------------------------------------------------------------------
echo "<br>";

$site = "curso em video";
$vetor = explode(" ",$site);
print_r($vetor);

echo "<br>";

//      explode()
//Quebra uma string e coloca os itens em um vetor.
//------------------------------------------------------------------------------------------

$veto[0] = "curso";
$veto[1] = "em";
$veto[2] = "video";

$texto = implode("#",$veto);
print ($texto);

//      implode()
//Transforma um vetor inteiro em uma string.
//-----------------------------------------------------------------------------
echo "<br>";

$n = "maria";
$vet = str_split($n);
print_r($vet);
//      str_split()
//Coloca cada letra de uma string em uma posição de um vetor.
//----------------------------------------------------------------------------------
echo "<br>";

$letra = chr(67);
echo "o codigo 67 tem a letra $letra";

//      chr()
//Retorna um caractere de acordo com seu código ASCII passado como parâmetro.
//----------------------------------------------------------------------------------
echo "<br>";

$let = "C";
$cod = ord($let);
print ("a letra $let tem codigo $cod");

//      ord()
//Retorna o código ASCII de um caractere passado como parâmetro.
//----------------------------------------------------------------------------------
echo "<br>";

$name = "EDIR MARTINS";
$name2 = strtolower($name);
echo "seu nome e $name2";

//      strtolower ()
//Transforma todos os caracteres de uma string para letras minúsculas.
//-----------------------------------------------------------------------------------
echo "<br>";

$nam = "edir martins";
echo "seu nome e " . strtoupper($nam);
//      strtoupper ()
//Transforma todos os caracteres de uma string para letras maiúsculas.
//---------------------------------------------------------------------------------
echo "<br>";

$n = "raaxinchabaa";
echo ucfirst($n);
//      ucfirst ()
//Transforma a primeira letra de uma string para maiúscula. As demais serão mantidas da mesma maneira.
//-----------------------------------------------------------------------------------
echo "<br>";

$no = "raaxinchabaa hakuna matata";
echo ucwords($no);
//      ucwords ()
//Consegue identificar as palavras isoladas de uma string e coloca as primeiras letras de cada palavra para maiúsculas. As demais serão mantidas da mesma maneira.
//---------------------------------------------------------------------------------------
echo "<br>";

$da = "raaxinchabaa";
print (strrev($da));
//      strrev ()
//Inverte uma string, atribuindo desde a última até a primeira, no sentido contrário.
//---------------------------------------------------------------------------------------
echo "<br>";

$d = "eu sou foda";
$pos = strpos($d,"foda");       //se mudar a caixa nao vai funcionar
echo "a string esta na posicao $pos";
//      strpos ()
//Indica a posição de ocorrência de uma substring dentro de uma string.
//---------------------------------------------------------------------------------------
echo "<br>";

$r = "eu sou Foda";
$ipos = stripos($r,"foda");
echo "a string esta na posicao $ipos";
//      stripos ()
//Mesma função desempenhada por strpos, apenas ignorando a caixa (maiúsculas e minúsculas não fazem diferença).
//---------------------------------------------------------------------------------------
echo "<br>";

$rs = "e muita loucura, muita loucura mesmo";
$contado = substr_count($rs,"loucura");
print ("loucura encontrado $contado vezes");
//      substr_count ()
//Conta a quantidade de ocorrências de uma determinada substring dentro de uma string.
//---------------------------------------------------------------------------------------
echo "<br>";

$op = "blues do satanas";
$sub = substr($op,0,5);
echo $sub;
//      substr ()
//Extrai uma substring de dentro de uma string.
//---------------------------------------------------------------------------------------
echo "<br>";

$k ="martins";
$new = str_pad($k,30," ",STR_PAD_RIGHT);
//$z = str_pad($new,30," ",STR_PAD_LEFT);
//$w = str_pad($new,30," ",STR_PAD_BOTH);
print ("edir $new muito doido");
//      str_pad ()
//Faz uma string caber em outra string maior, preenchendo os espaços vazios com caracteres.
//-----------------------------------------------------------------------------------------
echo "<br>";

$text = str_repeat("Php",5);
print ("o texto gerado foi $text ");
//      str_repeat ()
//Preenche uma string através da repetição de uma outra.
//-----------------------------------------------------------------------------------------
echo "<br>";

$f = "gosto de comer pizza";                     //se mudar a caixa tambem da pau
$nf = str_replace("pizza","hamburger",$f);      //posso usar str_ireplace --- i de ignore
print ($nf);
//      str_replace ()
//Substitui uma substring dentro de uma string por outra.
//-----------------------------------------------------------------------------------------

