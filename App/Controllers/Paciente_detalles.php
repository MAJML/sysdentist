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
        date_default_timezone_set('America/Lima');
        $this -> model = new Paciente_detallesModel();
        ini_set('memory_limit', '-1'); // Sin límite de memoria
        ini_set('max_execution_time', '0'); // Tiempo de ejecución ilimitado
        ini_set('post_max_size', '0'); // Tamaño máximo de POST ilimitado
        ini_set('upload_max_filesize', '0');
    }
    
    public function index()
    {
        $url = $_SERVER['REQUEST_URI'];
        $components = parse_url($url);
        parse_str($components['query'], $results);
        if($results['token'] != null || $results['token'] != ''){
            $paciente = $this->model->DataPaciente($id=$results['token']);
            $DataSubida = $this->model->DataSubidaPaciente($id=$results['token']);
            $DataFileArchivos = $this->model->DataFileArchivosSubidos($id=$results['token']);
            View::render(['paciente_detalles/index'], ['title' => 'Pacientes | Detalles | Dentist', 'paciente' => $paciente, 'pacienteArchivos' => $DataSubida, 'pacienteArchivosFile' => $DataFileArchivos]);
        }else{
            header('Location:'.Util::baseUrl().'pacientes');
        }
    }

    public function JSDataFileArchivosSubidos()
    {
        $id = $_POST['idPaciente'];
        $respuesta = $this->model->DataFileArchivosSubidos($id);
        View::renderJson($respuesta);
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

    public function SubirArchivos2()
    {
        $id_paciente = $_POST['id_paciente'];
        /* if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $uploadsDirectory = './img/archivos/'.$id_paciente.'/'; 
            if (!is_dir($uploadsDirectory)) {
                mkdir($uploadsDirectory, 0777);
            }   
            if (!empty($_FILES['file']['name'])) {
                foreach ($_FILES['file']['name'] as $key => $name) {
                    $tmpFilePath = $_FILES['file']['tmp_name'];
                    $allowedExtensions = ['zip', 'rar'];
                    $fileExtension = pathinfo($name, PATHINFO_EXTENSION);
                    if (in_array($fileExtension, $allowedExtensions)) {
                        $newFilePath = $uploadsDirectory . $name;
                        move_uploaded_file($tmpFilePath, $newFilePath);
                        $respuesta = $this->model->GuardarArchivoComprimido($id_paciente, $newFilePath);
                        View::renderJson('guardado');
                    } else {
                        View::renderJson('error_tipe_archivo');
                    }
                }
            } else {
                View::renderJson('error');
            }
        } */

        // Ruta donde se almacenarán los archivos subidos
        $uploadDirectory = './img/archivos/'.$id_paciente.'/';
        // Verificar si hay archivos para subir
        if (!is_dir($uploadDirectory)) {
            mkdir($uploadDirectory, 0777);
        }   
        if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];
            $fileName = $_FILES['file']['name'];
            $newFilePath = $uploadDirectory . $fileName;

            // Mover el archivo a la carpeta de destino
            move_uploaded_file($tempFile, $newFilePath);
            $respuesta = $this->model->GuardarArchivoComprimido($id_paciente, $newFilePath);
            View::renderJson('guardado');
            // Guardar la ruta en la base de datos
            /* $sql = "INSERT INTO archivos (ruta) VALUES ('$targetFile')";
            if ($conn->query($sql) === TRUE) {
                echo "El archivo se ha subido y la ruta se ha guardado en la base de datos correctamente.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            } */
        }else{
            View::renderJson('error_tipe_archivo');
        }

    }

    public function SubirArchivos()
    {
        /* ini_set('upload_max_filesize', '1000M');
        ini_set('post_max_size', '1000M'); */
        $id_paciente = $_POST["id_paciente"];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $uploadsDirectory = './img/archivos/'.$id_paciente.'/'; 
            if (!is_dir($uploadsDirectory)) {
                mkdir($uploadsDirectory, 0777);
            }   
            if (!empty($_FILES['archivos']['name'][0])) {
                foreach ($_FILES['archivos']['name'] as $key => $name) {
                    $tmpFilePath = $_FILES['archivos']['tmp_name'][$key];
                    // Verificar si el archivo es un .zip o .rar
                    $allowedExtensions = ['zip', 'rar'];
                    $fileExtension = pathinfo($name, PATHINFO_EXTENSION);
                    if (in_array($fileExtension, $allowedExtensions)) {
                        $newFilePath = $uploadsDirectory . $name;
                        // Mover el archivo al directorio de destino
                        move_uploaded_file($tmpFilePath, $newFilePath);
                        $respuesta = $this->model->GuardarArchivoComprimido($id_paciente, $newFilePath);
                        View::renderJson('guardado');
                        /* echo "Archivo '$name' subido correctamente.<br>"; */
                    } else {
                        View::renderJson('error_tipe_archivo');
                        /* echo "Error: Archivo '$name' no es un .zip o .rar.<br>"; */
                    }
                }
            } else {
                View::renderJson('error');
                /* echo "Error: No se seleccionaron archivos para subir.<br>"; */
            }
        }
    }

    public function centro()
    {
        $centro = $_POST['centro'];
        /* $contadorDoctor = $this->model->ContarDoctorCentro($centro); */
        $respuesta = $this->model->centro($centro);
        /* $array = array(
            'respuesta'         => $respuesta,
            'contadorDoctor'    => $contadorDoctor
        ); */
        View::renderJson($respuesta);
    }

    public function centroUsuarios()
    {
        $idCentro = $_POST['idCentro'];
        $respuesta = $this->model->centroUsuarios($idCentro);
        View::renderJson($respuesta);
    }

    public function reasignarPaciente()
    {
        $idUsuario = $_POST['idUsuario'];
        $idPaciente = $_POST['idPaciente'];
        $respuesta = $this->model->reasignarPaciente($idUsuario, $idPaciente);
        View::renderJson($respuesta);
    }

    public function enviarPacienteEmpresa()
    {
        $idPaciente = $_POST['idPaciente'];
        $idCentro = $_POST['idCentro'];
        $respuesta = $this->model->enviarPacienteEmpresa($idPaciente, $idCentro);
        View::renderJson($respuesta);
    }

    public function buscarCentro()
    {
        $doctor = $_POST['doctor'];
        $centro = $_POST['centro'];
        $respuesta = $this->model->ModelBuscarCentro($doctor, $centro);
        View::renderJson($respuesta);
    }

}