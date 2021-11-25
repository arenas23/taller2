<?php
    include("../controllers/controladorListaProductos.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estiloCarta.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bodyColor">
    <header>
        <nav class="navbar navbar-light bg-dark ">
            <div class="container-fluid">
                <a class="navbar-brand text-success" href="index.php"><i class="fas fa-plus-square"></i> Registrar producto</a>
            </div>
        </nav>
    </header>
    
        <div class="container">
            <div class="row">
                <?php foreach ($productos as $producto): ?>
                    <div class="col-4">
                        <div class="wrap">
                            <div class="tarjeta-wrap">
                                <div class="tarjeta">
                                    <div class="adelante">
                                        <p class="titulo"><?php echo($producto["nombre"])?></p>
                                        <img class="img" src="<?php echo($producto["foto"])?>">
                                    </div>
                                    <div class="atras">
                                        <div class="card tamanoCarta ">
                                            <img src="<?php echo($producto["foto"])?>" class="card-img-top imgTop" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo($producto["nombre"])?></h5>
                                                <p class="card-text"><?php echo($producto["descripcion"])?></p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><i class="fas fa-money-check-alt"></i><?php echo("   ".$producto["precio"])?></li>
                                                <li class="list-group-item"><i class="fas fa-tags"></i><?php echo ("    ".$producto["marca"])?></li>
                                                
                                            </ul>
                                            <div class="card-body">
                                                <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#confirmacion<?= $producto["id"] ?>" ><i class="fas fa-trash-alt"></i></a>
                                                <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editar<?= $producto["id"] ?>"><i class="fas fa-edit"></i></a>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>

                         <section>
                            <div class="modal fade" id="confirmacion<?= $producto["id"] ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-success text-white">
                                            <h5 class="modal-title">La maranita</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>¿Estás seguro de eliminar este producto?</p>
                                            <p><?= $producto["id"] ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <a href="../controllers/controladorEliminarProducto.php?id=<?= $producto["id"]?>" class="btn btn-danger">Aceptar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section>
                            <div class="modal fade" id="editar<?= $producto["id"] ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-success text-white">
                                            <h5 class="modal-title">La maranita</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="<?= $producto["foto"] ?>" alt="foto" class="img-fluid w-100">
                                                </div>
                                                <div class="col-9">
                                                    <form action="../controllers/controladorEditarProducto.php?id=<?=$producto["id"]?>" method="POST">
                                                        <div class="mb-3">
                                                            <label  class="form-label">precio</label>
                                                            <input name="precio" type="number" class="form-control" value="<?= $producto["precio"] ?>">
                                                        </div>
                                                        <button type="submit" class="btn btn-success" name="botonEditar">Editar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                    </div>
                <?php endforeach ?>
            </div>
        </div>


    <script type="module" src="../js/lanzarmModale.js"></script>
    <script src="https://kit.fontawesome.com/28bb0a93bc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>