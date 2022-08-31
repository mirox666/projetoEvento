    <?php
    include_once ("../includes/cabecalho.php");
    require_once ("../model/EventoDAO.php");
    
    if(!isset($_SESSION['id_evento'])){
        $_SESSION['id_evento'] = $_POST['id_evento'];
    }
    $meuEventoDAO = new EventoDAO();
    $resultado = $meuEventoDAO->consultarUnico($_SESSION["id_evento"]);
    $elemento = $resultado[0];
   
    if(isset($_SESSION["atualizar"])){
        if($_SESSION["atualizar"]["status"]){
            echo "
                <div class='alert alert-success alert-dismissible fade show'> 
                    <h4 class='text-center'>{$_SESSION['atualizar']['msg']}</h4>
                    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                </div>
            ";
        }
        else{
            echo "
                <div class='alert alert-danger alert-dismissible fade show'> 
                    <h4 class='text-center'>{$_SESSION['atualizar']['msg']}</h4>
                    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                </div>
            ";
        }
    }
    unset($_SESSION["atualizar"]); // Destruindo a variável de sessão
    ?>
    <main class="container-fluid mt-5">

        <h1 class="text-center fw-bold">atualizar Evento</h1>
        <hr>
        <form action="../controller/eventoController.php" method="POST" class="mt-5" enctype="multipart/form-data">
            <section class="container col-md-6">
                <div class="row mb-3">
                    <label for="nomeEvento" class="form-label fw-bold">
                        Nome <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="nomeEvento" id="nomeEvento" class="form-control" value="<?=$elemento['nome_evento']?>">
                </div>

                <div class="row mb-3">
                    <label for="dataEvento" class="form-label fw-bold">
                        Data do evento <span class="text-danger">*</span>
                    </label>
                    <input type="date" name="dataEvento" id="dataEvento" class="form-control" value="<?=$elemento['data_evento']?>>
                </div>

                <div class="row mb-3">
                    <label for="banner" class="form-label fw-bold">
                        Banner do evento <span class="text-danger">*</span>
                    </label>
                    <input type="file" name="banner" id="banner" class="form-control" accept="image/*">
                </div>
                    <input type="hidden" name="atualizar" value="<?=$elemento?>">
                <button type="submit" class="btn btn-primary my-3 col-12">Atualizar</button>
            </section>
        </form>
       
    </main>





    <?php
    include_once ("../includes/rodape.php");
    ?>