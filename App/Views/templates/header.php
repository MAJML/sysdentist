<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PACIENTES</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Questrial|Comfortaa|Gayathri|Pompiere&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?=$baseUrl?>css/style.css"> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- PLUGIN PAGINADO -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.min.js"></script>

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
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

</head>
<body style="background-color: #FCFCFC">
   <style>
      #aa:hover{
            background-color: #BBDEFB;
         }
         #ab:hover{
            background-color: #C8E6C9;
         }
         #ac:hover{
            background-color: #FFCCBC;
         }
      #notification_count 
         {
         width: 21px;
         height: 21px;
         padding: 0px 7px 0px 7px;
         background: #FF4545;
         color: #ffffff;
         font-weight: bold;
         margin-left: 16px;
         border-radius:  50%;
         -moz-border-radius: 50%; 
         -webkit-border-radius: 50%;
         position: absolute;
         margin-top: -8px;
         font-size: 11px;
         }
         .dropdown-content{
               padding-top: 50%;
         }
         @media only screen and (max-width: 991px){
            .agenda{
               display: none;
            }
            .pacientes{
               display: none;
            }
            .menu{
               display: block;
            }
         }
         @media only screen and (min-width: 992px){
            .menu{
               display:none;
               cursor: pointer;
            }
            #navs{
               display: none;
            }
         }
         @media (min-width: 1200px){
         .col-xl-12 {
            padding-left: 120px;
            padding-right: 120px;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
         }
         }
         @media (min-width: 992px){
            .col-lg-12 {
               padding-left: 120px;
            padding-right: 120px;
               -ms-flex: 0 0 100%;
               flex: 0 0 100%;
               max-width: 100%;
            }
            }
   </style>
    <nav class="navbar navbar-expand-lg" style="background-color: #3c8dbc;">
      <span class="navbar-brand" style="font-size: 20px;color: white;"><a class="text-decoration-none text-white" href="<?=$baseUrl?>pacientes"><img width="16px" src="<?=$baseUrl?>img/nav.png" alt="">&nbsp;<b>Cedident</b></a></span>
      <span class="agenda"><a style="color: white;" class="nav-link"  href="<?=$baseUrl?>agenda" hidden>AGENDA</a></span>
      <span class=""><a style="color: white;" class="nav-link"  href="<?=$baseUrl?>pacientes">PACIENTES</a></span>
      <div class="menu align-content-center">
         <button class="btn btn-default" data-toggle="dropdown"><span id="notification_count">1</span><img src="<?=$baseUrl?>img/nott.png" width="28px" alt=""></button>
         <button style="font-size: 25px;" class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
         </button>
         <div class="dropdown-notifications sw-open">
            <div class="dropdown">
               <div class="dropdown-menu dropdown-menu-right" style="width: 18rem;">
                  <div class="card-header" style="padding: .30rem 0.5rem; background-color: white;">
                     <span style="color: #34495E"><h6><b>Notificaciones</b></h6></span>
                  </div>
                  <div class="card-body">
                     <div class="row" id="aa">
                        <div class="col-12 text-center p-1 text-center">
                              <img src="<?=$baseUrl?>img/medico1.png" width="75px" alt="">
                        </div>
                        <div class="col-12" style="font-size: 13px">
                           <span style="font-size: 13px" class="text-right text-muted">01/10/2019 12:10</span><br>
                           El Paciente<b> ALEJANDRA VERONICA CALLIRGOS BLAS</b><br> ha sido referido satisfactoriamente al <b>Dr. Enrique Soto Quispe Mendoza</b><br>
                           <span style="font-size: 12px" class="text-danger">H. Nacional Loayza - Sede Los Olivos</span>
                           <div class="text-right">
                           <h6><a href="#" style="background-color: #42A5F5" class="badge text-white" data-toggle="modal" data-target=".receptor">Ver</a></h6>
                           </div>
                        </div>
                     </div><hr>
                     <div class="row" id="ab">
                        <div class="col-12 text-center p-1">
                           <img src="<?=$baseUrl?>img/medico2.png" width="75px" alt="">
                        </div>
                        <div class="col-12" style="font-size: 13px">
                           <span style="font-size: 13px" class="text-right text-muted">02/10/2019 03:30</span><br>
                              La <b>Dra. Marianelaas Rodriguez Wang</b><br> le refirió al Paciente <b>ALEJANDRA VERONICA CALLIRGOS BLAS</b> <br>
                              <span style="font-size: 12px" class="text-danger">H. Nacional Loayza - Sede Los Olivos</span>
                           <div class="text-right">
                           <h6><a href="#" style="background-color: #27AE60" class="badge text-white">Ver</a></h6>
                           </div>
                        </div>
                     </div><hr>
                     <div class="row" id="ac">
                        <div class="col-12 text-center p-1">
                           <img src="<?=$baseUrl?>img/medico1.png" width="75px" alt="">
                        </div>
                        <div class="col-12" style="font-size: 13px">
                           <span style="font-size: 13px" class="text-right text-muted">02/10/2019 04:50</span><br>
                              El <b>Dr. Enrique Soto Quispe Mendoza</b><br> Terminó el estudio del Paciente <b>ALEJANDRA VERONICA CALLIRGOS BLAS</b> <br>
                           <span style="font-size: 12px" class="text-danger">H. Nacional Loayza - Sede Los Olivos</span><br>
                           <div class="text-right">
                              <h6><a href="#" style="background-color: #FF8A65" class="badge btn-sm text-white" data-toggle="modal" data-target="#later">Finalizado</a></h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
         <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item" id="navs">
               <div class="row text-center">
                  <div class="col-6 col-sm-3 col-md-2 col-lg-1 col-xl-1 text-center">
                     <span class=""><a style="color: white;" class="nav-link"  href="agenda.php" hidden>AGENDA</a></span>
                  </div>
                  <div class="col-6 col-sm-3 col-md-2 col-lg-1 col-xl-1 text-center">
                     <span class=""><a style="color: white;" class="nav-link"  href="pacientes.php">PACIENTES</a></span>
                  </div>
                  <div class="col-6 col-sm-3 col-md-2 col-lg-1 col-xl-1 text-center">
                     <a style="color: white;" class="nav-link btn-outline-info" data-toggle="modal" data-target="#later"><span id="notification_count">1</span><img src="<?=$baseUrl?>img/charlaa.png" width="25px" alt=""></a>
                  </div>
                  <div class="col-6 col-sm-3 col-md-2 col-lg-2 col-xl-2 text-center">
                     <div style="padding-top: 6px;">&nbsp;&nbsp;
                        <a href="#!" class="text-decoration-none text-white" style="font-size: 30px;">
                           <img src="<?=$baseUrl?>img/question.png" data-toggle="modal" data-target="#soporte" width="25px" alt="">
                        </a>
                     </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-4 col-lg-7 col-xl-7 text-center">
                     <div class="dropdown">
                        <a style="color: white;" href="#!" class="nav-link btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           &nbsp;&nbsp;<?=$_SESSION['nombre_comercial']?>&nbsp;<img src="<?=$baseUrl?>img/cir.png" width="10px" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" style="position: absolute">
                           <div class="container text-center">
                              <span><img src="<?=$baseUrl?>img/logofondoblanco.png" width="120"></span><br>
                              <span class=""><?=$_SESSION['nombre_comercial']?></span><hr>
                              <p class="text-primary"><?=$_SESSION['tipo_negocio']?></p>
                           </div>
                           <a class="dropdown-item text-center" href="<?=$baseUrl?>usuarios" <?= ($_SESSION['id_empresa'] != '' || $_SESSION['id_empresa'] != null)? 'hidden': '' ?>>USUARIOS</a>
                           <a class="dropdown-item text-center" href="<?=$baseUrl?>sedes" <?= ($_SESSION['id_empresa'] != '' || $_SESSION['id_empresa'] != null)? 'hidden': '' ?>>SEDES</a>
                           <a class="text-center dropdown-item" style="color: red" href="<?=$baseUrl?>Home/cerrarSesion">CERRAR SESIÓN</a>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
         </ul>
      </div>
      <div class="collapse navbar-collapse " id="navbarResponsive">
         <ul class="navbar-nav ml-auto  text-center">
            <li class="nav-item">
               <button class="btn btn-default" data-toggle="dropdown"><span id="notification_count">1</span><img src="<?=$baseUrl?>img/nott.png" width="28px" alt=""></button>
                <div class="dropdown-notifications sw-open">
                    <div class="dropdown">
                        <div class="dropdown-menu dropdown-menu-right"style="width: 30rem;">
                           <div class="card-header" style="padding: .30rem 0.5rem; background-color: white;">
                              <span style="color: #34495E"><h6><b>Notificaciones</b></h6></span>
                           </div>
                           <div class="card-body">
                              <div class="row" id="aa">
                                 <div class="col-2 p-1 text-center">
                                       <img src="<?=$baseUrl?>img/medico1.png" width="75px" alt="">
                                 </div>
                                 <div class="col-10" style="font-size: 13px">
                                       <span style="font-size: 13px" class="text-right text-muted">01/10/2019 12:10</span><br>
                                       El Paciente<b> ALEJANDRA VERONICA CALLIRGOS BLAS</b><br> ha sido referido satisfactoriamente al <b>Dr. Enrique Soto Quispe Mendoza</b><br>
                                       <span style="font-size: 12px" class="text-danger">H. Nacional Loayza - Sede Los Olivos</span>
                                       <div class="text-right">
                                       <h6><a href="#" style="background-color: #42A5F5" class="badge text-white" data-toggle="modal" data-target=".receptor">Ver</a></h6>
                                       </div>
                                 </div>
                              </div><hr>
                              <div class="row" id="ab">
                                 <div class="col-2 p-1">
                                    <img src="<?=$baseUrl?>img/medico2.png" width="75px" alt="">
                                 </div>
                                 <div class="col-10" style="font-size: 13px">
                                    <span style="font-size: 13px" class="text-right text-muted">02/10/2019 03:30</span><br>
                                       La <b>Dra. Marianela Rodriguez Wang</b><br> le refirió al Paciente <b>ALEJANDRA VERONICA CALLIRGOS BLAS</b> <br>
                                       <span style="font-size: 12px" class="text-danger">H. Nacional Loayza - Sede Los Olivos</span>
                                    <div class="text-right">
                                    <h6><a href="#" style="background-color: #27AE60" class="badge text-white">Ver</a></h6>
                                    </div>
                                 </div>
                              </div><hr>
                              <div class="row" id="ac">
                                 <div class="col-2 p-1">
                                    <img src="<?=$baseUrl?>img/medico1.png" width="75px" alt="">
                                 </div>
                                 <div class="col-10" style="font-size: 13px">
                                    <span style="font-size: 13px" class="text-right text-muted">02/10/2019 04:50</span><br>
                                       El <b>Dr. Enrique Soto Quispe Mendoza</b><br> Terminó el estudio del Paciente <b>ALEJANDRA VERONICA CALLIRGOS BLAS</b> <br>
                                    <span style="font-size: 12px" class="text-danger">H. Nacional Loayza - Sede Los Olivos</span><br>
                                    <div class="text-right">
                                       <h6><a href="#" style="background-color: #FF8A65" class="badge btn-sm text-white" data-toggle="modal" data-target="#later">Finalizado</a></h6>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a style="color: white;" class="nav-link btn-outline-info" data-toggle="modal" data-target="#later"><span id="notification_count">1</span><img src="<?=$baseUrl?>img/charlaa.png" width="25px" alt=""></a>
            </li>
            <li style="padding-top: 6px;">&nbsp;&nbsp;
               <a href="#!" class="text-decoration-none text-white" style="font-size: 30px;">
                  <img src="<?=$baseUrl?>img/question.png" data-toggle="modal" data-target="#soporte" width="25px" alt="">
               </a>
            </li>
            <li class="nav-item">
               <div class="dropdown">
                  <a style="color: white;" href="#!" class="nav-link btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  &nbsp;&nbsp;<?=$_SESSION['nombre_comercial']?>&nbsp;<img src="<?=$baseUrl?>img/cir.png" width="10px" alt="">
                  </a>
                  <div class="dropdown-menu dropdown-menu-center">
                     <div class="container text-center">
                        <span><img src="<?=$baseUrl?>img/logofondoblanco.png" width="120"></span><br>
                        <span class=""><?=$_SESSION['nombre_comercial']?></span><hr>
                        <p class="text-primary"><?=$_SESSION['tipo_negocio']?></p>
                     </div>
                     <a class="dropdown-item text-center" href="<?=$baseUrl?>usuarios" <?= ($_SESSION['id_empresa'] != '' || $_SESSION['id_empresa'] != null)? 'hidden': '' ?>>USUARIOS</a>
                     <a class="dropdown-item text-center" href="<?=$baseUrl?>sedes" <?= ($_SESSION['id_empresa'] != '' || $_SESSION['id_empresa'] != null)? 'hidden': '' ?>>SEDES</a>
                     <a class="text-center dropdown-item" style="color: red" href="<?=$baseUrl?>Home/cerrarSesion"><b>CERRAR SESIÓN</b></a>
                  </div>
               </div>
            </li>
         </ul>
      </div>
   </nav>
   