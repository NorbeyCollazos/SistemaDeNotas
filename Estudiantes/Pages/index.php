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

    <?php
    if ($ModeloUsuarios->getPerfil() == 'Docente') {

    ?>
        <h2>
            <a href="#">Estudiantes - </a>
            <a href="../../Usuarios/Controladores/Salir.php">Salir</a>
        </h2>
    <?php
    } else {

    ?>
        <h2>
            <a href="../../Administradores/Pages/">Administradores - </a>
            <a href="../../Docentes/Pages/">Docentes - </a>
            <a href="#">Estudiantes - </a>
            <a href="../../Materias/Pages/">Materias - </a>
            <a href="../../Usuarios/Controladores/Salir.php">Salir</a>
        </h2>
    <?php
    }
    ?>

    <h3>Bienvenido: <?php echo $ModeloUsuarios->getNombre().' - '. $ModeloUsuarios->getPerfil(); ?></h3>


    <a href="add.php">Registrar estudiante</a><br><br>

    <table border="1" cellspacing>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Materia</th>
            <th>Docente</th>
            <th>Promedio</th>
            <th>Fecha de Registro</th>
            <th>Acciones</th>
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
                    <td><?php echo $Estudiante['DOCENTE']. ' '.$Estudiante['APELLIDO'] ?></td>
                    <td><?php echo $Estudiante['PROMEDIO'] ?></td>
                    <td><?php echo $Estudiante['FECHA_REGISTRO'] ?></td>
                    <td>
                        <a href="edit.php?Id=<?php echo $Estudiante['ID_ESTUDIANTE'] ?>">Editar</a>
                        <a href="delete.php?Id=<?php echo $Estudiante['ID_ESTUDIANTE'] ?>">Eliminar</a>
                    </td>
                </tr>

        <?php
            }
        }
        ?>
    </table>

</body>

</html>