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
            $DataSubida = $this->model->DataSubidaPaciente($id=$results['token']);
            View::render(['paciente_detalles/index'], ['title' => 'Pacientes | Detalles | Dentist', 'paciente' => $paciente, 'pacienteArchivos' => $DataSubida]);
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
/* 
        $cod_alumno = $_POST['idPaciente'];
        $ruta = "";

        for ($i=0; $i < count($DataImagen); $i++) { 
            
            $imagenCodificadaLimpia = str_replace("data:image/png;base64,", "", urldecode($DataImagen[$i]));
            $imagenDecodificada = base64_decode($imagenCodificadaLimpia);

            if(isset($imagenDecodificada)){
                $directorio = "./img/pacientes_radiografias/".$cod_alumno;
                if (!is_dir($directorio)) {
                    mkdir($directorio, 0777);
                } 
                $aleatorio = mt_rand(100,999);                     
                $ruta_voucher1 = "img/pacientes_radiografias/".$cod_alumno."/vaucher1_".$aleatorio.".jpg";
                move_uploaded_file($_FILES["subir_imagen_radiografia"]["tmp_name"], $ruta_voucher1);
            }else{
                $ruta_voucher1 = '';
            }
        } */

        View::renderJson($respuesta);

    }
}
