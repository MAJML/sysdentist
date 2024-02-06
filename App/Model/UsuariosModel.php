<?php

namespace App\Model;

use Core\Model;

class UsuariosModel extends Model
{

    public function listarUsuarios()
    {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE id_empresa='".$_SESSION['id_session']."'");
        $query->execute();
        return $query->fetchAll();
    }

    public function RegistroUsuario($data)
    {
        $query = $this->db->prepare('INSERT INTO usuarios(id_empresa, dni, nombre, apellido, password, telefono_movil, correo, sede, colegiatura, genero, tipo_doctor, especialidad, foto_perfil_usuario)          
        VALUES ("'.$data["id_empresa"].'","'.$data["dni"].'", "'.$data["nombre"].'", "'.$data["apellido"].'", "'.$data["password"].'", "'.$data["telefono_movil"].'", "'.$data["correo"].'", "'.$data["sede"].'", "'.$data["colegiatura"].'", "'.$data["genero"].'", "'.$data["tipo_doctor"].'", "'.$data["especialidad"].'", "'.$data["foto_perfil_usuario"].'")');
        if($query->execute()){
            return "ok";
        }else{
            return "error";          
        }
    }

    public function sedes()
    {
        $query = $this->db->prepare("SELECT * FROM sedes WHERE id_empresa='".$_SESSION['empresa']."'");
        $query->execute();
        return $query->fetchAll();
    }

    public function validarUsuarioRepetido($dni)
    {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE dni = $dni");
        $query->execute();
        return $query->fetch();
    }

    public function verificarCorreoRepetido($correo)
    {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE correo = '".$correo."'");
        $query->execute();
        return $query->fetch();
    }

    public function DataUsuarioEdit($id)
    {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE id = $id");
        $query->execute();
        return $query->fetch();
    }

    public function ModificarUsuario($data)
    {
        $query = $this->db->prepare('UPDATE usuarios SET 
        telefono_movil="'.$data["celular"].'", 
        correo="'.$data["email"].'", 
        colegiatura="'.$data["colegiatura"].'", 
        genero="'.$data["sexo"].'" ,
        tipo_doctor="'.$data["tipo_edit"].'" ,
        especialidad="'.$data["especialidad"].'" 
        WHERE id="'.$data["id"].'"');
        if($query->execute()){
            return "ok";
        }else{
            return "error";          
        }
    }

}