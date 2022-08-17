<?php
session_start();

$nomeProduto = "sapatênis";
$preco = 89.99; 
$quantidade = 5;

echo "{$_SESSION['nomeCliente']} decidiu comprar o produto {$nomeProduto} e custou R$ {$preco} e vai levar {$quantidade} unidades pagando com o cartão de {$_SESSION['preferenciaCliente']['pagamento']}";
    
    // Criando variáveis de sessão
$_SESSION['nomeProduto'] = $nomeProduto;
$_SESSION['valorPreco'] = $preco;
$_SESSION['valorQuantidade'] = $quantidade;

