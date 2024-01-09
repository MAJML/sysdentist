<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script language="JavaScript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script language="JavaScript" src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" />
        
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--     <link href="<?=$baseUrl?>packages/core/main.css" rel="stylesheet" />
    <link href="<?=$baseUrl?>packages/bootstrap/main.css" rel="stylesheet" />
    <link href="<?=$baseUrl?>packages/timegrid/main.css" rel="stylesheet" />
    <link href="<?=$baseUrl?>packages/daygrid/main.css" rel="stylesheet" />
    <link href="<?=$baseUrl?>packages/list/main.css" rel="stylesheet" />
    <script src="<?=$baseUrl?>packages/core/main.js"></script>
    <script src="<?=$baseUrl?>packages/interaction/main.js"></script>
    <script src="<?=$baseUrl?>packages/bootstrap/main.js"></script>
    <script src="<?=$baseUrl?>packages/daygrid/main.js"></script>
    <script src="<?=$baseUrl?>packages/timegrid/main.js"></script>
    <script src="<?=$baseUrl?>packages/list/main.js"></script>
    <script src="<?=$baseUrl?>js/theme-chooser.js"></script> -->
    <script> var baseurl = "<?=$baseUrl?>"; </script>
    <title><?= $title ?? '' ?></title>
</head>
<body>
    <style>
        body{
            background: url("<?=$baseUrl?>img/What.jpeg");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color: #464646;
        }
        .contenedor{
            padding-left: 80px;
            padding-right: 120px;
        }
        .formulario{
            padding-left: 40px;
            padding-right: 40px;
        }
        #innova{
                font-size: 30px;
            }
        #title{
            font-size: 120px;
            color: rgba(255,255,255,0.5);
            opacity: 10;
            }
        .espacio{
            padding-top: 200px;
        }
        .espacio1{
            padding-top: 120px;
        }
        .espacio2{
            padding-top: 20px;
        }
        @media only screen and (max-width: 1200px){
           .contenedor{
                padding-left: 100px;
                padding-right: 100px;
            }
            .espacio{
                display: none;
            }
        }
        @media only screen and (max-width: 1000px){
            
            body{
                background-size : 150% 150%;
            }
           .contenedor{
                padding-left: 10px;
                padding-right: 10px;
            }
            #title{
                font-size: 48px;
            }
            #medico{
                display: none;
            }
            #innova{
                font-size: 15px;
            }
            .card{
                padding: 0px 5px 0px 5px;
            }
            .espacio{
                padding-top: 50px;
                display: none;
            }
        }
        @media only screen and (max-width: 1198px){
           .contenedor{
                padding-left: 300px;
                padding-right: 300px;
            }
            body{
                background-size : 150% 150%;
            }
        }
        @media only screen and (max-width: 1000px){
           .contenedor{
                padding-left: 200px;
                padding-right: 200px;
            }
            body{
                background-size : 200% 150%;
            }
        }
        @media only screen and (max-width: 700px){
           .contenedor{
                padding-left: 100px;
                padding-right: 100px;
            }
            .espacio{
                display: none;
            }
            .formulario{
                padding-left: 10px;
                padding-right: 10px;
            }
            body{
                background-size : 300% 150%;
            }
        }
        @media only screen and (max-width: 500px){
           .contenedor{
                padding-left: 10px;
                padding-right: 10px;
            }
            .espacio{
                display: none;
            }
            .formulario{
                padding-left: 30px;
                padding-right: 30px;
            }
            body{
                background-size : 300% 150%;
            }
        }
    </style>
    
    <div class="contenedor">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 espacio" id="">
                <div class="row" id="filas">
                    <div class="col-12 text-center">
                        <h2 id="title"><b>SYSDENTIST</b></h2>
                    </div>
                    <div class="col-12 text-center">
                        <div class="text-white">
                            <span id="innova" style="-webkit-text-fill-color: #00e1cd">Innovación informatica para sus pacientes y su clínica</span>
                            <marquee><strong>SYSDENTIST - LOS MEJORES PROFESIONALES SE JUNTARON: ODONTOLOGOS, CIRUJANOS DENTISTAS, RADIOLÓGOS, ORTODONCISTA, ENDODONCISTA, PERIODONCISTA, PROTESISTA, CIRUJANO ORAL Y ODONTOPEDIATRAS</strong></marquee>
                            <p style="font-size: 23px">Suscribete y úsalo</p>
                            <div class="text-center">
                                <span>CONSULTAS Y SUGERENCIAS:</span> &nbsp;
                                <img src="<?=$baseUrl?>img/phone.png" width="20px"><b> (01) 422 6797</b> | <img src="<?=$baseUrl?>img/what.png" width="18px"><b> 983 523 514</b> |
                                <span>ASISTENCIA TÉCNICA: <img src="<?=$baseUrl?>img/phone.png" width="20px"><b> (01) 325 6478</b></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 espacio1" id="espaciologin">
                <div class="card" style="background-color: transparent;border: 0px solid;">
                    <div class="card-body bg-white formulario" style="opacity: 0.9 ;border-radius: 20px 20px 0px 0px;font-family: 'Didact Gothic', sans-serif;">
                        <div class="text-center">
                            <span class="card-title" style="font-size: 25px;color: #0033A0"><b>Ingresa a Sysdentist</b></span>
                        </div>
                        <form method="post" id="form_login"><br><br>
                            <label for="">E-mail:</label>
                            <input class="form-control" type="email" name="email" required><br>
                            <label for="">Contraseña:</label>
                            <input class="form-control" type="text" name="password" required><br>
                           <!--  <label for="">RUC:</label>
                            <input class="form-control" type="text" name=""><br> -->
                            <div class="text-center">
                                <button type="submit" style="background-color: #00E1CD;" class="btn shadow-sm btn rounded-pill btn-block">Iniciar sesión</button><br><br>
                                <span class="text-secondary text-decoration-none"><a href="#!">¿Olvidó su contraseña?</a></span>
                            </div>
                        </form>
                    </div>
                    <div id="" class="card-footer text-white text-center" style="background-color: #0033A0;border-radius: 0px 0px 20px 20px;padding-inline-start: 20px;">
                        <a href="<?=$baseUrl?>Home/registro" class="text-decoration-none text-white"><b>Registrate Ahora</b></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 espacio2" id="espacioregistro">
                <div class="card" style="background-color: transparent;border: 0px solid;">
                    <div class="card-body bg-white formulario" style="opacity: 0.9 ;border-radius: 20px 20px 20px 20px;font-family: 'Didact Gothic', sans-serif;">
                        <div class="text-center">
                            <span class="card-title" style="font-size: 25px;color: #0033A0">Registrate en Sysdentist</span><hr>
                        </div>
                        <form method="post">
                            <label for="">RUC:</label>
                            <input class="form-control" type="text" name="">
                            <label for="">NOMBRE COMERCIAL:</label>
                            <input class="form-control" type="text" name="">
                            <label for="">USUARIO ADMINISTRADOR:</label>
                            <input class="form-control" type="text" name="">
                            <label for="">E-MAIL:</label>
                            <input class="form-control" type="text" name="">
                            <label for="">CONTRASEÑA:</label>
                            <input class="form-control" type="text" name="">
                            <label for="">CONFIRMAR CONTRASEÑA:</label>
                            <input class="form-control" type="text" name="">
                            <label for="">TIPO:</label>
                            <select name="" class="form-control" id="">
                                <option value="">Seleccionar Tipo</option>
                                <option value="">Doctor (a)</option>
                                <option value="">Radiólogo (a)</option>
                                <option value="">Hospital Nacional</option>
                            </select><br>
                            <div class="text-center">
                                <button type="submit" class="shadow-sm btn rounded-pill btn-block" style="background-color: #00E1CD">Registrar</button> <br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center text-black-50">
            <div class="container">
                <div class="footer-copyright">
                    Copyright ® 2016-2019 <a class="text-black-50" href="https://www.csiingenieros.com">CSI INTERNATIONAL SERVICES S.A.C.</a> <br>Todos los derechos reservados.
                </div>
            </div>
        </footer>
    </div>
    <script src="<?=$baseUrl?>js/home/login.js"></script>
    <script>
         $("#espacioregistro").hide()

         $("#buttonregistro").click(function(){
            $("#espaciologin").hide()
            $("#espacioregistro").show()
         })
    </script>
</body>
</html>