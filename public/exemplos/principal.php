<?php
include("heranca1.php");
$v1 = new Veiculo("Fiat","Argo");
$v1->ligar();
echo "<br>";
$v1->desligar();
echo "<br>";
$v1->estaLigado();
echo "<hr>";

$c1 = new Carro("Chevrolet","ônix");
$c1->ligar();
echo "<br>";
$c1->ligarParaBrisa();
echo "<br>";

$m1 = new Moto("Honda","CG-titan");
$m1->ligarPiscaAlerta();