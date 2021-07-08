<?php
require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Materias.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSessionAdministrator();

$ModeloMaterias = new Materias();
$Materias = $ModeloMaterias->get();

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

    <div class="container mt-3">

        <h1>Materias</h1>
        <a href="add.php" class="btn btn-secondary btn-rounded">Registrar Materia</a><br><br>

        <table class="table align-middle">
            <tr>
                <th class="fw-bold">Id</th>
                <th class="fw-bold">Materia</th>
                <th class="fw-bold">Acciones</th>
            </tr>
            <?php
            if ($Materias != null) {
                foreach ($Materias as $Materia) {

            ?>
                    <tr>
                        <td><?php echo $Materia['ID_MATERIA'] ?></td>
                        <td><?php echo $Materia['MATERIA'] ?></td>
                        <td>
                            <a href="edit.php?Id=<?php echo $Materia['ID_MATERIA'] ?>" class="btn btn-primary btn-sm px-3">Editar</a>
                            <a href="delete.php?Id=<?php echo $Materia['ID_MATERIA'] ?>" class="btn btn-danger btn-sm px-3">Eliminar</a>
                        </td>
                    </tr>
            <?php

                }
            }
            ?>
        </table>

        <!-- MDB -->
        <script type="text/javascript" src="../../assets/js/mdb.min.js"></script>

</body>

</html>