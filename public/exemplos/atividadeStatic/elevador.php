<?php
    class Elevador{
        private static $andarAtual;
        private static $totalAndares;
        private static $capacidade;
        private static $numeroPessoas;

        public static function entrar($capacidade,$numeroPessoas){
            self::$capacidade = $capacidade;
            self::$numeroPessoas = $numeroPessoas;

            echo "Olá, a capacidade do Elevador é ".self::$capacidade. " Entrou ".self::$numeroPessoas. " pessoas";
        }

        public static function inicializar($andarAtual,$totalAndares,$numeroPessoas,$capacidade){
            self::$andarAtual = $andarAtual;
            self::$totalAndares = $totalAndares;
            self::$numeroPessoas = $numeroPessoas;
            self::$capacidade = $capacidade;

            echo "O andar que o elevador se encontra é ".self::$andarAtual." o número de andares do predio é ".self::$totalAndares." .A quantidade de pessoas que se encontram no elevador é ".self::$numeroPessoas." e a capacidade é ".self::$capacidade." ." ;
        } 

        public static function setSubir($valor){
            self::$andarAtual = $valor;
            
        }

        public static function getSubir(){
            return self::$andarAtual; 

          
           
        }
        
        public static function setDescer($andarDescida){
            self::$andarAtual = $andarDescida;
        }

        public static function getDescer(){
            return self::$andarAtual;

            echo "O elevador está descendo para o andar ".self::$andarAtual;
        }

       
    }