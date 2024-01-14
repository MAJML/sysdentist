<?php

namespace App\Controllers;

use App\Model\UsuariosModel;
use Core\View;
use Core\Util;

class Usuarios
{
    public function __construct()
    {
        session_start();
        if(empty($_SESSION['nombre_comercial'])){
            session_destroy();
            header('Location: '.Util::baseUrl());
            exit;
        }
        $this -> model = new UsuariosModel();
    }
    
    public function index()
    {
        $sedes = $this->model->sedes();
        View::render(['usuarios/index'], ['title' => 'Usuarios | Dentist' ,'sedes' => $sedes]);
    }

    public function RegistroUsuario()
    {
        $dni = $_POST['dni'];
        $ruta_foto_user = "";
        if(isset($_FILES["foto_perfil_usuario"]["tmp_name"])){
            $directorio = "./img/usuarios/".$dni;
            if (!is_dir($directorio)) {
                mkdir($directorio, 0777);
            }   
            $aleatorio = mt_rand(100,999);                     
            $ruta_foto_user = "img/usuarios/".$dni."/user_".$aleatorio.".jpg";
            move_uploaded_file($_FILES["foto_perfil_usuario"]["tmp_name"], $ruta_foto_user);  
        } 
        $data = array(
            'id_empresa'        => $_SESSION['id_session'],
            'dni'               => $dni,
            'nombre'            => $_POST['nombre'],    
            'apellido'          => $_POST['apellido'],
            'password'          => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'telefono_movil'    => $_POST['telefono_movil'],
            'correo'            => $_POST['correo'],
            'sede'              => $_POST['sede'],
            'colegiatura'       => $_POST['colegiatura'],
            'genero'            => $_POST['genero'],
            'tipo_doctor'       => $_POST['tipo_doctor'],
            'especialidad'      => $_POST['especialidad'],
            'foto_perfil_usuario'   => $ruta_foto_user
        );
        $respuesta = $this->model->RegistroUsuario($data);
        View::renderJson($respuesta);
    }

    public function listarUsuarios()
    {
        $respuesta = $this->model->listarUsuarios();
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

    public function validarUsuarioRepetido()
    {
        $dni = $_POST['dni'];
        $respuesta = $this->model->validarUsuarioRepetido($dni);
        View::renderJson($respuesta);
    }

    public function verificarCorreoRepetido(){
        $correo = $_POST['correo'];
        $respuesta = $this->model->verificarCorreoRepetido($correo);
        View::renderJson($respuesta);
    }
}