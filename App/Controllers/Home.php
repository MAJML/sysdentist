<?php

namespace App\Controllers;

use App\Model\LoginModel;
use Core\View;
use Core\Util;

class Home
{
    public function __construct()
    {
        session_start();
        if(!empty($_SESSION['nombre_comercial'])){
            header('Location:'.Util::baseUrl().'pacientes');
        }
        $this -> model = new LoginModel();
    }

    public function index()
    {
        View::login(['home/login'], ['title' => 'Login | Sysdentist']);
    }

    public function registro()
    {
        View::login(['home/registro'], ['title' => 'Registro Login | Sysdentist']);
    }

    public function iniciarSecion()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $respuesta  = $this->model->comparandoData($email);
        if($respuesta){
            if($email == $respuesta->correo && password_verify($password, $respuesta->password)){
                $_SESSION['nombre_comercial'] = $respuesta->nombre_comercial;
                $_SESSION['correo'] = $respuesta->correo;
                View::renderJson('entro');
            }else{
                View::renderJson('Credenciales Incorrectas');
            }
        }else{
            View::renderJson('error');
        }
    }

    public function registrarEmpresa()
    {
        $data = array(
            'ruc'               => $_POST['ruc'],
            'razon_social'      => $_POST['razon_social'],
            'nombre_comercial'  => $_POST['nombre_comercial'],
            'correo'            => $_POST['correo'],
            'password'          => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'tipo_negocio'      => $_POST['tipo_negocio']
        );
        $respuesta = $this->model->registroEmpresa($data);
        if($respuesta == 'ok'){
            $_SESSION['nombre_comercial'] = $_POST['nombre_comercial'];
            $_SESSION['correo'] = $_POST['correo'];
        }
        View::renderJson($respuesta);
    }

    public function consultaSunat()
    {
        $token = 'Bearer d482b352b7a8a0d3bdd22e81fdc5dadf5369fe7807aa2a3f2cba4fd0e57cc063';
        $ruc = $_POST['ruc'];
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://consulta.api-peru.com/api/ruc/' . $ruc,
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

    public function cerrarSesion()
    {
        session_destroy();
        header('Location: '.Util::baseUrl());
		exit;
    }
}
