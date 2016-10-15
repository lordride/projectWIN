<?php

include "conexao.inc.php";


echo "oi";


//CRUD

/*
$query = "INSERT INTO CLIENTE (NOME,DOCUMENTO,DATA_NASCIMENTO,EMAIL) VALUES ('Edir','07262435698','1990/05/21','lordride@gmail.com')";

$result = mysqli_query($link,$query);
if (!$result) {
    die('Invalid query: ');
}else{
    echo "success";
}
*/


/*
$query = " UPDATE CLIENTE SET NOME = 'Julia', DOCUMENTO = '123' WHERE ID = 2";

$result = mysqli_query($link,$query);
if (!$result) {
    die('Invalid query: ');
}else{
    echo "success";
}
*/

/*
$query = "SELECT * FROM CLIENTE ";

$result = mysqli_query($link,$query);

echo '<pre>';

while($line = mysqli_fetch_assoc($result)) {
    print_r($line);
}
*/

$query = "DELETE FROM CLIENTE WHERE ID = 3";

$result = mysqli_query($link,$query);















mysqli_close($link);
