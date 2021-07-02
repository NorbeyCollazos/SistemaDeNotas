<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>
<center>
<h1>Iniciar sesión</h1>

<form action="Usuarios/Controladores/Login.php" method="POST">

<input type="text" name="Usuario" placeholder="Usuario" autocomplete="off" required><br><br>
<input type="password" name="Contrasena" placeholder="Contrasena" autocomplete="off" required><br><br>
<input type="submit" value="Iniciar sesión">

</form>

</center>
    
</body>
</html>