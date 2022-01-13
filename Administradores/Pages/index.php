<?php
require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Administradores.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSessionAdministrator();

$ModeloAdministradores = new Administradores();
$Administradores = $ModeloAdministradores->get();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administradores</title>
</head>

<body>

    <?php include("../../cabecera.php"); ?>

    <div class="container mt-3">

        <h1><i class="fas fa-toolbox"></i> Administradores</h1>
        <a href="add.php" class="btn btn-secondary btn-rounded">Registrar Administrador</a><br><br>

        <table class="table align-middle">
            <thead>
                <tr>
                    <th class="fw-bold">Id</th>
                    <th class="fw-bold">Nombre</th>
                    <th class="fw-bold">Apellidos</th>
                    <th class="fw-bold">Usuario</th>
                    <th class="fw-bold">Perfil</th>
                    <th class="fw-bold">Estado</th>
                    <th class="fw-bold">Acciones</th>
                </tr>
            </thead>
            <?php
            if ($Administradores != null) {
                foreach ($Administradores as $Administrador) {
            ?>
                    <tr>
                        <td><?php echo $Administrador['ID_USUARIO'] ?></td>
                        <td><?php echo $Administrador['NOMBRE'] ?></td>
                        <td><?php echo $Administrador['APELLIDO'] ?></td>
                        <td><?php echo $Administrador['USUARIO'] ?></td>
                        <td><?php echo $Administrador['PERFIL'] ?></td>
                        <td><?php echo $Administrador['ESTADO'] ?></td>
                        <td>
                            <a href="edit.php?Id=<?php echo $Administrador['ID_USUARIO'] ?>" class="btn btn-primary btn-sm px-3">Editar</a>
                            <a href="delete.php?Id=<?php echo $Administrador['ID_USUARIO'] ?>" class="btn btn-danger btn-sm px-3">Eliminar</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>

    </div>

    <!-- MDB -->
    <script type="text/javascript" src="../../assets/js/mdb.min.js"></script>

</body>

</html>