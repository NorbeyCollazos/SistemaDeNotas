<?php
require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Administradores.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

$Id = $_GET['Id'];
$ModeloAdministradores = new Administradores();
$Administradores = $ModeloAdministradores->getById($Id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Administrador</title>
</head>

<body>

    <?php include("../../cabecera.php"); ?>
    

    <div class="container mt-3 col-md-6">


        <h2 class="mb-3">Editar Administrador</h2>
        <form action="../Controladores/edit.php" method="post">

            <input type="hidden" name="Id" value="<?php echo $Id; ?>">
            

            <?php
            if ($Administradores != null) {
                foreach ($Administradores as $Administrador) {
            ?>
                    <div class="form-outline mb-4">
                        <input type="text" name="Nombre" id="form6Example1" class="form-control" required value="<?php echo $Administrador['NOMBRE'] ?>" />
                        <label class="form-label" for="form6Example1">Nombre</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" name="Apellido" id="formform6Example2" class="form-control" required value="<?php echo $Administrador['APELLIDO'] ?>" />
                        <label class="form-label" for="form6Example2">Apellido</label>
                    </div>


                    <div class="form-outline mb-4">
                        <input type="text" name="Usuario" id="formform6Example3" class="form-control" required value="<?php echo $Administrador['USUARIO'] ?>" />
                        <label class="form-label" for="form6Example3">Usuario</label>
                    </div>


                    <div class="mb-4">
                        <select name="Estado" class="" required>
                            <option value="<?php echo $Administrador['ESTADO'] ?>"><?php echo $Administrador['ESTADO'] ?></option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>

            <?php

                }
            }
            ?>

            <!-- Submit button -->
            <button type="submit" class="btn btn-success btn-rounded mb-4">Editar administrador</button>
        </form>

    </div>

<!-- MDB -->
<script type="text/javascript" src="../../assets/js/mdb.min.js"></script>


</body>

</html>