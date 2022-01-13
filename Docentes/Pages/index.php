<?php
require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Docentes.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSessionAdministrator();

$ModeloDocentes = new Docentes();
$Docentes = $ModeloDocentes->get();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docentes</title>
</head>

<body>

    <?php include("../../cabecera.php"); ?>

    <div class="container mt-3">

        <h1><i class="fas fa-chalkboard-teacher"></i> Docentes</h1>
        <a href="add.php" class="btn btn-secondary btn-rounded">Registrar Docente</a><br><br>

        <table class="table align-middle">
            <tr>
                <th class="fw-bold">Id</th>
                <th class="fw-bold">Nombre</th>
                <th class="fw-bold">Apellidos</th>
                <th class="fw-bold">Usuario</th>
                <th class="fw-bold">Perfil</th>
                <th class="fw-bold">Estado</th>
                <th class="fw-bold">Acciones</th>
            </tr>
            <tr>
                <?php
                if ($Docentes != null) {
                    foreach ($Docentes as $Docente) {
                ?>
            <tr>
                <td><?php echo $Docente['ID_USUARIO'] ?></td>
                <td><?php echo $Docente['NOMBRE'] ?></td>
                <td><?php echo $Docente['APELLIDO'] ?></td>
                <td><?php echo $Docente['USUARIO'] ?></td>
                <td><?php echo $Docente['PERFIL'] ?></td>
                <td><?php echo $Docente['ESTADO'] ?></td>
                <td>
                    <a href="edit.php?Id=<?php echo $Docente['ID_USUARIO'] ?>" class="btn btn-primary btn-sm px-3">Editar</a>
                    <a href="delete.php?Id=<?php echo $Docente['ID_USUARIO'] ?>" class="btn btn-danger btn-sm px-3">Eliminar</a>
                </td>
            </tr>
    <?php
                    }
                }
    ?>
    </tr>
        </table>

        <!-- MDB -->
        <script type="text/javascript" src="../../assets/js/mdb.min.js"></script>

</body>

</html>