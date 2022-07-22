<?php
class Funcionario{
public $nome;
public $codigo;
public $salario;

function __construct($nome,$codigo,$salario){
    $this->nome=  $nome;
    $this->codigo= $codigo;
    $this->salario= $salario;
}
function relatorio(){  
    echo "O nome do funcionario é {$this->nome} e seu código é {$this->codigo} e seu salário é {$this->salario}";

}

}
$funcionario1 = new Funcionario("Matheus",156, 3.500);
$funcionario1-> relatorio();
echo "<br>";
echo "o nome do funcionario é {$funcionario1->nome}, o código é {$funcionario1->codigo}, e o salário dele é {$funcionario1->salario}.";
