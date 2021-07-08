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
    <?php include("../../cabecera.php"); ?>

    <div class="container mt-3 col-md-6">

        <h2 class="mb-3">Editar Estudiante</h2>

        <form action="../Controladores/edit.php" method="post">

            <input type="hidden" name="Id" value="<?php echo $Id ?>">

            <?php
            if ($Estudiantes != null) {
                foreach ($Estudiantes as $Estudiante) {
            ?>

                    <div class="form-outline mb-4">
                        <input type="text" name="Nombre" id="form6Example1" class="form-control" required value="<?php echo $Estudiante['NOMBRE'] ?>" />
                        <label class="form-label" for="form6Example1">Nombre</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" name="Apellido" id="formform6Example2" class="form-control" required value="<?php echo $Estudiante['APELLIDO'] ?>" />
                        <label class="form-label" for="form6Example2">Apellido</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" name="Documento" id="formform6Example2" class="form-control" required value="<?php echo $Estudiante['DOCUMENTO'] ?>" />
                        <label class="form-label" for="form6Example2">Documento</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="email" name="Correo" id="formform6Example2" class="form-control" required value="<?php echo $Estudiante['CORREO'] ?>" />
                        <label class="form-label" for="form6Example2">Correo</label>
                    </div>

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
                        <option value="<?php echo $Estudiante['ID_USUARIO'] ?>"><?php echo $Estudiante['DOCENTE'] . ' ' . $Estudiante['APELLIDO_DOCENTE'] ?></option>
                        <?php
                        $Docentes = $ModeloMetodos->getDocentes();
                        if ($Docentes != null) {
                            foreach ($Docentes as $docente) {
                        ?>
                                <option value="<?php echo $docente['ID_USUARIO'] ?>"><?php echo $docente['NOMBRE'] . ' ' . $docente['APELLIDO'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select><br><br>
                    <div class="form-outline mb-4">
                        <input type="number" name="Promedio" id="formform6Example2" class="form-control" required value="<?php echo $Estudiante['PROMEDIO'] ?>"/>
                        <label class="form-label" for="form6Example2">Promedio</label>
                    </div>

            <?php

                }
            }
            ?>

            <input type="submit" value="Editar Estudiante" class="btn btn-success btn-rounded mb-4">

        </form>

    </div>

    <!-- MDB -->
    <script type="text/javascript" src="../../assets/js/mdb.min.js"></script>

</body>

</html>