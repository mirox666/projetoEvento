<?php

$nomeEvento = $_POST["nomeEvento"];
$dataEvento = $_POST["dataEvento"];

echo "O {$nomeEvento} vai acontecer na data {$dataEvento}";

echo "<hr>";
// Mostrando vetores de forma completa
//print_r($_POST);
var_dump($_POST);

function validaData($data){ 

    $dataEvento = new DateTime($data);// Está classe precisa de uma data no padrão americano para funcionar
    echo $dataEvento->format("d/m/Y");// Mostrando a data no padrão Brasileiro
}

validaData($dataEvento);
