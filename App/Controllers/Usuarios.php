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
}
