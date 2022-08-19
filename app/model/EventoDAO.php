<?php
require_once ("../classes/Evento.php");
require_once("conexao.php");

class EventoDAO{
    private $tabela = "evento";

    //Estamos passando como parâmetro uma variável do tipo Evento, ou seja, o metodo irá receber um valor que seja um objeto do tipo Evento
    public function inserir($evento){
        $sql = "INSERT INTO {$this->tabela} VALUES(NULL,:nome,:dataEvento,:foto)";
        $preparacao = Conexao::getConexao()->prepare($sql);

        $preparacao->bindValue(":nome",$evento->nomeEvento);
        $preparacao->bindValue(":dataEvento",$evento->dataEvento);
        $preparacao->bindValue(":foto",$evento->banner);

        $preparacao->execute();

        if($preparacao->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }
    }

    public function consultar(){

    }

    public function atualizar(){

    }
    public function deletar(){

    }
}