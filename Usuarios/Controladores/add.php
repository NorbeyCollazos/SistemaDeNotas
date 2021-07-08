<?php
require_once("../Modelo/Usuarios.php");

$ModeloUsuarios = new Usuarios();

if($_POST){

    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Usuario = $_POST['Usuario'];
    $Contrasena = $_POST['Contrasena'];

    $ModeloUsuarios = new Usuarios();
    //encriptamos la contraseña
    $contrasenaEncriptada = password_hash($Contrasena, PASSWORD_DEFAULT);
    $ModeloUsuarios->add($Nombre,$Apellido,$Usuario, $contrasenaEncriptada);

}else{
    header("Location: ../../index.php");
}
?>