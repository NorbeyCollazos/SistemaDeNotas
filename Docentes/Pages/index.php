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

    <h2>
        <a href="../../Administradores/Pages/">Administradores - </a>
        <a href="#">Docentes - </a>
        <a href="../../Estudiantes/Pages/">Estudiantes - </a>
        <a href="../../Materias/Pages/">Materias - </a>
        <a href="../../Usuarios/Controladores/Salir.php">Salir</a>

    </h2>

    <a href="add.php">Registrar Docente</a><br><br>

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
                <a href="edit.php?Id=<?php echo $Docente['ID_USUARIO'] ?>">Editar</a>
                <a href="delete.php?Id=<?php echo $Docente['ID_USUARIO'] ?>">Eliminar</a>
            </td>
        </tr>
<?php
                }
            }
?>
</tr>
    </table>

</body>

</html>