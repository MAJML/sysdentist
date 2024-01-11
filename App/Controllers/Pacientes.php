<?php

namespace App\Controllers;

use App\Model\PacientesModel;
use Core\View;
use Core\Util;

class Pacientes
{
    public function __construct()
    {
        session_start();
        if(empty($_SESSION['nombre_comercial'])){
            session_destroy();
            header('Location: '.Util::baseUrl());
            exit;
        }
        $this -> model = new PacientesModel();
    }

    public function index()
    {
        $pacientes = $this->model->TodosPacientes();
        View::render(['pacientes/index'], ['title' => 'Pacientes | Dentist', 'pacientes' => $pacientes]);
    }

    public function registrarPaciente()
    {
        $data = array(
            'dni'                   => $_POST['dni'],
            'nombres'               => $_POST['nombres'],        
            'apellidos'             => $_POST['apellidos'],
            'fecha_nacimiento'      => $_POST['fecha_nacimiento'],
            'genero'                => $_POST['genero'],
            'email'                 => $_POST['email'],
            'discapacidad'          => $_POST['discapacidad'],
            'telefono_movil'        => $_POST['telefono_movil'],
            'telefono_fijo'         => $_POST['telefono_fijo'],
            'convenio'              => $_POST['convenio'],
            'actividad_profesional' => $_POST['actividad_profesional'],
            'direccion'             => $_POST['direccion'],
            'dep_nac'               => $_POST['dep_nac'],
            'prov_nac'              => $_POST['prov_nac'],
            'dist_nac'              => $_POST['dist_nac'],
            'dep_proc'              => $_POST['dep_proc'],
            'prov_proc'             => $_POST['prov_proc'],
            'dist_proc'             => $_POST['dist_proc'],
            'observax'              => $_POST['observax']
        );
        $respuesta = $this->model->registrarPaciente($data);
        View::renderJson($respuesta);
    }

    public function buscarReniec()
    {
        $token = 'Bearer d482b352b7a8a0d3bdd22e81fdc5dadf5369fe7807aa2a3f2cba4fd0e57cc063';
        $dni = $_POST['dni'];
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://consulta.api-peru.com/api/dni/' . $dni,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 2,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Referer: https://apis.net.pe/consulta-dni-api',
            'Authorization: Bearer ' . $token
        ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $persona = json_decode($response);
        View::renderJson($persona);
    }

    public function buscarPacienteCreado()
    {
        $dni = $_POST['dni'];
        $email = $_POST['email'];
        $respuesta = $this->model->buscarPacienteCreado($dni, $email); 
        View::renderJson($respuesta);
    }
}
