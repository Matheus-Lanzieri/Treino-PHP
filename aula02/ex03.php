<?php 
    $num = $_GET['txtnum'];
    $por = $_GET['txtpercent'];
    $porcentagem = $num * ($por/100);
    echo "$por% de $num é : $porcentagem";
    
?>