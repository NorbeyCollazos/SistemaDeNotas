<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Docente</title>
</head>

<body>
    <h1>Registrar Docente</h1>
    <form action="../Controladores/add.php" method="post">

        <input type="text" name="Nombre" placeholder="Nombre"><br><br>
        <input type="text" name="Apellido" placeholder="Apellidos"><br><br>
        <input type="text" name="Usuario" placeholder="Usuario"><br><br>
        <input type="password" name="Password" placeholder="Password"><br><br>
        
        <input type="submit" value="Registrar Docente">

    </form>
</body>

</html>