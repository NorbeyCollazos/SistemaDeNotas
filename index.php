<?php
session_start();

if (!empty($_SESSION["ID"])) {

    $sesion = $_SESSION["ID"];

    if ($sesion != null) {
        header('Location: panel_inicial.php');
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <!-- MDB -->
    <link rel="stylesheet" href="assets/css/mdb.min.css" />
</head>

<body>

    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="text-center">



            <img src="assets/img/logo.jpg" class="img-fluid w-50 text-center" alt="" />

            <h1 class="mb-5">Sistema de Notas</h1>

            <form action="Usuarios/Controladores/Login.php" method="POST">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="text" name="Usuario" id="form1Example1" class="form-control" />
                    <label class="form-label" for="form1Example1">Usuario</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" name="Contrasena" id="form1Example2" class="form-control" />
                    <label class="form-label" for="form1Example2">Contraseña</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <!--<div class="row mb-4">
                    <div class="col d-flex justify-content-center">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                            <label class="form-check-label" for="form1Example3"> Remember me </label>
                        </div>
                    </div>

                    <div class="col">

                        <a href="#!">Forgot password?</a>
                    </div>
                </div>-->

                <!-- Submit button -->
                <button type="submit" class="btn btn-success btn-rounded btn-block mb-5">Iniciar sesión</button>

            </form>

            <a href="registro.php" class="mt-5">Registrarme como Administrador</a>

        </div>
    </div>




    <!-- MDB -->
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>

</body>

</html>