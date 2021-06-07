<?php 
require_once 'autoload.php';
    class modificar  extends persona
    {
        public function __construct($id,$nombre, $apellido) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        
        }
        public function modificar(){
            $nombre = $this->nombre;
            $apellido = $this->apellido;
            $id = $this->id;
            $conexion = new conexion();
            echo "$id, $nombre, $apellido";
            $conexion->EstablecerConexion()->query("UPDATE persona SET nombre = '$nombre', apellido = '$apellido' WHERE id = '$id'");
            echo "se modifico correctamente";
        }
    }
    
?>