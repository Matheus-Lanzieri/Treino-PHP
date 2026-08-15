<?php
    $idade = $_GET['txtidade'];
    if ($idade < 10){
        echo "Desculpe, apenas alunos com 10 anos ou mais podem participar da excursão";
    } else {
        echo "Sua inscrisão foi realizada com sucesso";
}
    echo "<br>Programa encerrado...";
?>