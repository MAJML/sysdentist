<?php

namespace App\Controllers;

use App\Model\Paciente_detallesModel;
use Core\View;
use Core\Util;

class Paciente_detalles
{
    public function __construct()
    {
        session_start();
        if(empty($_SESSION['nombre_comercial'])){
            session_destroy();
            header('Location: '.Util::baseUrl());
            exit;
        }
        $this -> model = new Paciente_detallesModel();
    }
    
    public function index()
    {
        $url = $_SERVER['REQUEST_URI'];
        $components = parse_url($url);
        parse_str($components['query'], $results);
        if($results['token'] != null || $results['token'] != ''){
            $paciente = $this->model->DataPaciente($id=$results['token']);
            View::render(['paciente_detalles/index'], ['title' => 'Pacientes | Detalles | Dentist', 'paciente' => $paciente]);
        }else{
            header('Location:'.Util::baseUrl().'pacientes');
        }
    }

    public function GuardarRadiografiaPaciente()
    {
        $idPaciente = $_POST['idPaciente'];
        $DataImagen = $_POST['DataImagen'];
        $DataTipoImagen = $_POST['DataTipoImagen'];
        $respuesta = $this->model->GuardarRadiografiaPaciente($idPaciente, $DataImagen, $DataTipoImagen);
        View::renderJson($respuesta);
    }
}
