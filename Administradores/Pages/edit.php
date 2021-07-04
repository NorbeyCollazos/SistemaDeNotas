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
    <h1>Editar Administrador</h1>
    <form action="../Controladores/edit.php" method="post">
        <input type="hidden" name="Id" value="<?php echo $Id; ?>">
        <?php
            if($Administradores != null){
                foreach($Administradores as $Administrador){
        ?>
        <input type="text" name="Nombre" placeholder="Nombre" value="<?php echo $Administrador['NOMBRE'] ?>"><br><br>
        <input type="text" name="Apellido" placeholder="Apellidos" value="<?php echo $Administrador['APELLIDO'] ?>"><br><br>
        <input type="text" name="Usuario" placeholder="Usuario" value="<?php echo $Administrador['USUARIO'] ?>"><br><br>
        <input type="password" name="Password" placeholder="Password" value="<?php echo $Administrador['PASS'] ?>"><br><br>

        <select name="Estado">
            <option value="<?php echo $Administrador['ESTADO'] ?>"><?php echo $Administrador['ESTADO'] ?></option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select><br><br>

        <?php
                    
                }
            }
        ?>
        
        <input type="submit" value="Editar Administrador">

    </form>
</body>

</html>