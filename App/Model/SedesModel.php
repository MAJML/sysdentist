<?php

namespace App\Model;

use Core\Model;

class SedesModel extends Model
{
    public function registrarSede($data)
    {
        $query = $this->db->prepare('INSERT INTO sedes(nombre, direccion, telefono)          
        VALUES ("'.$data["name_sede"].'", "'.$data["direccion_sede"].'", "'.$data["telefono_sede"].'")');
        if($query->execute()){
            return "ok";
        }else{
            return "error";          
        }
    }

    public function listarSedes()
    {
        $query = $this->db->prepare("SELECT * FROM sedes");
        $query->execute();
        return $query->fetchAll();
    }
}




