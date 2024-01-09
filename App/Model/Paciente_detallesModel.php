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
}