<?php 

require_once('Usuarios/Modelo/Usuarios.php');

$usuario = new Usuarios();
//$usuario->update(1,"Norbey","Collazos Ramirez","ncr","123","Administrador","Activo");

$usuario->delete(4);

$getusuarios = $usuario->get();

foreach($getusuarios as $usuario){
    echo $usuario['ID_USUARIO']. " - ";
    echo $usuario['NOMBRE']. " - ";
    echo $usuario['APELLIDO']. " - ";
    echo $usuario['USUARIO']. " - ";
    echo $usuario['ID_USUARIO']. " - ";
    echo $usuario['PASS']. " - ";
    echo $usuario['PERFIL']. " - ";
    echo $usuario['ESTADO']. " <br> ";
}



?>

