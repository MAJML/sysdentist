<?php

namespace App\Model;

use Core\Model;

class Paciente_detallesModel extends Model
{
    public function DataPaciente($id)
    {
        $query = $this->db->prepare("SELECT * FROM pacientes WHERE id = $id");
        $query->execute();
        return $query->fetch();
    }

    public function GuardarRadiografiaPaciente($idPaciente, $DataImagen, $DataTipoImagen)
    {
        $valor = "INSERT INTO examenes_archivos(paciente_id, archivo, tipo_imagen, file_type) VALUES";
        for ($i=0; $i < count($DataImagen); $i++) { 
            $valor .= '('.$idPaciente.',"'.$DataImagen[$i]. '","'.$DataTipoImagen[$i].'",1), ';
            /* $valor .= '(1, "asdasdasdasd", "asdasfasfdasfasdf", 1), '; */
        }
        $consulta = rtrim($valor, ', ');
        $query = $this->db->prepare($consulta);
        if($query->execute()){
            return "ok";
        }else{
            return "error";      
        }  
    }

    public function DataSubidaPaciente($id)
    {
        $query = $this->db->prepare("SELECT * FROM examenes_archivos WHERE paciente_id = $id and file_type=1");
        $query->execute();
        return $query->fetchAll();
    }

    public function centro($centro)
    {
        $query = $this->db->prepare("SELECT 
        EM.id,
        EM.ruc,
        EM.razon_social,
        EM.nombre_comercial,
        EM.correo,
        EM.tipo_negocio,
        (select count(*) from usuarios US Where US.id_empresa=EM.id) as 'doctores'
        FROM empresa EM WHERE tipo_negocio = '".$centro."'");
        $query->execute();
        return $query->fetchAll();
    }

    public function centroUsuarios($idCentro)
    {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE id_empresa = '".$idCentro."'");
        $query->execute();
        return $query->fetchAll();
    }

    public function reasignarPaciente($idUsuario, $idPaciente)
    {
        $query = $this->db->prepare('UPDATE pacientes SET id_usuario= '.$idUsuario.' WHERE id="'.$idPaciente.'"');
        if($query->execute()){
            return "ok";
        }else{
            return "error";          
        }
    }
    public function GuardarArchivoComprimido($id_paciente, $newFilePath)
    {
        $query = $this->db->prepare('INSERT INTO examenes_archivos(paciente_id, archivo, tipo_imagen, file_type) VALUES("'.$id_paciente.'", "'.$newFilePath.'", "comprimido", "2")');
        if($query->execute()){
            return "ok";
        }else{
            return "error";      
        }
    }

    public function DataFileArchivosSubidos($id)
    {
        $query = $this->db->prepare("SELECT * FROM examenes_archivos WHERE paciente_id = $id and file_type =2");
        $query->execute();
        return $query->fetchAll();
    }

    public function ContarDoctorCentro($centro)
    {
        $query = $this->db->prepare("SELECT count(*) as 'cantidad_usuarios' FROM usuarios US
        inner join empresa EM on EM.id=US.id_empresa
        WHERE EM.tipo_negocio ='".$centro."' and EM.id='".$_SESSION['empresa']."'");
        $query->execute();
        return $query->fetch();
    }

    public function enviarPacienteEmpresa($idPaciente, $idCentro)
    {
        $query = $this->db->prepare('UPDATE pacientes SET id_empresa_padre="'.$idCentro.'", id_usuario= NULL  WHERE id="'.$idPaciente.'"');
        if($query->execute()){
            return "ok";
        }else{
            return "error";          
        }
    }
}