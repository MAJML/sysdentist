<?php

namespace App\Model;

use Core\Model;

class UsuariosModel extends Model
{

    public function listarUsuarios()
    {
        $query = $this->db->prepare("SELECT * FROM usuarios");
        $query->execute();
        return $query->fetchAll();
    }

    public function RegistroUsuario($data)
    {
        $query = $this->db->prepare('INSERT INTO usuarios(dni, nombre, apellido, usuario, password, telefono_movil, correo, sede, colegiatura, genero, tipo_doctor, especialidad, foto_perfil_usuario)          
        VALUES ("'.$data["dni"].'", "'.$data["nombre"].'", "'.$data["apellido"].'", "'.$data["usuario"].'", "'.$data["password"].'", "'.$data["telefono_movil"].'", "'.$data["correo"].'", "'.$data["sede"].'", "'.$data["colegiatura"].'", "'.$data["genero"].'", "'.$data["tipo_doctor"].'", "'.$data["especialidad"].'", "'.$data["foto_perfil_usuario"].'")');
        if($query->execute()){
            return "ok";
        }else{
            return "error";          
        }
    }
}