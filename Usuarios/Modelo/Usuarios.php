<?php

require_once("././Conexion.php");
session_start();

class Usuarios extends Conexion{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function login($Usuario, $Pass)
    {
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE USUARIO = :Usuario AND PASS = :Pass");
        $statement->bindParam(":Usuario",$Usuario);
        $statement->bindParam(":Pass",$Pass);
        $statement->execute();
        if($statement->rowCount()== 1){
            $result = $statement->fetch();
            $_SESSION['NOMBRE'] = $result['NOMBRE']. " ".$result['APELLIDO'];
            $_SESSION['ID'] = $result['ID_USUARIO'];
            $_SESSION['PERFIL'] = $result['PERFIL'];
            return true;
        }
        return false;
    }

    //metodos get
    public function getNombre(){
        return $_SESSION['NOMBRE'];
    }

    public function getId(){
        return $_SESSION['ID'];
    }

    public function getPerfil(){
        return $_SESSION['PERFIL'];
    }

    //validar session
    public function validateSession(){
        if($_SESSION["ID"] == null){
            header('Location: ../../index.php');
        }
    }

    //validadcion de perfil
    public function validateSessionAdministrator(){
        if($_SESSION["ID"] != null){
            if($_SESSION["PERFIL"] == 'Docente'){
                header('Location: ../../Estudiantes/Pages/index.php');
            }else{
                header('Location: ../../index.php');
            }
        }
    }

    public function add($Nombre, $Apellido, $Usuario, $Pass, $Perfil, $Estado)
    {
        $statement = $this->db->prepare("INSERT INTO usuarios (NOMBRE, APELLIDO, USUARIO, PASS, PERFIL, ESTADO) 
        VALUES (:Nombre,:Apellido,:Usuario,:Pass,:Perfil,:Estado)");

        $statement->bindParam(":Nombre",$Nombre);
        $statement->bindParam(":Apellido",$Apellido);
        $statement->bindParam(":Usuario",$Usuario);
        $statement->bindParam(":Pass",$Pass);
        $statement->bindParam(":Perfil",$Perfil);
        $statement->bindParam(":Estado",$Estado);
        if($statement->execute()){
            echo "Registrado exitosamente";
        }else{
            echo "No se ha podido registrar";
        }

    }

    public function update($id,$Nombre, $Apellido, $Usuario, $Pass, $Perfil, $Estado)
    {
        $statement = $this->db->prepare("UPDATE usuarios SET NOMBRE = :Nombre, APELLIDO = :Apellido, 
        USUARIO = :Usuario, PASS = :Pass, PERFIL = :Perfil, ESTADO = :Estado 
        WHERE ID_USUARIO = :Id");

        $statement->bindParam(":Id",$id);
        $statement->bindParam(":Nombre",$Nombre);
        $statement->bindParam(":Apellido",$Apellido);
        $statement->bindParam(":Usuario",$Usuario);
        $statement->bindParam(":Pass",$Pass);
        $statement->bindParam(":Perfil",$Perfil);
        $statement->bindParam(":Estado",$Estado);
        if($statement->execute()){
            echo "Se actualizó exitosamente";
        }else{
            echo "No se ha podido actualizar";
        }

    }

    public function get()
    {
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM usuarios");
        $statement->execute();
        while ($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function delete($Id)
    {
        $statement = $this->db->prepare("DELETE FROM usuarios WHERE ID_USUARIO = :Id");
        $statement->bindParam(':Id',$Id);
        if($statement->execute()){
            echo "Se ha eliminado el usuario";
        }else{
            echo "No se ha podido eliminar";
        }
    }

}


?>