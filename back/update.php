<?php
require_once '../class/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <center>
        <h1>Update</h1>
    </center>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-4"></div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <form action="update.php?id=<?= $_GET['id']; ?>" method="post" class="form-control">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                    <label for="apellido">apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control"><br />
                    <input type="submit" value="Modificar" name="btnmodificar" class="btn btn-outline-success">
                </form>
                <?php
                $id = $_GET['id'];
                if (isset($_POST['btnmodificar'])) {
                    $modificar = new modificar($id, $_POST['nombre'], $_POST['apellido']);
                    $modificar->modificar();
                    header('Location:../');
                }
                ?>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4"></div>
        </div>
    </div>
</body>

</html>