<?php 
    if (!isset($_SESSION)) {
        session_start();
    }

    include '../models/BaseDatos.php';
    include '../models/Productos.php';

    if (isset($_POST["boton"])) {
        $nombre= $_POST["nombreProducto"];
        $marca = $_POST["marca"];
        $precio = $_POST["precio"];
        $foto = $_POST["foto"];
        $descripcion = $_POST["descripcion"];
    
        $producto = new Producto($nombre,$marca,$precio,$foto,$descripcion);

        $baseDatos= new BaseDatos();
        $resultado = $baseDatos->insertarRegistro($producto->registrar());

        if ($resultado) {
            $_SESSION["mensaje"]="Exito en el registro";

            header("Location:../views/index.php");
        }else {
            echo("tenemos problemas para agregar el producto");
        }
    }else {
        echo("no deberias estar aqui");
    }

?>