<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro inicial</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- MDB -->
  <link rel="stylesheet" href="assets/css/mdb.min.css" />
</head>

<body>

  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">

    <div class="text-center">

      <img src="assets/img/logo.jpg" class="img-fluid w-50 text-center" alt="" />

      <h1 class="mb-5">Sistema de Notas</h1>

      <form action="Usuarios/Controladores/add.php" method="POST">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form3Example1" class="form-control" required name="Nombre" />
              <label class="form-label" for="form3Example1">Nombre</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form3Example2" class="form-control" required name="Apellido" />
              <label class="form-label" for="form3Example2">Apellidos</label>
            </div>
          </div>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="text" id="form3Example3" class="form-control" required name="Usuario" />
          <label class="form-label" for="form3Example3">Usuario</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" id="form3Example4" class="form-control" required name="Contrasena" />
          <label class="form-label" for="form3Example4">Contraseña</label>
        </div>



        <!-- Submit button -->
        <button type="submit" class="btn btn-success btn-rounded btn-block mb-4">Registrarme</button>


      </form>

    </div>

  </div>


  <!-- MDB -->
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
</body>

</html>