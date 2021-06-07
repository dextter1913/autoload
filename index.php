<?php
require_once 'class/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practicando autoload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>
    <center>
        <h1>autoload</h1>
    </center>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <form action="back/insert.php" method="post" class="form-control">
                    <label for="id">ID:</label>
                    <input type="text" name="id" id="id" class="form-control">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control"><br />
                    <input type="submit" value="Insertar" class="btn btn-outline-danger btn-sm">
                </form>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 table-responsive border">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>
                                <center>seleccionar</center>
                            </th>
                            <th>
                                <center>id</center>
                            </th>
                            <th>
                                <center>nombre</center>
                            </th>
                            <th>
                                <center>apellido</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $seleccionar = new seleccionar();
                        $consulta = $seleccionar->query();

                        while ($row = mysqli_fetch_array($consulta)) :

                        ?>
                            <tr>
                                <td>
                                    <form action="back/delete.php" method="get">
                                    <center><input type="checkbox" name="id[]" value="<?= $row['id']; ?>" class="form-check-input"></center>
                                </td>
                                <td>
                                    <center><?= $row['id']; ?></center>
                                </td>
                                <td>
                                    <center><?= $row['nombre']; ?></center>
                                </td>
                                <td>
                                    <center><?= $row['apellido']; ?></center>
                                </td>
                            </tr>
                        <?php
                        endwhile;
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <input type="submit" value="Eliminar" class="btn btn-danger btn-lg">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>