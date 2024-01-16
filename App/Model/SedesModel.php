<?php

namespace App\Model;

use Core\Model;

class SedesModel extends Model
{
    public function registrarSede($data)
    {
        $query = $this->db->prepare('INSERT INTO sedes(id_empresa, nombre, direccion, telefono)          
        VALUES ("'.$data['id_empresa'].'","'.$data["name_sede"].'", "'.$data["direccion_sede"].'", "'.$data["telefono_sede"].'")');
        if($query->execute()){
            return "ok";
        }else{
            return "error";          
        }
    }

    public function listarSedes()
    {
        $query = $this->db->prepare("SELECT * FROM sedes WHERE id_empresa= '".$_SESSION['id_session']."'");
        $query->execute();
        return $query->fetchAll();
    }
}




