<?php

namespace App\Controllers;

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
    }
    
    public function index()
    {
        View::render(['usuarios/index'], ['title' => 'Usuarios | Dentist']);
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
            'dni'               => $dni,
            'nombre'            => $_POST['nombre'],    
            'apellido'          => $_POST['apellido'],
            'usuario'           => $_POST['usuario'],
            'password'          => $_POST['password'],
            'telefono_movil'    => $_POST['telefono_movil'],
            'correo'            => $_POST['correo'],
            'sede'              => $_POST['sede'],
            'colegiatura'       => $_POST['colegiatura'],
            'genero'            => $_POST['genero'],
            'tipo_doctor'       => $_POST['tipo_doctor'],
            'especialidad'      => $_POST['especialidad'],
            'foto_perfil_usuario'   => $ruta_foto_user
        );
        View::renderJson($data);
    }
}
