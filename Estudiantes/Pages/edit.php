<?php

$Id = $_GET['Id'];

//requerimos el modelo usuario para implementar el metodo de validar sesion
require_once("../../Usuarios/Modelo/Usuarios.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

//requqerimos el modelo de Metodos
require_once("../../Metodos.php");
$ModeloMetodos = new Metodos();

//requerimos el modelo de estudiante de
require_once("../Modelo/Estudiantes.php");
$ModeloEstudiantes = new Estudiantes();

$Estudiantes = $ModeloEstudiantes->getById($Id);




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar estudiante</title>
</head>

<body>
    <h1>Editar estudiante</h1>
    <form action="../Controladores/edit.php" method="post">
        <input type="hidden" name="Id" value="<?php echo $Id ?>">

        <?php
            if($Estudiantes != null){
                foreach ($Estudiantes as $Estudiante){
        ?>

        <input type="text" name="Nombre" placeholder="Nombre" value="<?php echo $Estudiante['NOMBRE'] ?>"><br><br>
        <input type="text" name="Apellido" placeholder="Apellidos" value="<?php echo $Estudiante['APELLIDO'] ?>"><br><br>
        <input type="text" name="Documento" placeholder="Documento" value="<?php echo $Estudiante['DOCUMENTO'] ?>"><br><br>
        <input type="text" name="Correo" placeholder="Correo" value="<?php echo $Estudiante['CORREO'] ?>"><br><br>
        <select name="Materia">
            <option value="<?php echo $Estudiante['ID_MATERIA'] ?>"><?php echo $Estudiante['MATERIA'] ?></option>
            <?php
            $Materias = $ModeloMetodos->getMaterias();
            if ($Materias != null) {
                foreach ($Materias as $materia) {
            ?>
                    <option value="<?php echo $materia['ID_MATERIA'] ?>"><?php echo $materia['MATERIA'] ?></option>
            <?php
                }
            }
            ?>
        </select><br><br>

        <select name="Docente">
            <option value="<?php echo $Estudiante['ID_USUARIO'] ?>"><?php echo $Estudiante['DOCENTE'].' '.$docente['APELLIDO'] ?></option>
            <?php
            $Docentes = $ModeloMetodos->getDocentes();
            if ($Docentes != null) {
                foreach ($Docentes as $docente) {
            ?>
                    <option value="<?php echo $docente['ID_USUARIO'].' '.$docente['APELLIDO'] ?>"><?php echo $docente['NOMBRE'].' '.$docente['APELLIDO'] ?></option>
            <?php
                }
            }
            ?>
        </select><br><br>
        <input type="number" name="Promedio" placeholder="Promedio" value="<?php echo $Estudiante['PROMEDIO'] ?>"><br><br>

            <?php
                
            }
        }
            ?>

        <input type="submit" value="Editar Estudiante">

    </form>
</body>

</html>