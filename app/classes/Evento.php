<?php
class Evento{
    // Atributos 
    public $nomeEvento;
    public $dataEvento;

    //Metodos:"Comportamentos"
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

    function recebeDados($campos){
        $this->nomeEvento = $campos["nomeEvento"];
        $this->dataEvento =$campos["dataEvento"];
        echo "O {$this->nomeEvento} vai acontercer na data {$this->dataEvento}";
    }
}
//Instanciando um objeto
$meuEvento = new Evento();
print_r($meuEvento);
echo "<hr>";
$meuEvento-> recebeDados($_POST);