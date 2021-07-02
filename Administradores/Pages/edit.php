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
        <input type="hidden" name="Id" value="">
        <input type="text" name="Nombre" placeholder="Nombre"><br><br>
        <input type="text" name="Apellido" placeholder="Apellidos"><br><br>
        <input type="text" name="Usuario" placeholder="Usuario"><br><br>
        <input type="password" name="Password" placeholder="Password"><br><br>

        <select name="Estado">
            <option>Seleccione una opción</option>
            <option value="">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select><br><br>
        
        <input type="submit" value="Editar Administrador">

    </form>
</body>

</html>