<?php

    if(!isset($_SESSION)){
        session_start();
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos.css">
    <title>Document</title>
</head>

<body class="body-bg">
    <header class="d-flex justify-content-center py-3 w-100 bg-dark">
        <h5 class="text-white"> la maranita</h5>
    </header>
    <main>
        <div class="container bg-fondo">

            <form class="row gy-2 gx-3 align-items-center " action="../controllers/controladorAgregarProducto.php"
                method="POST">
                <div class="row ">
                    <div class="col-4 mx-auto p-4">
                        <p class="text-center text-white bg-success">Nombre</p>
                        <input name="nombreProducto" type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="col-4 mx-auto p-4">
                        <div class="">
                            <p class="form-label text-white bg-success text-center">marca</p>
                            <input name="marca" type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 mx-auto p-4">
                        <p class="form-label text-white bg-success text-center">precio</p>
                        <input name="precio" type="number" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="col-4 mx-auto p-4">
                        <p class="form-label text-white bg-success text-center">foto</p>
                        <input name="foto" type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                </div>
                <div class="col-8 mx-auto  p-4">
                    <p class="text-white text-center bg-success ">descripcion</p>
                    <input name="descripcion" type="text" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="row mx-auto p-2 col-5 ">
                    <button name="boton" type="submit" class="btn btn-success">guardar</button>
                </div>
                <div class="col-3">
                     <a   href="listaProductos.php"><img src="https://cdn.icon-icons.com/icons2/159/PNG/256/list_tasks_22372.png" alt=""></a>
                </div>

            </form>

            <div class="row">
                <img src="" alt="">
            </div>

        </div>
    </main>
    <section>
        <?php if(isset($_SESSION["mensaje"])):?>
        <!-- Modal -->
            <div class="modal fade" id="modal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title" id="exampleModalLabel">la Maranita</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body back-fondo">
                            <h5><?php echo($_SESSION["mensaje"]) ?></h5>
                        </div>
                    </div>
                </div>
            </div>
            <?php unset($_SESSION ["mensaje"]) ?>
        <?php endif ?>
    </section>

    <footer>

    </footer>

    <script type="module" src="../js/lanzarModal.js"></script>
    <script src="https://kit.fontawesome.com/28bb0a93bc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>