<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operador = $_POST['opera'];
    
    if ($operador == 'soma'){
        $resultado = $num1 + $num2;
        $opel = '+';
    } elseif ($operador == 'subtr'){
        $resultado = $num1 - $num2;
        $opel = '-';
    }elseif ($operador == 'multi'){
        $resultado = $num1 * $num2;
        $opel = 'x';
    } elseif($operador == 'divi'){
        $resultado = $num1 / $num2;
        $opel = '/';
    }

    echo "<p>Resultado da operação de $num1 $opel $num2 = $resultado</p>";

?>