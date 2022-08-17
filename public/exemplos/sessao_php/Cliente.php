<?php
session_start();

$nome = "Joséfino";
$idade = 25;
$preferencias = [
    "tipo" => "Calçados",
    "preco" => "Mais barato ",
    "pagamento" => "Cartão de crédito"
];

    //Criando variáveis de sessão
    $_SESSION['nomeCliente'] = $nome;
    $_SESSION['idadeCliente'] = $idade;
    $_SESSION['preferenciaCliente'] = $preferencias;
echo "{$nome} tem {$idade} anos e gosta de pagar os {$_SESSION['nomeProduto']} com a forma de pagamento {$preferencias['pagamento']}";