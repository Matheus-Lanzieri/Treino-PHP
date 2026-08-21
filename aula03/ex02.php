<?php
    $num = $_POST['txtnum'];
    $num1 = 0;
    $num2 = 1;
    for($i = 0; $i <= $num; $i++) {
        $fib = $num1 + $num2;
        echo ", $fib";
        $num1 = $num2;
        $num2 = $fib;

    }
?>