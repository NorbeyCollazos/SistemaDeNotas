<?php
require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Administradores.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

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
    
    <h1>Administradores</h1>
    <a href="add.php">Registrar Administrador</a><br><br>

    <table border="1" cellspacing>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Usuario</th>
            <th>Perfil</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        <?php
            if($Administradores != null){
                foreach($Administradores as $Administrador){
        ?>
        <tr>
            <td><?php echo $Administrador['ID_USUARIO'] ?></td>
            <td><?php echo $Administrador['NOMBRE'] ?></td>
            <td><?php echo $Administrador['APELLIDO'] ?></td>
            <td><?php echo $Administrador['USUARIO'] ?></td>
            <td><?php echo $Administrador['PERFIL'] ?></td>
            <td><?php echo $Administrador['ESTADO'] ?></td>
            <td>
            <a href="edit.php?Id=<?php echo $Administrador['ID_USUARIO'] ?>">Editar</a>
            <a href="delete.php?Id=<?php echo $Administrador['ID_USUARIO'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php
                }
            }
        ?>
    </table>
    
</body>
</html>