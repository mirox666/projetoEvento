<?php
session_start();//Iremos iniciar uma sessão no php
require_once ("../classes/Evento.php");
require_once ("../model/EventoDAO.php");

$meuEvento = new Evento();
$meuEventoDAO = new EventoDAO();


if(isset($_POST['cadastrar'])){
    $_SESSION["mensagem"] = $meuEvento->inicio($_POST,$_FILES['banner']);
        if($_SESSION["mensagem"]["status"]){
            $meuEventoDAO->inserir($meuEvento);
}
header("Location:../view/CadastroView.php");// redirecionando o usuário para a página CadastroView.php
die();
}

if(isset($_POST['atualizar'])){
    $_SESSION['atualizar'] = $meuEvento->inicio($_POST,$_FILES['banner']);
    if($_SESSION['atualizar']['status']){
        $meuEventoDAO->atualizar($meuEvento, $_POST['atualizar']); // estamos passando com parâmetro um objeto Evento e o id do evento que está atribuido $_POST['atualizar']
    }
    header("Location:../view/AtualizarEventoView.php");
    die();
}

/*echo"<pre>";
print_r($meuEventoDAO->consultar());
echo"</pre>";*/
