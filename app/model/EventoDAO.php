<?php
require_once ("../classes/Evento.php");
require_once ("conexao.php");

class EventoDAO{
    private $tabela = "evento";

    //Estamos passando como parâmetro uma variável do tipo Evento, ou seja, o metodo irá receber um valor que seja um objeto do tipo Evento
    public function inserir(Evento $evento){
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
     $sql = "SELECT * FROM {$this->tabela}";
     $preparacao = Conexao::getConexao()->prepare($sql);
     
     $preparacao->execute();
     
     if($preparacao->rowCount() > 0){
        return $preparacao->fetchALL(PDO::FETCH_ASSOC); // O método fecthALL() retorna todos os registros do banco de dados e o valor PDO::FECTH_ASSOC, faz associação dos nosmes dos campos da tabela com os indices do vetor.  
     }
     else{
        return false ;
     }
    }

    public function atualizar(){

    }
    public function deletar(){

    }
}