<?php
class Pessoa{
    public $nome;
    public $idade;
    public $peso;
    public $olhos;
    public $altura;
    function __construct($nome,$idade,$peso,$olhos,$altura){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->olhos = $olhos;
        $this->altura = $altura;
    }



    function falar($texto){
        echo $texto;
        
        
    }
    function olhar($text){
        echo $text;
    }

}

$pessoa1 = new Pessoa("Matheus",23,89,"Azul",1.75);
$pessoa1->falar("Fazendo aquele curso maroto");//Acessando o metodo falar da classe
echo "<hr>";
$pessoa1->olhar("Informações");
echo "<br>";
echo "Meu nome é {$pessoa1->nome} minha idade é {$pessoa1->idade}";
echo "<br>";
echo " e a cor dos meus olhos são {$pessoa1->olhos}, e minha altura é {$pessoa1->altura}";
echo "<br>";

$pessoa2 = new Pessoa("Luan",19,72,"Castanho escuro",1.73);
echo "Olá me chamo {$pessoa2->nome} e meu peso é {$pessoa2->peso}, e minha idade é {$pessoa2->idade}, a cor dos meus olhos são {$pessoa2->olhos} e eu sou baixo com minha altura {$pessoa2->altura}";
