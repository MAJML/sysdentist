<?php

namespace App\Model;

use Core\Model;

class LoginModel extends Model
{
    public function registroEmpresa($data)
    {
        $query = $this->db->prepare('INSERT INTO empresa(ruc, razon_social, nombre_comercial, correo, password, tipo_negocio)          
        VALUES ("'.$data["ruc"].'", "'.$data["razon_social"].'", "'.$data["nombre_comercial"].'", "'.$data["correo"].'", "'.$data["password"].'", "'.$data["tipo_negocio"].'")');
        if($query->execute()){
            return "ok";
        }else{
            return "error";          
        }
    }

    public function comparandoData($email)
    {
        $query = $this->db->prepare("SELECT id, ruc, razon_social, nombre_comercial, correo, password, tipo_negocio FROM empresa WHERE correo = '".$email."'");
        $query->execute();
        return $query->fetch();
    }

    public function comparandoUsuarios($email)
    {
        $query = $this->db->prepare("SELECT 
        US.id, 
        US.id_empresa, 
        US.dni, 
        US.nombre, 
        US.apellido, 
        US.correo, 
        US.password ,
        EM.tipo_negocio,
        EM.tipo_negocio
        FROM usuarios US 
        INNER JOIN empresa EM on EM.id=US.id_empresa
        WHERE US.correo = '".$email."'");
        $query->execute();
        return $query->fetch();
    }

    public function consultarRucRepetido($ruc)
    {
        $query = $this->db->prepare("SELECT * FROM empresa WHERE ruc = '".$ruc."'");
        $query->execute();
        return $query->fetch();
    }
}