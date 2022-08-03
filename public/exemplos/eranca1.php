<?php
class Veiculo{
    private $marca;  
    private $modelo;    
    private $ligado = false;//pra onformar se o veículo está ligado     
    protected $nomeClasse;// Somente as classes filhas poderão acessar esse atributo diretamente.
    function __construct($marca,$modelo){
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->nomeClasse = get_class($this);//Pegando o nome da Classe  
        
    }
    public function ligar(){
        $this->ligado = true;
        echo "O {$this->nomeClasse} modelo {$this->modelo} e marca {$this->marca} está ligado";
    }
    public function desligar(){
        $this->ligado = false;
        echo " O {$this->nomeClasse} modelo {$this->modelo} e marca {$this->marca} está desligado";
    }
    public function estaLigado(){
        echo ($this->ligado) ? "está ligado " : "Está desligado"; 
        /*
        if(!$this->ligado){
            echo "O veiculo está Ligado";
        }
        else{
            echo " O veiculo está Desligado";
        }*/
    }
    /*
    function __get($atributo)
    {
        return $this->$atributo;
    
    }
    function __set($atributo,$valor)
    {
    $this-> $atributo = $valor;
    }*/
}
//A classe Carro está herdando todas as informações da classe Veiculo
class Carro extends Veiculo{
    public function ligarParaBrisa(){
        echo " {$this->nomeClasse} ligou o para-brisa <br>";
    }
}


//$marca1= new Veiculo("chevollet", "hibrido");

//$marca1->marca = "Chevrollet";
//$marca1->modelo= "Hibrido";
//echo "A marca do veiculo é {$marca1->marca} e seu modelo é {$marca1->modelo}";

