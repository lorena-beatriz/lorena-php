https://expert-space-meme-p7g445w6g4j4377w4-80.app.github.dev/desafio2.php

<?php
    $quantidade = 2;
    $precoProduto = 4500.50;
    $descontoFixo = 250.00;

    $subTotal = $quantidade * $precoProduto;
    $total = $subTotal - $descontoFixo;

    echo "--- RESUMO DA COMPRA --- <br>";
    echo "Subtotal: R$ " . $subTotal . "<br>";
    echo "Total a pagar: R$ " . $total;
    
?>