<?php 
require_once 'conexion.php';
class insertar  
{
    private $id;
    private $nombre;
    private $apellido;

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
        echo "se registro datos correctamente";
    }


}

?>