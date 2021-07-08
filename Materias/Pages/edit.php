<?php
require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Materias.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

$ModeloMaterias = new Materias();
$Id = $_GET['Id'];
$Materias = $ModeloMaterias->getById($Id);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
</head>

<body>

    <?php include("../../cabecera.php"); ?>

    <div class="container mt-3 col-md-6">

        <h2 class="mb-3">Editar Materia</h2>

        <form action="../Controladores/edit.php" method="post">
            <input type="hidden" name="Id" value="<?php echo $Id; ?>">
            <?php
            if ($Materias != null) {
                foreach ($Materias as $Materia) {

            ?>
                    <div class="form-outline mb-4">
                        <input type="text" name="Materia" id="form6Example1" class="form-control" required value="<?php echo $Materia['MATERIA'] ?>" />
                        <label class="form-label" for="form6Example1">Materia</label>
                    </div>

            <?php
                }
            }
            ?>

            <input type="submit" value="Editar Materia" class="btn btn-success btn-rounded mb-4">

        </form>

    </div>

    <!-- MDB -->
    <script type="text/javascript" src="../../assets/js/mdb.min.js"></script>

</body>

</html>