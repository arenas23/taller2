<?php
    
     if(!isset($_SESSION)){
        session_start();
    }

    //1. Incluir el modelo de la BD
    //   Incluir el modelo Empleado
    include("../models/BaseDatos.php");
    include("../models/Productos.php");

    if(isset($_POST["botonEditar"])){

        //Recibo los datos a editar
        $precio=$_POST["precio"];

        //Recibo el id
        $id=$_GET["id"];
       

       
        $producto=new Producto(null,null,$precio,null,null);

    
       $baseDatos=new BaseDatos();
       $resultado=$baseDatos->insertarRegistro($producto->editar($id));

       
       if($resultado){

           $_SESSION['mensaje']="exito editando registro";

           header("Location:../views/index.php");
           

       }else{
           echo("upss... Tenemos problemas para registrar datos");
           
       }
        
        

    }else{
        echo("no deberias estar aquí");
    }

?>