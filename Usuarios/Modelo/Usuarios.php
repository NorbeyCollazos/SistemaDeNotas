<?php

require_once("../../Conexion.php");
session_start();

class Usuarios extends Conexion
{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function login($Usuario, $Pass)
    {
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE USUARIO = :Usuario");
        $statement->bindParam(":Usuario", $Usuario);
        $statement->execute();
        if ($statement->rowCount() == 1) {
            $result = $statement->fetch();

            //desencriptamos la contraseña y verificamos
            if (password_verify($Pass, $result['PASS'])) {
                $_SESSION['NOMBRE'] = $result['NOMBRE'] . " " . $result['APELLIDO'];
                $_SESSION['ID'] = $result['ID_USUARIO'];
                $_SESSION['PERFIL'] = $result['PERFIL'];
                return true;
            }
        }
        return false;
    }

    //metodos get
    public function getNombre()
    {
        return $_SESSION['NOMBRE'];
    }

    public function getId()
    {
        return $_SESSION['ID'];
    }

    public function getPerfil()
    {
        return $_SESSION['PERFIL'];
    }

    //validar session
    public function validateSession()
    {
        if ($_SESSION["ID"] == null) {
            header('Location: ../../index.php');
        }
    }

    //validadcion de perfil
    public function validateSessionAdministrator()
    {
        if ($_SESSION["ID"] != null) {
            if ($_SESSION["PERFIL"] == 'Docente') {
                header('Location: ../../Estudiantes/Pages/');
            }
        }
    }

    public function salir()
    {
        $_SESSION["ID"] = null;
        $_SESSION["NOMBRE"] = null;
        $_SESSION["PERFIL"] = null;
        session_destroy();
        header('Location: ../../index.php');
    }
}
