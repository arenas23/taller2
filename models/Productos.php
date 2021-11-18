<?php
    class Producto{
        public $id;
        public $nombre;
        public $marca;
        public $precio;
        public $foto;
        public $descripcion;

        public function __construct($nombreFormulario,$marcaFormulario,$precioFormulario,$fotoFormulario,$descripcionFormulario){
            $this->nombre =$nombreFormulario;
            $this->marca = $marcaFormulario;
            $this->precio =$precioFormulario;
            $this->foto = $fotoFormulario;
            $this->descripcion = $descripcionFormulario;
        }

        public function registrar(){ 
            $consultaSQL =" INSERT INTO producto (nombre, marca, precio, foto, descripcion)
            VALUES  ('$this->nombre','$this->marca','$this->precio','$this->foto','$this->descripcion')";
             
            return $consultaSQL;
        } 

        public function buscar (){
            $consultaSQL = "SELECT * FROM producto";
            return $consultaSQL;
        }

        public function editar($id){
            $consultaSQL= "UPDATE producto SET precio='$this->precio' WHERE id='$id'";
            return $consultaSQL;
        }

        public function eliminar($id){
            $consultaSQL = "DELETE FROM producto WHERE id='$id'";
            return $consultaSQL;
        }
    }

?>