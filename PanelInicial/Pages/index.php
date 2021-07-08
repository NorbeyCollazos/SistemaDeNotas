<?php
//requerimos el modelo usuario para implementar el metodo de validar sesion
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
    <title>Sistema de Notas</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- MDB -->
    <link rel="stylesheet" href="../../assets/css/mdb.min.css" />
</head>

<body>

    <div class="container text-center mt-3">
        <img src="../../assets/img/logo.jpg" class="img-fluid w-25 text-center" alt="" />
        <h1>Sistema de Notas</h1>
        <div class="row mt-5">

            <?php
            if ($ModeloUsuarios->getPerfil() == 'Docente') {

            ?>
                <div class="col-md">
                    <div class="card text-center" style="width: 100%">
                        <div class="card-body">
                            <h5 class="card-title">Estudiantes</h5>
                            <p class="card-text h1">
                                <i class="far fa-user"></i>
                            </p>
                            <a href="../../Estudiantes/Pages/index.php" class="btn btn-success btn-rounded">Ingresar</a>
                        </div>
                    </div>
                </div>
            <?php
            } else {

            ?>


                <div class="col-md">
                    <div class="card text-center" style="width: 100%">
                        <div class="card-body">
                            <h5 class="card-title">Administradores</h5>
                            <p class="card-text h1">
                                <i class="fas fa-toolbox"></i>
                            </p>
                            <a href="../../Administradores/Pages/index.php" class="btn btn-success btn-rounded">Ingresar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card text-center" style="width: 100%">
                        <div class="card-body">
                            <h5 class="card-title">Docentes</h5>
                            <p class="card-text h1">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </p>
                            <a href="../../Docentes/Pages/index.php" class="btn btn-success btn-rounded">Ingresar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card text-center" style="width: 100%">
                        <div class="card-body">
                            <h5 class="card-title">Estudiantes</h5>
                            <p class="card-text h1">
                                <i class="far fa-user"></i>
                            </p>
                            <a href="../../Estudiantes/Pages/index.php" class="btn btn-success btn-rounded">Ingresar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card text-center" style="width: 100%">
                        <div class="card-body">
                            <h5 class="card-title">Materias</h5>
                            <p class="card-text h1">
                                <i class="fas fa-book-reader"></i>
                            </p>
                            <a href="../../Materias/Pages/index.php" class="btn btn-success btn-rounded">Ingresar</a>
                        </div>
                    </div>
                </div>
        </div>
    <?php
            }
    ?>

    </div>


</body>

</html>