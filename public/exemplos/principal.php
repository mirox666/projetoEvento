<?php
include("eranca1.php");
$v1 = new Veiculo("Fiat","Argo");
$v1->ligar();
echo "<br>";
$v1->desligar();
echo "<br>";
$v1->estaLigado();
echo "<hr>";

$c1 = new Carro("Chevrolet","ônix");
$c1->ligar();
$c1->ligarParaBrisa();