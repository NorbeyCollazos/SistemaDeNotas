<?php
require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Docentes.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

if($_POST){

    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Usuario = $_POST['Usuario'];
    $Contrasena = $_POST['Contrasena'];

    $ModeloDocentes = new Docentes();
    //encriptamos la contraseña
    $contrasenaEncriptada = password_hash($Contrasena, PASSWORD_DEFAULT);
    $ModeloDocentes->add($Nombre,$Apellido,$Usuario, $contrasenaEncriptada);

}else{
    header("Location: ../../index.php");
}
?>