<?php 
require_once 'autoload.php';
class  eliminar extends persona
{

    public function __construct($id) {
        $this->id = $id;

    }

    public function eliminarpersona(){
        $conexion = new conexion();
        $id = $this->id;
        echo "se elimino correctamnete $id";
        $conexion->EstablecerConexion()->query("DELETE FROM persona WHERE id = '$id'");
        echo "se elimino correctamnete ";
    }
}

?>