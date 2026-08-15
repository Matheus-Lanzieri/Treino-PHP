<?php
    $idade = $_POST['txtidade'];
    if ($idade < 10){
        echo "Desculpe, apenas alunos com 10 anos ou mais podem participar da festa";
    } else {
        echo "Bem vindo a festa!!";
}
    echo "<br>Programa encerrado...";
?>