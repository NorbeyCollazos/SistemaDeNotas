<?php
require_once("../../Usuarios/Modelo/Usuarios.php");
require_once("../Modelo/Administradores.php");

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

if($_POST){

    $Id = $_POST['Id'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Usuario = $_POST['Usuario'];
    $Contrasena = $_POST['Contrasena'];
    $Estado = $_POST['Estado'];

    $ModeloAdministradores = new Administradores();
    //encriptamos la contraseña
    $contrasenaEncriptada = password_hash($Contrasena, PASSWORD_DEFAULT);
    $ModeloAdministradores->update($Id, $Nombre, $Apellido, $Usuario, $contrasenaEncriptada, $Estado);

}else{
    header("Location: ../../index.php");
}

?>