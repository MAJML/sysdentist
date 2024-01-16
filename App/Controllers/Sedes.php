<?php

namespace App\Controllers;

use App\Model\SedesModel;
use Core\View;
use Core\Util;

class Sedes
{
    public function __construct()
    {
        session_start();
        if(empty($_SESSION['nombre_comercial'])){
            session_destroy();
            header('Location: '.Util::baseUrl());
            exit;
        }
        $this -> model = new SedesModel();
    }

    public function index()
    {
        View::render(['sedes/index'], ['title' => 'Sedes | Dentist']);
    }

    public function registrarSede()
    {
        $data = array(
            'id_empresa'        => $_SESSION['id_session'],
            'name_sede'         => $_POST['name_sede'],
            'direccion_sede'    => $_POST['direccion_sede'],
            'telefono_sede'     => $_POST['telefono_sede']
        );
        $respuesta = $this->model->registrarSede($data);
        View::renderJson($respuesta);
    }

    public function listarSedes()
    {
        $respuesta = $this->model->listarSedes();
        View::renderJson($respuesta);
    }
}
