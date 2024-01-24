<?php

namespace App\Model;

use Core\Model;

class PacientesModel extends Model
{
    public function registrarPaciente($data)
    {
        $query = $this->db->prepare('INSERT INTO pacientes(
        id_empresa_padre,
        dni, 
        nombres, 
        apellidos, 
        codigo_paciente,
        fecha_nacimiento, 
        genero, 
        email, 
        discapacidad, 
        telefono_movil, 
        telefono_fijo, 
        convenio, 
        actividad_profesional,
        direccion,
        dep_nac,
        prov_nac,
        dist_nac,
        dep_proc,
        prov_proc,
        dist_proc,
        observax)          
        VALUES (
            "'.$data["empresa_padre"].'", 
            "'.$data["dni"].'", 
            "'.$data["nombres"].'", 
            "'.$data["apellidos"].'", 
            "'.$data['codigo_paciente'].'",
            "'.$data["fecha_nacimiento"].'", 
            "'.$data["genero"].'", 
            "'.$data["email"].'", 
            "'.$data["discapacidad"].'", 
            "'.$data["telefono_movil"].'", 
            "'.$data["telefono_fijo"].'", 
            "'.$data["convenio"].'", 
            "'.$data["actividad_profesional"].'", 
            "'.$data["direccion"].'", 
            "'.$data["dep_nac"].'", 
            "'.$data["prov_nac"].'", 
            "'.$data["dist_nac"].'", 
            "'.$data["dep_proc"].'", 
            "'.$data["prov_proc"].'", 
            "'.$data["dist_proc"].'", 
            "'.$data["observax"].'")');
        if($query->execute()){
            return "ok";
        }else{
            return "error";          
        }
    }

    public function buscarPacienteCreado($dni, $email)
    {
        $query = $this->db->prepare("SELECT id, nombres, apellidos FROM pacientes WHERE email = '".$email."' and dni = '".$dni."' ");
        $query->execute();
        return $query->fetch();
    }

    public function TodosPacientes()
    {
        $query = $this->db->prepare("SELECT 
        PC.id,
        PC.id_usuario,
        PC.dni,
        PC.nombres,
        PC.apellidos,
        PC.codigo_paciente,
        PC.fecha_nacimiento,
        US.nombre as 'nombre_usuario',
        US.apellido as 'apellido_usuario',
        US.especialidad as 'especialidad_usuario',
        EM.razon_social,
        EM.nombre_comercial,
        EM.tipo_negocio
        FROM pacientes PC
        LEFT JOIN usuarios US on US.id=PC.id_usuario
        LEFT JOIN empresa EM on EM.id=PC.id_empresa_padre
        WHERE PC.id_empresa_padre='".$_SESSION['empresa']."'");
        $query->execute();
        return $query->fetchAll();
    }

    public function TodosPacientesTotales()
    {
        $query = $this->db->prepare("SELECT 
        PC.id,
        PC.id_usuario,
        PC.dni,
        PC.nombres,
        PC.apellidos,
        PC.codigo_paciente,
        PC.fecha_nacimiento,
        US.nombre as 'nombre_usuario',
        US.apellido as 'apellido_usuario',
        US.especialidad as 'especialidad_usuario',
        EM.razon_social,
        EM.nombre_comercial,
        EM.tipo_negocio
        FROM pacientes PC
        LEFT JOIN usuarios US on US.id=PC.id_usuario
        LEFT JOIN empresa EM on EM.id=PC.id_empresa_padre");
        $query->execute();
        return $query->fetchAll();
    }

    public function PacientesAsignados($idUsuario)
    {
        /* $query = $this->db->prepare("SELECT 
        PC.id,
        PC.id_usuario,
        PC.dni,
        PC.nombres,
        PC.apellidos,
        PC.codigo_paciente,
        PC.fecha_nacimiento,
        US.nombre as 'nombre_usuario',
        US.apellido as 'apellido_usuario',
        US.especialidad as 'especialidad_usuario'
        FROM pacientes PC
        LEFT JOIN usuarios US on US.id=PC.id_usuario
        WHERE PC.id_usuario = $idUsuario"); */
        $query = $this->db->prepare("SELECT 
        PC.id,
        PC.id_usuario,
        PC.dni,
        PC.nombres,
        PC.apellidos,
        PC.codigo_paciente,
        PC.fecha_nacimiento,
        US.nombre as 'nombre_usuario',
        US.apellido as 'apellido_usuario',
        US.especialidad as 'especialidad_usuario',
        EM.razon_social,
        EM.nombre_comercial,
        EM.tipo_negocio
        FROM pacientes PC
        LEFT JOIN usuarios US on US.id=PC.id_usuario
        LEFT JOIN empresa EM on EM.id=PC.id_empresa_padre
        WHERE PC.id_empresa_padre = '".$_SESSION['empresa']."'");
        $query->execute();
        return $query->fetchAll();
    }

    public function buscarPacientesTodosR($paciente)
    {
        $query = $this->db->prepare("SELECT 
        PC.id,
        PC.id_usuario,
        PC.dni,
        PC.nombres,
        PC.apellidos,
        PC.codigo_paciente,
        PC.fecha_nacimiento,
        US.nombre as 'nombre_usuario',
        US.apellido as 'apellido_usuario',
        US.especialidad as 'especialidad_usuario',
        EM.razon_social,
        EM.nombre_comercial,
        EM.tipo_negocio
        FROM pacientes PC
        LEFT JOIN usuarios US on US.id=PC.id_usuario
        LEFT JOIN empresa EM on EM.id=PC.id_empresa_padre
        WHERE PC.dni like '%".$paciente."%' or PC.apellidos like '%".$paciente."%' or PC.nombres like '%".$paciente."%'");
        $query->execute();
        return $query->fetchAll();
    }

}