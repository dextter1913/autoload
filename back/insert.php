<?php 
    require_once '../class/insertar.php';
    $insertar = new insertar($_POST['id'],$_POST['nombre'],$_POST['apellido']);
    $insertar->insertarpersona();
?>