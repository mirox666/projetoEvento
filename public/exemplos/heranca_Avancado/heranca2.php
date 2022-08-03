<?php

class Pessoa {
        protected $nome;
        protected $idade;
        protected $nomeclass;
        protected const QUALIDADE = "Pensador";


    function __construct($nome,$idade){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nomeclass = get_class($this);
    }
    public function relatorio(){
        echo "Olá estou na classe {$this->nomeclass}, meu nome é {$this->nome} e tenho {$this->idade} anoes e minha qualidade é ".self::QUALIDADE;// Constanteem PHP são Acessados com Self:: e não com $this
    }    
}
class Aluno extends Pessoa{
    private $matricula;
    protected const QUALIDADE = "Estudioso";

    public function __construct($nome,$idade,$matricula){
           parent::__construct($nome,$idade);// Dessa forma estou indicando que vou reutilizar o construtor da classe Mãe 
           $this->matricula = $matricula; 
    }

    public function relatorio(){
        echo "Estou na classe {$this->nomeclass}, meu nome é {$this->nome} e minha matricula é {$this->matricula} minha qualidade é ".parent::QUALIDADE;
    }
}