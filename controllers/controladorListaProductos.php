<?php
    include '../models/BaseDatos.php';
    include '../models/Productos.php';

    $productos = new Producto(null,null,null,null,null);
    $baseDatos= new BaseDatos();
    $productos = $baseDatos->buscarRegistros($productos->buscar());

    
?>