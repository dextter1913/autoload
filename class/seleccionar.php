<?php
require_once 'autoload.php';
class seleccionar
{
    public function query()
    {
        $query = "SELECT * FROM persona";
        $conexion = new conexion();
        $consulta = mysqli_query($conexion->EstablecerConexion(),$query);
        return $consulta;
    }
}
