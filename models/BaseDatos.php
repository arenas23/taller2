<?php
    class BaseDatos{

        public $usuario = "root";
        public $passwordBD = "";
        public $servidorBD = "mysql:host=localhost;"; //exige ;
        public $nombreBD = "dbname=marana";

        public function __construct(){

        }

        public function conectarConBD(){

            //manejo de errores 
            try {
                $datosGeneralesBD=$this->servidorBD.$this->nombreBD;
                $conexion = new PDO($datosGeneralesBD,$this->usuario,$this->passwordBD);
                //echo("exito conectandonos a la bd");
                return $conexion;
            } catch (PDOException $error) {
                die("tenemos un problema".$error->getMessage());
            }
        }

        public function insertarRegistro($consultaSQL){
            try {
                $conexion=$this->conectarConBD();
                $operacion=$conexion->prepare($consultaSQL);
                $resultado=$operacion->execute();

                return $resultado;

            } catch (PDOException $error) {
                die("tenemos un problema".$error->getMessage());
            }
        }

        public function buscarRegistros($consultaSQL){
            try {
             
                $conexion=$this->conectarConBD();
            
                $operacion=$conexion->prepare($consultaSQL);

             
                $operacion->setFetchMode(PDO::FETCH_ASSOC);
                
                $operacion->execute();

                return $operacion->fetchAll();

            } catch (PDOException $error) {
                die("tenemos un problema".$error->getMessage());
            }
        }
    }
?>