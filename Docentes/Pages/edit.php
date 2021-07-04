<?php
require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Docentes.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

$Id = $_GET['Id'];
$ModeloDocentes = new Docentes();
$Docentes = $ModeloDocentes->getById($Id);

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
    <h1>Editar Docente</h1>
    <form action="../Controladores/edit.php" method="post">
    <input type="hidden" name="Id" value="<?php echo $Id; ?>">
        <?php
            if($Docentes != null){
                foreach($Docentes as $Docente){
        ?>
        <input type="text" name="Nombre" placeholder="Nombre" value="<?php echo $Docente['NOMBRE'] ?>"><br><br>
        <input type="text" name="Apellido" placeholder="Apellidos" value="<?php echo $Docente['APELLIDO'] ?>"><br><br>
        <input type="text" name="Usuario" placeholder="Usuario" value="<?php echo $Docente['USUARIO'] ?>"><br><br>
        <input type="password" name="Password" placeholder="Password" value="<?php echo $Docente['PASS'] ?>"><br><br>

        <select name="Estado">
            <option value="<?php echo $Docente['ESTADO'] ?>"><?php echo $Docente['ESTADO'] ?></option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select><br><br>

        <?php
                    
                }
            }
        ?>
        
        <input type="submit" value="Editar Docente">

    </form>
</body>

</html>