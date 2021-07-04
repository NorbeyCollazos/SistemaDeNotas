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
    <h1>Editar materia</h1>
    <form action="../Controladores/edit.php" method="post">
        <input type="hidden" name="Id" value="<?php echo $Id; ?>">
        <?php
            if($Materias != null){
                foreach($Materias as $Materia){
      
        ?>
        <input type="text" name="Materia" placeholder="Materia" value="<?php echo $Materia['MATERIA'] ?>"><br><br>
        <?php
        }
    }
    ?>
        <input type="submit" value="Editar materia">
    </form>
</body>
</html>