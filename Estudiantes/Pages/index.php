<?php

//requerimos el modelo usuario para implementar el metodo de validar sesion
require_once("../../Usuarios/Modelo/Usuarios.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

//requqerimos el modelo de estudiantes
require_once("../Modelo/Estudiantes.php");
$Modelo = new Estudiantes();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
</head>

<body>

<?php include("../../cabecera.php"); ?>

<div class="container mt-3">

    <h1><i class="far fa-user"></i> Estudiantes</h1>
    <a href="add.php" class="btn btn-secondary btn-rounded">Registrar Estudiante</a><br><br>

    <table class="table align-middle">
        <tr>
            <th class="fw-bold">Id</th>
            <th class="fw-bold">Nombre</th>
            <th class="fw-bold">Apellidos</th>
            <th class="fw-bold">Documento</th>
            <th class="fw-bold">Correo</th>
            <th class="fw-bold">Materia</th>
            <th class="fw-bold">Docente</th>
            <th class="fw-bold">Promedio</th>
            <th class="fw-bold">Fecha de Registro</th>
            <th class="fw-bold">Acciones</th>
        </tr>

        <?php
        $Estudiantes = $Modelo->get();
        if ($Estudiantes != null) {
            foreach ($Estudiantes as $Estudiante) {
        ?>

                <tr>
                    <td><?php echo $Estudiante['ID_ESTUDIANTE'] ?></td>
                    <td><?php echo $Estudiante['NOMBRE'] ?></td>
                    <td><?php echo $Estudiante['APELLIDO'] ?></td>
                    <td><?php echo $Estudiante['DOCUMENTO'] ?></td>
                    <td><?php echo $Estudiante['CORREO'] ?></td>
                    <td><?php echo $Estudiante['MATERIA'] ?></td>
                    <td><?php echo $Estudiante['DOCENTE']. ' '.$Estudiante['APELLIDO_DOCENTE'] ?></td>
                    <td><?php echo $Estudiante['PROMEDIO'] ?></td>
                    <td><?php echo $Estudiante['FECHA_REGISTRO'] ?></td>
                    <td>
                        <a href="edit.php?Id=<?php echo $Estudiante['ID_ESTUDIANTE'] ?>" class="btn btn-primary btn-sm px-3">Editar</a>
                        <a href="delete.php?Id=<?php echo $Estudiante['ID_ESTUDIANTE'] ?>" class="btn btn-danger btn-sm px-3">Eliminar</a>
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