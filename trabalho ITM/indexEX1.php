<?php


if (isset($_GET['total1']) && isset($_GET['total2'])){

    $total1 = (float)$_GET['total1'];
    $total2 = (float)$_GET['total2'];

    echo ($total1 + $total2);

}