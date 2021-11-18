<?php 
   
    if (!isset($_SESSION)) {
        session_start();
    }

    include '../models/BaseDatos.php';
    include '../models/Productos.php';

     $id=$_GET["id"];
    echo("eliminando el producto: ".$id);

    $producto = new Producto(null,null,null,null,null);
    $baseDatos= new BaseDatos();
    $resultado = $baseDatos->insertarRegistro($producto->eliminar($id));
    echo($producto->eliminar($id));

    if($resultado){
        $_SESSION["mensaje"]="EXITO ELIMINANDO";

        header("Location:../views/index.php");
        
    }else{
        echo ("tenemos problemas para registrarlo");
    }

?>