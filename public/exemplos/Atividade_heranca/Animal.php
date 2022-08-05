<?php
    class Animal{
        protected $nome;
        protected $ambiente;
        protected $tipo;
        protected $produto;

        function __construct($nome,$ambiente,$tipo,$produto){
            $this->nome=$nome;
            $this->ambiente=$ambiente;
            $this->tipo=$tipo;
            $this->produto= $produto;
        }

        public function viver(){
            echo "O {$this->nome} vive no {$this->ambiente} e é {$this->tipo}. ";
        }
        public function product(){
            echo " produto que gera é {$this->produto}";
        }

    }
    class Cachorro extends Animal{
        private $caninos;

        function __construct($nome,$ambiente,$tipo,$caninos,$produto){
            $this->caninos = $caninos;
            parent::__construct($nome,$ambiente,$tipo,$produto);
        }
        
        public function morder(){
            echo "O {$this->nome} vive na {$this->ambiente} é {$this->tipo} e tem {$this->caninos} e faço {$this->produto}";
        }
        
    }

    class Peixe extends Animal{
        private $nadadeiras;

        function __construct($nome,$ambiente,$tipo,$nadadeiras,$produto){
            $this->nadadeiras= $nadadeiras;
            parent::__construct($nome,$ambiente,$tipo,$produto);
        }
        public function nadar(){
            echo "O {$this->nome} vive na {$this->ambiente} é {$this->tipo} e possui {$this->nadadeiras} e Gero {$this->produto}";
        }
    }
