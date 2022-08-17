<?php
session_start();

echo "{$_SESSION['nomeCliente']} Comprou um {$_SESSION['nomeProduto']} que custou R$ {$_SESSION['valorPreco']} reais. Ele levou {$_SESSION['valorQuantidade']} unidades, sendo que a preferência pelo preço de pagamento é o {$_SESSION['preferenciaCliente']['preco']}";