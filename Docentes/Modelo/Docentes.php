<?php

require_once("../../Conexion.php");

class Docentes extends Conexion
{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function add($Nombre, $Apellido, $Usuario, $Pass)
    {

        //primero consultamos si ya existe el usuario
        $usuarioExistente = $this->db->prepare("SELECT USUARIO FROM usuarios WHERE USUARIO = :Usuario");
        $usuarioExistente->bindParam(":Usuario", $Usuario);
        $usuarioExistente->execute();
        if ($usuarioExistente->rowCount() == 1) {
            echo "Ya existe el usuario <b>" . $Usuario . "</b> Por favor prueba con otro nombre de usuario";
        } else {
            $statement = $this->db->prepare("INSERT INTO usuarios (NOMBRE, APELLIDO, USUARIO, PASS, PERFIL, ESTADO)
        VALUES (:Nombre, :Apellido, :Usuario, :Pass, 'Docente', 'Activo')");
            $statement->bindParam(':Nombre', $Nombre);
            $statement->bindParam(':Apellido', $Apellido);
            $statement->bindParam(':Usuario', $Usuario);
            $statement->bindParam(':Pass', $Pass);
            if ($statement->execute()) {
                header("Location: ../Pages/index.php");
            } else {
                header("Location: ../Pages/add.php");
            }
        }
    }

    public function get()
    {
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE PERFIL = 'Docente'");
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }

    public function getById($Id)
    {
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE PERFIL = 'Docente' AND ID_USUARIO = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }

    public function update($Id, $Nombre, $Apellido, $Usuario, $Estado)
    {
        $statement = $this->db->prepare("UPDATE usuarios SET NOMBRE = :Nombre, APELLIDO = :Apellido, USUARIO = :Usuario, ESTADO = :Estado
        WHERE ID_USUARIO = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->bindParam(':Nombre', $Nombre);
        $statement->bindParam(':Apellido', $Apellido);
        $statement->bindParam(':Usuario', $Usuario);
        $statement->bindParam(':Estado', $Estado);

        if ($statement->execute()) {
            header("Location: ../Pages/index.php");
        } else {
            header("Location: ../Pages/add.php");
        }
    }

    public function delete($Id)
    {
        $statement = $this->db->prepare("DELETE FROM usuarios WHERE ID_USUARIO = :Id");
        $statement->bindParam(':Id', $Id);
        if ($statement->execute()) {
            header("Location: ../Pages/index.php");
        } else {
            header("Location: ../Pages/delete.php");
        }
    }
}
