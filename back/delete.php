<?php
require_once '../class/autoload.php';
foreach ($_GET['id'] as $id) {
    $eliminar = new eliminar($id);
    $eliminar->eliminarpersona();
    header('Location:../');
}
