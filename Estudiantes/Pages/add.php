<?php
//requerimos el modelo usuario para implementar el metodo de validar sesion
require_once("../../Usuarios/Modelo/Usuarios.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

//requqerimos el modelo de Metodos
require_once("../../Metodos.php");
$ModeloMetodos = new Metodos();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de estudiante</title>
</head>

<body>
<?php include("../../cabecera.php"); ?>

<div class="container mt-3 col-md-6">

    <h2 class="mb-3">Registrar Estudiante</h2>

    <form action="../Controladores/add.php" method="post">

    <div class="form-outline mb-4">
            <input type="text" name="Nombre" id="form6Example1" class="form-control" required/>
            <label class="form-label" for="form6Example1">Nombre</label>
        </div>

        <div class="form-outline mb-4">
            <input type="text" name="Apellido" id="formform6Example2" class="form-control" required />
            <label class="form-label" for="form6Example2">Apellido</label>
        </div>

        <div class="form-outline mb-4">
            <input type="text" name="Documento" id="formform6Example2" class="form-control" required />
            <label class="form-label" for="form6Example2">Documento</label>
        </div>

        <div class="form-outline mb-4">
            <input type="email" name="Correo" id="formform6Example2" class="form-control" required />
            <label class="form-label" for="form6Example2">Correo</label>
        </div>

        <select name="Materia">
            <option>Seleccione la Materia</option>
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
            <option>Seleccione el docente</option>
            <?php
            $Docentes = $ModeloMetodos->getDocentes();
            if ($Docentes != null) {
                foreach ($Docentes as $docente) {
            ?>
                    <option value="<?php echo $docente['ID_USUARIO']?>"><?php echo $docente['NOMBRE'].' '.$docente['APELLIDO'] ?></option>
            <?php
                }
            }
            ?>
        </select><br><br>
        <div class="form-outline mb-4">
            <input type="number" name="Promedio" id="formform6Example2" class="form-control" required />
            <label class="form-label" for="form6Example2">Promedio</label>
        </div>

        <input type="submit" value="Registrar Estudiante" class="btn btn-success btn-rounded mb-4">

    </form>

</div>

<!-- MDB -->
<script type="text/javascript" src="../../assets/js/mdb.min.js"></script>

</body>

</html>