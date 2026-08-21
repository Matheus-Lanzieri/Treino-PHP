<?php
$cardapio = [
    "Bebidas" =>["Agua", "Suco", "Cerveja"],
    "Comidas" =>["Hamburguer", "Pizza"],
];

foreach ($cardapio as $categoria => $itens) {
    echo "<h3>$categoria</h3>";
    echo "<ul>";
        foreach ($itens as $item){
            echo "<li>$item</li>";
        }
    echo "</ul>";
}
?>