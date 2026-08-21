<?php
    $paises = array("Brasil", "Chile", "Guatemala", "Mexico", "Moçambique", "Uruguai");

    $tamanho = count($paises);
    for ($i=0; $i < $tamanho; $i++) {
        echo "<p>$i - $paises [$i] </p>";
    }

    echo "<hr>";

    for ($i=0; $i < $tamanho; $i+=2) {
        echo "<p>$i -" 
    }