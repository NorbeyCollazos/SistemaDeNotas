<?php
require_once("../../Usuarios/Modelo/Usuarios.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
</head>

<body>

    <?php include("../../cabecera.php"); ?>

    <div class="container mt-3 col-md-6">

        <h2 class="mb-3">Registrar Materia</h2>

        <form action="../Controladores/add.php" method="post">

            <div class="form-outline mb-4">
                <input type="text" name="Materia" id="form6Example1" class="form-control" required />
                <label class="form-label" for="form6Example1">Materia</label>
            </div>

            <input type="submit" value="Registrar Materia" class="btn btn-success btn-rounded mb-4">

        </form>

    </div>

    <!-- MDB -->
    <script type="text/javascript" src="../../assets/js/mdb.min.js"></script>

</body>

</html>