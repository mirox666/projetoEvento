<?php
date_default_timezone_set("America/Sao_Paulo");// auterando o fuso horário do SERVIDOR


$nomeEvento = $_POST["nomeEvento"];
$dataEvento = $_POST["dataEvento"];

echo "O {$nomeEvento} vai acontecer na data {$dataEvento}";

echo "<hr>";
// Mostrando vetores de forma completa
//print_r($_POST);
var_dump($_POST);

function validaData($data){ 

    $dataEvento = new DateTime($data);// Está classe precisa de uma data no padrão americano para funcionar
    $dataAtual = new DateTime("now");// Estamos pegando a data atual 
    echo $dataEvento->format("d/m/Y");// Mostrando a data no padrão Brasileiro
    echo "<br> A data de hoje é: ";
    print_r($dataAtual);

    if($dataEvento > $dataAtual){
        echo "<p>Data do Evento cadastrado com sucesso !!!</p>";
    }
    else{
        echo "<p>A data do evento não pode ser anterior ou igual à data atual</p>";
    }
}
validaData($dataEvento);
