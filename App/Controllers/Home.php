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
        $email = strtolower($_POST['email']);
        $password = $_POST['password'];
        $respuesta  = $this->model->comparandoData($email);
        $usuarios = $this->model->comparandoUsuarios($email);
        if($respuesta){
            if($email == $respuesta->correo && password_verify($password, $respuesta->password)){
                $_SESSION['id_session'] = $respuesta->id;
                $_SESSION['nombre_comercial'] = $respuesta->nombre_comercial;
                $_SESSION['correo'] = $respuesta->correo;
                $_SESSION['tipo_negocio'] = $respuesta->tipo_negocio;
                $_SESSION['id_empresa'] = '';
                $_SESSION['empresa'] = $respuesta->id;
                $_SESSION['tipo_empresa'] = $respuesta->tipo_negocio;
                View::renderJson('entro');
            }else{
                View::renderJson('Credenciales Incorrectas');
            }
        }else if($usuarios){
            if($email == $usuarios->correo && password_verify($password, $usuarios->password)){
                $_SESSION['id_session'] = $usuarios->id;
                $_SESSION['nombre_comercial'] = $usuarios->nombre.' '.$usuarios->apellido;
                $_SESSION['correo'] = $usuarios->correo;
                $_SESSION['tipo_negocio'] = $usuarios->tipo_negocio;
                $_SESSION['id_empresa'] = $usuarios->id_empresa;
                $_SESSION['empresa'] = $usuarios->id_empresa;
                $_SESSION['tipo_empresa'] = $usuarios->tipo_negocio;
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
            'correo'            => strtolower($_POST['correo']),
            'password'          => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'tipo_negocio'      => $_POST['tipo_negocio']
        );
        $respuesta = $this->model->registroEmpresa($data);
        View::renderJson($respuesta);
    }

    public function consultaSunat()
    {

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://apiperu.dev/api/ruc/".$_POST['ruc']."?api_token=3fccc8c48f59ff6ee58afff70a360af5fdcc214f571128165cdc050da28f2770",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_SSL_VERIFYPEER => false
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            /* echo $response; */
            $persona = json_decode($response, true);
            View::renderJson($persona);
        }

/*         $token = 'Bearer d482b352b7a8a0d3bdd22e81fdc5dadf5369fe7807aa2a3f2cba4fd0e57cc063';
        $ruc = $_POST['ruc'];
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://consulta.api-peru.com/api/ruc/'.$ruc,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            "Authorization: $token",
            "Content-Type: application/json"
        ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $persona = json_decode($response, true);
        View::renderJson($response); */
    }

    public function cerrarSesion()
    {
        session_destroy();
        header('Location: '.Util::baseUrl());
		exit;
    }

    public function consultarRucRepetido()
    {
        $ruc = $_POST['ruc'];
        $respuesta = $this->model->consultarRucRepetido($ruc);
        View::renderJson($respuesta);
    }
}
