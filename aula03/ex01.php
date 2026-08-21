<?php
    $num = $_POST['txtnum'];

    for ($i=1; $i <= 10 ; $i++) {
        $resultado = $num * $i;

        echo"<p>$num X $i = $resultado</p>";

    }
?>