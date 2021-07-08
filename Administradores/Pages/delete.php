<?php
//requerimos el modelo usuario para implementar el metodo de validar sesion
require_once("../../Usuarios/Modelo/Usuarios.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

$Id = $_GET['Id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Administrador</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- MDB -->
    <link rel="stylesheet" href="../../assets/css/mdb.min.css" />
</head>
<body>
<div class="card p-5 container" >

<h1>Eliminar Administrador</h1>
   <form action="../Controladores/delete.php" method="post">
    <input type="hidden" name="Id" value="<?php echo $Id ?>">
    <p>¿Estás seguro de eliminar el administrador?</p>
    <input type="submit" value="Eliminar administrador" class="btn btn-danger">
   </form> 


</div>
   

   <!-- MDB -->
<script type="text/javascript" src="../../assets/js/mdb.min.js"></script>

</body>
</html>