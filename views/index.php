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
    <link rel="stylesheet" href="../estilos.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/script.js"></script>

    <title>Document</title>
</head>
<body>
    
    <!--<div class="modal_wrap">
        <div class="mensaje_modal">
            <h3>errores</h3>
            <p>escriba un nombre</p>
            <p>escriba la marca</p>
            <p>escriba el precio</p>
            <p>escriba la url de la foto</p>
            <p>escriba la descripcion</p>
            <span id="btnClose">cerrar</span>
        </div>-->
    </div>
    <section class="form_wrap">
        <section class="contact_info">
            <section class="contact_title">
                <h2>registro <br>de producto</h2>
            </section>
            <section class="info_items">
                <p>info.contact@hotmail.com</p>
                <p>3013417411</p>
            </section>
        </section>
        <form action="../controllers/controladorAgregarProducto.php" method="post" class="form_contact">
            <h2>info del producto </h2>
            <div class="user_info">
                <label for="names">Nombre</label>
                <input name="nombre" type="text" id="nombre" required>

                <label for="names">marca</label>
                <input name="marca" type="text" id="marca" required>

                <label for="names">precio</label>
                <input name="precio" type="number" id="precio" required>

                <label for="names">foto</label>
                <input name="foto" type="text" id="foto" required>

                <label for="names">descripcion</label>
                <textarea name="descripcion" id="descripcion" required></textarea>
                 <a class="text-success" href="listaProductos.php"><i class="fas fa-th-list"></i></a>

                <input name="boton" type="submit" value="enviar informacion" id="btnsend">

               

            </div>
        </form>     

    </section>

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
                            <h5 class="text-white"><?php echo($_SESSION["mensaje"]) ?></h5>
                        </div>
                    </div>
                </div>
            </div>
            <?php unset($_SESSION ["mensaje"]) ?>
        <?php endif ?>
    </section>


    <script type="module" src="../js/lanzarModal.js"></script>
    <script src="https://kit.fontawesome.com/28bb0a93bc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>