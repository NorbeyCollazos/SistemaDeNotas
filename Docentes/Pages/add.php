<?php
require_once("../../Usuarios/Modelo/Usuarios.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Docente</title>
</head>

<body>
<?php include("../../cabecera.php"); ?>

<div class="container mt-3 col-md-6">

    <h2 class="mb-3">Registrar Docente</h2>
    <form action="../Controladores/add.php" method="post">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="form-outline mb-4">
            <input type="text" name="Nombre" id="form6Example1" class="form-control" required/>
            <label class="form-label" for="form6Example1">Nombre</label>
        </div>

        <div class="form-outline mb-4">
            <input type="text" name="Apellido" id="formform6Example2" class="form-control" required />
            <label class="form-label" for="form6Example2">Apellido</label>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <input type="text" name="Usuario" id="formform6Example3" class="form-control" required/>
            <label class="form-label" for="form6Example3">Usuario</label>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <input type="password" name="Contrasena" id="form6Example4" class="form-control" required/>
            <label class="form-label" for="form6Example4">Contraseña</label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-success btn-rounded mb-4">Registrar docente</button>
    </form>
    
</div>


<!-- MDB -->
<script type="text/javascript" src="../../assets/js/mdb.min.js"></script>
</body>

</html>