<?php
include_once ("../includes/cabecalho.php");
require_once ("../model/EventoDAO.php");

$evento = new EventoDAO();
?>

<main class="container-fluid mt-5">
    <section class="d-flex justify-content-between">
        <h3 class="fw-bold">Gerenciamento de Eventos</h3>
        <a href="CadastroView.php" class="btn btn-primary">Criar Evento</a>
    </section>
    <hr>

    <section class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-4">
        <section>
            <div class="card">
                <img src="" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-center">Titulo do evento</h5>
                    <p class="card-text">O evento ocorrerá na data: 31/08/2022</p>
                    <div>
                    
                        <div class="card-footer">
                            <form action="" method="post" class="d-flex justify-content-around">
                                <button type="submit" class="btn btn-info col-5 d-flex justify-content-center align-items-center">
                                    Editar <span class="material-symbols-outlined ms-2">edit</span>
                                </button>
                                <button type="submit" class="btn btn-danger col-5 d-flex justify-content-center align-items-center">
                                    Excluir <span class="material-symbols-outlined ms-2">delete</span>
                                </button>
                            </form>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
    </section>
</main>

<?php
include_once ("../includes/rodape.php");
?>