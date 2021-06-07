<?php 
require_once 'persona.php';
require_once 'conexion.php';
class insertar  extends persona
{
    public function __construct($id,$nombre,$apellido) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function insertarpersona(){
        $id = $this->id;
        $nombre = $this->nombre;
        $apellido = $this->apellido;
        $conexion = new conexion();
        $conexion->EstablecerConexion()->query("INSERT INTO persona(id, nombre, apellido)   VALUES('$id','$nombre','$apellido')");
    }


}

?>