   <style>
       .fc-h-event{
          background-color: #2F9333;
       }
      .cece{
         margin: 40px auto;
         padding-left: 50px;
         padding-right: 50px;
      }
      @media only screen and (max-width: 800px){
         .cece{
            padding-left: 5px;
            padding-right: 5px;s
         }
      }
      
      @media only screen and (min-width: 2000px){
         .contenedores{
            padding-left: 350px;
            padding-right: 350px;
         }
      }
      @media only screen and (max-width: 2000px){
         .contenedores{
            padding-left: 20px;
            padding-right: 20px;
         }
      }
      @media only screen and (max-width: 500px){
         .contenedores{
            padding-left: 5px;
            padding-right: 5px;
         }
         }
         #notification_count {
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
      @media only screen and (max-width: 550px){
         .fc-toolbar {
            display: unset;
            padding: 0px 0px 10px 0px;
            justify-content: space-between;
            align-items: center;
            align-content: center;
            text-align: center;
            font-size: 15px;
         }
         .fc-right{
            padding: 10px 0px 20px 0px;
         }
      }
      /* @media only screen and (min-width: 100px){
         .fc-toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
         }
      }*/
      #aa:hover{
            background-color: #BBDEFB;
         }
         #ab:hover{
            background-color: #C8E6C9;
         }
         #ac:hover{
            background-color: #FFCCBC;
         }

         
      #carta{
         background-color: white;
         /*background:white url('../img/WallAgenda.jpg') center;
         background-size: 400px;
         background-repeat: no-repeat;
         background-position: center;*/
         }
      #carta:hover{
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      }
      .c1:hover {
         background-color: #FAFAFA;
         cursor: pointer;
         color: #CC0000;
         font-weight: bold;
      }
      .c2:hover{
         background-color: #FAFAFA;
         cursor: pointer;
         color: #42A5F5;
         font-weight: bold;
      }
      .c3:hover{
         background-color: #FAFAFA;
         cursor: pointer;
         color: #8619C8;
         font-weight: bold;
      }
      .c4:hover{
         background-color: #FAFAFA;
         cursor: pointer;
         color: #2F9333;
         font-weight: bold;
      }
      #paciente:hover{
         background-color: #D4E6F1;
         cursor: pointer;
      } 
      #paciente{
         background-color: #FAFAFA;
         cursor: pointer;
      }
    </style>

   <div class="contenedores">
      <div class="row" style="font-family: 'Quicksand', sans-serif;">
         <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3"><br>
            <div class="card" id="carta" style="border-radius: 80px;">
               <div class="card-body text-center">
                  <span style="font-size: 50px;font-family: 'Arimo', sans-serif;color: #77628c;" class="font-weight-light card-title"><b>12:05 am</b></span><br>
                  <span style="font-family: 'Quicksand', sans-serif;color: #5c636e;"><b>jueves, 5 de septiembre de 2019</b></span>
               </div>
            </div><br>
            <div class="text-center">
               <div class="row">
                  <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12"><br>
                     <button data-target="#ModalCita" data-toggle="modal"class="btn btn-block" style="background-color: #dcffcc;border: 0px solid;">
                        <span style="font-size: 15px;"><i class="fas fa-plus-circle"></i> Nueva Cita</span>
                     </button>
                  </div>
                  <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12"><br>
                     <button data-toggle="modal" data-target=".citasPaciente" class="btn btn-block" style="background-color: #9fdfcd;border: 0px solid;">
                        <span style="font-size: 15px;"><i class="fas fa-calendar-check"></i> Citas por Paciente</span>
                     </button>
                  </div>
                  <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12"><br>
                     <button data-toggle="modal" data-target=".citas" class="btn btn-block" style="background-color: #baabda;border: 0px solid;">
                        <span style="font-size: 15px;"><i class="fas fa-eye"></i> Mostrar citas</span>
                     </button>
                  </div>
                  <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12"><br>
                     <button data-toggle="modal" data-target=".agregar" class="btn btn-block" style="background-color: #d79abc;border: 0px solid;">
                        <span style="font-size: 15px;"><i class="fas fa-eye"></i> Agregar Paciente</span>
                     </button>
                  </div>
               </div><br>
               <div class="row">
                  <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12">
                     <div class="card c1">
                        <div class="card-body">
                           <span id="spn1" style="color: #CC0000"><i class="far fa-clock"></i><b> Emergencia</b> </span><br>
                           <span style="font-size: 13px">ALEJANDRA VERONICA CALLIRGOS BLAS <br>Desde: 12:00am Hasta 02:40pm</span>
                        </div>
                     </div><br>
                  </div>
                  <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12">
                     <div class="card c2">
                        <div class="card-body">
                           <span id="spn2" style="color: #42A5F5"><i class="far fa-clock"></i><b> Primera Cita (Diagnostico)</b></span> <br>
                           <span style="font-size: 13px">ALEJANDRA VERONICA CALLIRGOS BLAS <br> Desde: 01:00pm Hasta 02:30 pm</span>
                        </div>
                     </div><br>
                  </div>
                  <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12">
                     <div class="card c3">
                        <div class="card-body">
                           <span id="spn3" style="color: #8619C8"><i class="far fa-clock"></i><b> Observación</b> </span><br>
                           <span style="font-size: 13px">ALEJANDRA VERONICA CALLIRGOS BLAS <br>Desde: 05:00pm Hasta 06:00pm</span>
                        </div>
                     </div><br>
                  </div>
                  <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12">
                     <div class="card c4">
                        <div class="card-body">
                           <span id="spn4" style="color: #2F9333"><i class="far fa-clock"></i><b> Evolución</b> </span><br>
                           <span style="font-size: 13px">ALEJANDRA VERONICA CALLIRGOS BLAS <br>Desde:11:00am Hasta 04:40pm</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-9"><br><br><br>
            <div id="calendar" class="p-3 mb-2 text-dark" style="background-color: #FDFEFE;"></div> <b></b>
         </div>
      </div>
   </div>

   <footer class="text-center text-black-50">
      <div class="container">
         <div class="footer-copyright"><hr>
            Copyright ® 2016-2019 CSI INTERNATIONAL SERVICES S.A.C. <br>Todos los derechos reservados.<br>
         </div>
      </div>
   </footer>


   <!-- text-white   background-color: #3c8dbc;-->
   <!--AGENDAR CITA-->
      <div id="ModalCita" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
         <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="font-family: 'Quicksand', sans-serif; color: #000000;">
               <div class="modal-header" style=" background-color: #D4E6F1;color: #000000;"> 
                  <h5 class="modal-title" id="my-modal-title"><i class="fas fa-calendar-check"></i> <b>Agendar Cita</b></h5>
                  <button class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="">
                     <div class="hide01 row" style="padding-bottom: 25%;">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-7">
                           <div class="form-inline">
                              <input type="text" min="0" style="width: 80%;" placeholder="Busqueda..." class="form-control">&nbsp;&nbsp;
                              <button class="btn btn-outline-info btn-sm"><i class="fas fa-search"></i> Buscar</button>
                              <br><small>¿No encuentras tu paciente? <a href="#!" style="color: red;" class="nuevo">Registra un nuevo paciente aquí</a></small>
                           </div>
                        </div>
                        <div class="col-12"><hr>
                           <small><b>Resultados de la busqueda...</b></small><br>
                           <div class="card text-left" id="paciente">
                              <div class="card-body" id="search0">
                                 <div class="row">
                                    <div class="col-8">
                                       <span><i style="color: #85C1E9;font-size: 20px;" class="fas fa-chevron-right"></i>&nbsp;&nbsp; ALEJANDRA VERONICA CALLIRGOS BLAS (21 AÑOS)</span>
                                    </div>
                                    <div class="col-4">
                                       <span style="color:red">HC-CB74171528</span>
                                    </div>
                                 </div>
                              </div>
                           </div><br>
                           <div class="card text-left" id="paciente">
                              <div class="card-body" id="search0">
                                 <div class="row">
                                    <div class="col-8">
                                       <span><i style="color: #85C1E9;font-size: 20px;" class="fas fa-chevron-right"></i>&nbsp;&nbsp; ALEJANDRA VERONICA CALLIRGOS BLAS (21 AÑOS)</span>
                                    </div>
                                    <div class="col-4">
                                       <span style="color:red">HC-CB74171528</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="hide02">
                        <div class="row  text-left">
                           <div class="col-12 text-center">
                              <span style="font-weight: bold;font-size: 25px;color: #3c8dbc;">Nuevo Paciente</span>
                           </div>
                           <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                              <label for=""><b>DNI</b></label>
                              <input type="number" class="form-control" min="0" name="" id="">
                           </div>
                           <div class="col-8"></div>
                           <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                              <label for=""><b>Nombre</b></label>
                              <input type="text" class="form-control" name="" id="">
                           </div>
                           <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                              <label for=""><b>Apellidos</b></label>
                              <input type="text" class="form-control" name="" id="">
                           </div>
                           <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 text-center">
                              <label for=""><b>Genero</b></label><br>
                              <div class="custom-control custom-radio custom-control-inline">
                                 <input type="radio" id="input01" name="customRadioInline2" class="custom-control-input">
                                 <label class="custom-control-label" for="input01">Femenino</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                 <input type="radio" id="input02" name="customRadioInline2" class="custom-control-input">
                                 <label class="custom-control-label" for="input02">Masculino</label>
                              </div>
                           </div>
                           <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                              <label for=""><b>Fecha de Nacimiento</b></label>
                              <input type="date" class="form-control" name="" id="">
                           </div>
                           <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                              <label for=""><b>Correo electronico</b></label>
                              <input type="text" class="form-control" name="" id="">
                           </div>
                           <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                              <label for=""><b>Nº Celular</b></label>
                              <input type="number" min="0" class="form-control" name="" id="">
                           </div>
                           <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                              <label for=""><b>Tel. casa</b></label>
                              <input type="number" min="0" class="form-control" name="" id="">
                           </div>
                           <div class="col-12 text-center"><br>
                              <button class="btn btn-sm btn-success" id="registro">Registrar</button>
                           </div>
                        </div>
                     </div>
                     <div class="hide03">
                        <div class="text-center">
                           <h5 class="card-title text-center">ALEJANDRA VERONICA CALLIRGOS BLAS (21 AÑOS)</h5>
                           <h6 class="card-subtitle text-center mb-2" style="color: red;">HC-CB74171528</h6>
                        </div>
                     </div>
                     <div class="hide04">
                        <div class="p-3 mb-2 row" id="">
                           <div class="col-12">
                              Seleccionar tipo de cita: 
                           </div>
                           <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center"><br>
                              <div class="card border border-info">
                                 <div class="card-body">
                                    <h5 class="card-title">Emergencia </h5>
                                    <button type="button" class="btn btn-info btn-sm ocultar">Seleccionar</button>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center"><br>
                              <div class="card border border-info">
                                 <div class="card-body">
                                    <h5 class="card-title">Primera Cita (Diagnostico)</h5>
                                    <button type="button" class="btn btn-info btn-sm ocultar">Seleccionar</button>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center"><br>
                              <div class="card border border-info">
                                 <div class="card-body">
                                    <h5 class="card-title">Evolucion</h5>
                                    <button type="button" class="btn btn-info btn-sm ocultar">Seleccionar</button>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center"><br>
                              <div class="card border border-info">
                                 <div class="card-body">
                                    <h5 class="card-title">Observación</h5>
                                    <button type="button" class="btn btn-info btn-sm ocultar">Seleccionar</button>
                                 </div>
                              </div>
                           </div>
                           
                           <div class="col-12 text-center"><br>
                              <div class="text-left">
                                 <button type="button" id="volver1" class=" btn btn-danger btn-sm">Volver</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="hide05">
                        <div class="row">
                           <div class="col-12" style="font-family: 'Questrial', sans-serif;">
                              <b>Emergencia / </b>
                           </div>
                           <div class="col-12">
                              Seleccionar Doctor:
                           </div>
                           <div class="col-9"><br>
                              <input class="form-control" type="search" placeholder="Buscador">
                           </div>
                           <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center"><br>
                              <div class="card border border-info">
                                 <div class="card-body">
                                    <h5 class="card-title">Dr. Miguel Ladislao Flores</h5>
                                    <button type="button" class="btn btn-info btn-sm seleccion">Seleccionar</button>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center"><br>
                              <div class="card border border-info">
                                 <div class="card-body">
                                    <h5 class="card-title">Dr. Percy Millas Bonde</h5>
                                    <button type="button" class="btn btn-info btn-sm seleccion">Seleccionar</button>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center"><br>
                              <div class="card border border-info">
                                 <div class="card-body">
                                    <h5 class="card-title">Dr. María Delgado Reño</h5>
                                    <button type="button" class="btn btn-info btn-sm seleccion">Seleccionar</button>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center"><br>
                              <div class="card border border-info">
                                 <div class="card-body">
                                    <h5 class="card-title">Dr. Lizet Chauca Alvarez</h5>
                                    <button type="button" class="btn btn-info btn-sm seleccion">Seleccionar</button>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 text-center"><br>
                              <div class="row">
                                 <div class="col-3 text-left">
                                    <button type="button" id="volver2" class=" btn btn-danger btn-sm">Volver</button>
                                 </div>
                                 <div class="col-6">
                                    <ul class="btn-sm pagination justify-content-center">
                                       <li class="page-item disabled">
                                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                                       </li>
                                       <li class="page-item"><a class="page-link" href="#">1</a></li>
                                       <li class="page-item"><a class="page-link" href="#">2</a></li>
                                       <li class="page-item"><a class="page-link" href="#">3</a></li>
                                       <li class="page-item">
                                          <a class="page-link" href="#">Siguiente</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="hide06 text-left">
                        <div class="p-3 row" id="dd">
                           <div class="col-12 text-center">
                              <b>Emergencia / Dr. Miguel Ladislao Flores /</b>
                           </div>
                           <div class="col-12">
                              Seleccionar otra fecha y hora: 
                           </div>
                           <div class="col-6">
                              <label for=""><b>Dia</b></label>
                              <input type="date" class="form-control" name="" id="">
                           </div>
                           <div class="col-6">
                              <div class="row">
                                 <div class="col-6">
                                    <label for=""><b>hora</b></label>
                                    <select class="form-control" name="" id="">
                                    <option value="">06</option>
                                    <option value="">07</option>
                                    <option value="">08</option>
                                    <option value="">09</option>
                                    <option value="">10</option>
                                    <option value="">11</option>
                                    <option value="">12</option>
                                    <option value="">13</option>
                                    <option value="">14</option>
                                    <option value="">15</option>
                                    <option value="">16</option>
                                    <option value="">17</option>
                                    <option value="">18</option>
                                    <option value="">19</option>
                                    <option value="">20</option>
                                    <option value="">21</option>
                                    <option value="">22</option>
                                    </select>
                                 </div>
                                 <div class="col-6">
                                    <label for=""><b>Minutos</b></label>
                                    <select class="form-control" name="" id="">
                                       <option value="">00</option>
                                       <option value="">05</option>
                                       <option value="">10</option>
                                       <option value="">15</option>
                                       <option value="">20</option>
                                       <option value="">25</option>
                                       <option value="">30</option>
                                       <option value="">35</option>
                                       <option value="">40</option>
                                       <option value="">50</option>
                                       <option value="">55</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="col-6">
                              <label for=""><b>Duración</b></label>
                              <select id="" name="duracion" class="form-control">
                                 <option value="20">20 minutos</option>
                                 <option value="40">40 minutos</option>
                                 <option value="60">60 minutos</option>
                                 <option value="80">80 minutos</option>
                                 <option value="100">100 minutos</option>
                                 <option value="120">120 minutos</option>
                                 <option value="140">140 minutos</option>
                                 <option value="160">160 minutos</option>
                                 <option value="180">180 minutos</option>
                                 <option value="200">200 minutos</option>
                                 <option value="220">220 minutos</option>
                                 <option value="240">240 minutos</option>
                                 <option value="260">260 minutos</option>
                                 <option value="280">280 minutos</option>
                                 <option value="300">300 minutos</option>
                                 <option value="320">320 minutos</option>
                                 <option value="340">340 minutos</option>
                                 <option value="360">360 minutos</option>
                                 <option value="380">380 minutos</option>
                                 <option value="400">400 minutos</option>
                                 <option value="420">420 minutos</option>
                                 <option value="440">440 minutos</option>
                                 <option value="460">460 minutos</option>
                                 <option value="480">480 minutos</option>
                                 <option value="500">500 minutos</option>
                                 <option value="520">520 minutos</option>
                                 <option value="540">540 minutos</option>
                                 <option value="560">560 minutos</option>
                                 <option value="580">580 minutos</option>
                                 <option value="600">600 minutos</option>
                                 <option value="620">620 minutos</option>
                                 <option value="640">640 minutos</option>
                                 <option value="660">660 minutos</option>
                                 <option value="680">680 minutos</option>
                                 <option value="700">700 minutos</option>
                                 <option value="720">720 minutos</option>
                                 <option value="740">740 minutos</option>
                                 <option value="760">760 minutos</option>
                                 <option value="780">780 minutos</option>
                                 <option value="800">800 minutos</option>
                                 <option value="820">820 minutos</option>
                                 <option value="840">840 minutos</option>
                                 <option value="860">860 minutos</option>
                                 <option value="880">880 minutos</option>
                                 <option value="900">900 minutos</option>
                                 <option value="920">920 minutos</option>
                                 <option value="940">940 minutos</option>
                                 <option value="960">960 minutos</option>
                                 <option value="980">980 minutos</option>
                              </select>
                           </div>
                           <div class="col-12">
                              <label for=""><b>Observaciones</b></label>
                              <textarea id="my-textarea" class="form-control" name="" rows="3"></textarea>
                           </div>
                           <div class="col-12"><br>
                              <div class="row">
                                 <div class="col-6 text-left">
                                    <button type="button" id="volver3" class=" btn btn-danger btn-sm">Volver</button>
                                 </div>
                                 <div class="col-6 text-right">
                                    <button type="button" data-dismiss="modal" id="" class=" btn btn-success btn-sm">guardar</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   <!--CITAS POR PACIENTE-->
      <div class="modal fade citasPaciente" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content" style="font-family: 'Quicksand', sans-serif; color: #000000;">
               <div class="modal-header" style=" background-color: #D4E6F1;color: #000000;"> 
                  <h5 class="modal-title" id="my-modal-title"><i class="fas fa-calendar-check"></i> <b>Citas por Paciente</b></h5>
                  <button class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-0 col-sm-0 col-md-0 col-lg-3 col-xl-3"></div>
                     <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                        <label for="">Paciente</label>
                        <input type="text" placeholder="Busqueda..." class="form-control" name="" id="">
                     </div>
                     <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                        <label for="">Buscar por Fecha</label>
                        <input type="date" class="form-control" name="" id="">
                     </div>
                     <div class="col-0 col-sm-0 col-md-0 col-lg-3 col-xl-3"></div>
                     <div class="col-12 text-center"><br>
                        <button class="btn btn-sm btn-success"><b>Buscar</b></button>
                     </div>
                  </div><hr>
                  <div><br>
                     <table class="table table-bordered table-hover" style="cursor:pointer;">
                        <thead class="">
                           <tr style="color: #3c8dbc;font-weight: bold;font-size: 16px;">
                              <th>Tipo de Cita</th>
                              <th>Medico</th>
                              <th class="text-center">Fecha</th>
                              <th class="text-center">Hora</th>
                           </tr>
                        </thead>
                        <tbody style="color: #515A5A;font-size: 14pxs;">
                           <tr>
                              <td><span style="color: #CC0000;"><b>Emergencia</b></span></td>
                              <td>Rd. ENRIQUE SOTO QUISPE MENDOZA</td>
                              <td class="text-center">20-10-2019</td>
                              <td class="text-center">17:50 pm</td>
                           </tr>
                           <tr>
                              <td><span style="color: #42A5F5;"><b>Primera Cita</b></span></td>
                              <td>Med. ESMERALDA TORRES SOLORZANO</td>
                              <td class="text-center">15-10-2019</td>
                              <td class="text-center">12:12 pm</td>
                           </tr>
                           <tr>
                              <td><span style="color: #8619C8;"><b>Observación</b></span></td>
                              <td>Rd. MARIA ATAUCCANCHA HUILCAS</td>
                              <td class="text-center">02-10-2019</td>
                              <td class="text-center">15:50 pm</td>
                           </tr>
                           <tr>
                              <td><span style="color: #2F9333;"><b>Evolución</b></span></td>
                              <td>Med. KEVIN HINOSTROZA JIMENEZ</td>
                              <td class="text-center">28-09-2019</td>
                              <td class="text-center">14:11 pm</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>

   <!--MOSTRAR CITAS-->
      <div class="modal fade citas" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="font-family: 'Quicksand', sans-serif; color: #000000;">
               <div class="modal-header" style=" background-color: #D4E6F1;color: #000000;"> 
                  <h5 class="modal-title" id="my-modal-title"><i class="fas fa-calendar-check"></i> <b>Citas</b></h5>
                  <button class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="table">
                    <table class="table table-borderless">
                       <thead>
                          <tr>
                              <th>Paciente</th>
                              <th>Medico</th>
                              <th>Tipo de Cita</th>
                              <th class="text-center">Fecha</th>
                              <th class="text-center">Hora</th>
                          </tr>
                       </thead>
                       <tbody>
                          <tr>
                              <td>ALEJANDRA VERONICA CALLIRGOS BLAS</td>
                              <td>Rd. ENRIQUE SOTO QUISPE MENDOZA</td>
                              <td><span style="color: #CC0000;"><b>Emergencia</b></span></td>
                              <td class="text-center">20-10-2019</td>
                              <td class="text-center">17:50 pm</td>
                          </tr>
                          <tr>
                              <td>ALEJANDRA VERONICA CALLIRGOS BLAS</td>
                              <td>Rd. ENRIQUE SOTO QUISPE MENDOZA</td>
                              <td><span style="color: #CC0000;"><b>Emergencia</b></span></td>
                              <td class="text-center">20-10-2019</td>
                              <td class="text-center">17:50 pm</td>
                          </tr>
                          <tr>
                              <td>ALEJANDRA VERONICA CALLIRGOS BLAS</td>
                              <td>Rd. ENRIQUE SOTO QUISPE MENDOZA</td>
                              <td><span style="color: #CC0000;"><b>Emergencia</b></span></td>
                              <td class="text-center">20-10-2019</td>
                              <td class="text-center">17:50 pm</td>
                          </tr>
                          <tr>
                              <td>ALEJANDRA VERONICA CALLIRGOS BLAS</td>
                              <td>Rd. ENRIQUE SOTO QUISPE MENDOZA</td>
                              <td><span style="color: #CC0000;"><b>Emergencia</b></span></td>
                              <td class="text-center">20-10-2019</td>
                              <td class="text-center">17:50 pm</td>
                          </tr>
                          <tr>
                              <td>ALEJANDRA VERONICA CALLIRGOS BLAS</td>
                              <td>Rd. ENRIQUE SOTO QUISPE MENDOZA</td>
                              <td><span style="color: #CC0000;"><b>Emergencia</b></span></td>
                              <td class="text-center">20-10-2019</td>
                              <td class="text-center">17:50 pm</td>
                          </tr>
                       </tbody>
                    </table>
                  </div>
               </div>
            </div>
         </div>
      </div>

   <!--AGREGAR PACIENTE-->
      <div class="modal fade agregar" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="font-family: 'Quicksand', sans-serif; color: #000000;">
               <div class="modal-header" style=" background-color: #D4E6F1;color: #000000;"> 
                  <h5 class="modal-title" id="my-modal-title"><i class="fas fa-calendar-check"></i> <b>Citas</b></h5>
                  <button class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="">
                     <div class="row  text-left">
                        <div class="col-12 text-center">
                           <span style="font-weight: bold;font-size: 25px;color: #3c8dbc;">Nuevo Paciente</span>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                           <label for=""><b>DNI</b></label>
                           <input type="number" class="form-control" min="0" name="" id="">
                        </div>
                        <div class="col-7"></div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                           <label for=""><b>Nombre</b></label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                           <label for=""><b>Apellidos</b></label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 text-center">
                           <label for=""><b>Genero</b></label><br>
                           <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="input03" name="customRadioInline2" class="custom-control-input">
                              <label class="custom-control-label" for="input03">Femenino</label>
                           </div>
                           <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="input04" name="customRadioInline2" class="custom-control-input">
                              <label class="custom-control-label" for="input04">Masculino</label>
                           </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                           <label for=""><b>Fecha de Nacimiento</b></label>
                           <input type="date" class="form-control" name="" id="">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                           <label for=""><b>Correo electronico</b></label>
                           <input type="text" class="form-control" name="" id="">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                           <label for=""><b>Nº Celular</b></label>
                           <input type="number" min="0" class="form-control" name="" id="">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                           <label for=""><b>Tel. casa</b></label>
                           <input type="number" min="0" class="form-control" name="" id="">
                        </div>
                        <div class="col-12 text-center"><br>
                           <button class="btn btn-sm btn-success" id="registro">Registrar</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   <!--CITAS-->
      <div id="estados" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-body" style="font-family: 'Manjari', sans-serif;">
                  <div class="row text-center">
                     <div class="col-11">
                        <h5 class="card-title text-center">ALEJANDRA VERONICA CALLIRGOS BLAS (21 AÑOS)</h5>
                        <h6 class="card-subtitle text-center" style="color:#FF0000;">HC-CB74171528</h6>
                     </div>
                     <div class="col-1 text-left">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                  </div><hr>
                  <div class="container text-center">
                     <button class="btn text-white" style="background-color: #6bc5d2;" type="button"><i class="fas fa-bell"></i> Notificar</button>
                     <button class="btn text-white" style="background-color: #105e62;" type="button"><i class="fas fa-clock"></i> Reprogramar</button>
                     <button class="btn text-white" style="background-color: #b5525c;" type="button"><i class="fas fa-times-circle"></i> Eliminar</button>
                  </div>
                  <div>
                     <div class="row">
                        <div class="col-6"><br>
                           <label for="">Fecha</label>
                           <input class="form-control" type="date" disabled name="" value="9999-12-31" id="">
                        </div>
                        <div class="col-3"><br>
                           <label for="">Hora</label>
                           <input class="form-control" type="text" disabled name="" value="03" id="">
                        </div>
                        <div class="col-3"><br>
                           <label for="">Minutos</label>
                           <input class="form-control" type="text" disabled name="" value="40" id="">
                        </div>
                        <div class="col-6"><br>
                           <label for="">Duración</label>
                           <input class="form-control" type="text" disabled name="" value="40 minutos" id="">
                        </div>
                        <div class="col-6"><br>
                           <label for="">Medico</label>
                           <input class="form-control" type="text" disabled name="" value="Marianela Rodriguez Wang" id="">
                        </div>
                        <div class="col-12"><br>
                           <label for="">Observaciones</label>
                           <textarea class="form-control" disabled name="" id="" rows="3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae mollitia ad illo quaerat adipisci, earum eaque suscipit a ipsum cupiditate sit modi voluptatibus, quas laudantium ducimus commodi fuga repellat provident.</textarea>
                        </div>
                     </div>
                  </div>
                  <div class="container text-center"><hr>
                     <div class="text-left">
                        <span style="color: #616A6B; font-size: 20px;"><b>Asignar estado: </b></span>
                     </div>
                     <button type="button" style="background-color: #008d4c; color: white;" class="btn btn-sm">Atendiendose</button>
                     <button type="button" style="background-color: #367fa9; color: white;" class="btn btn-sm">Atendido</button>
                     <button type="button" style="background-color: #f39c12; color: white;" class="btn btn-sm">No Asiste</button>
                     <button type="button" style="background-color: #dd4b39; color: white;" class="btn btn-sm">Anulado</button>
                     <button type="button"  style="background-color: #605ca8; color: white;" class="btn btn-sm">Postergado</button>
                  </div>
               </div>
            </div>
         </div>
      </div>

   <!---->
      <div class="modal fade" id="luego" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: transparent; border: 0px solid #ffff;">
               <div class="row">
                  <div class="col-6">
                     <img src="../img/docanimacionsombra.png" width="250" alt="">
                  </div>
                  <div class="col-6">
                     <div class="card">
                        <div class="card-body">
                           <span>Estamos trabajando para que puedas disfrutar de estas funciones adicionales.</span>
                           <span>Te informaremos cada actualización del sistema para que no te pierdas de nada</span>
                        </div>
                     </div>
                     <div class="text-center"><br>
                        <a id="" href="pacientes.php" class="text-white btn btn-sm btn-danger">Volver</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   <!--SOPORTE-->
      <style>
         #sys{
            font-size: 50px;
         }
         #sysd{
            width: 50px;
         }
         @media only screen and (max-width: 650px){
            .fotodoctor{
               display: none;
            }
         }
         @media only screen and (max-width: 1000px){
         /*.fotodoctor{
               display: none;
            }*/
            #sys{
               font-size: 30px;
            }
            #sysd{
               width: 30px;
            }
         }
      </style>

      <div id="soporte" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-body">
                  <div class="text-center">
                     <div style="background-color: #00216B">
                        <span id="sys" class="navbar-brand" style="color:white;"><img  id="sysd" src="../img/nav-03.png" alt=""><b>SysDentist</b></span><br>
                     </div>
                     <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 fotodoctor">
                           <img src="../img/doctor001.png" width="180px" alt="">
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8"><br><br>
                           <div class="card" style="border-radius: 40px 40px 40px 40px;">
                              <div class="card-body text-center"><br><br>
                                 <span>ASISTENCIA TÉCNICA:<br>
                                    <img src="../img/viejo.png" width="20px" alt=""><b>(01) 325 6478</b> <br>
                                 </span>
                                 <hr>
                                 <span>CONSULTAS Y SUGERENCIAS:</span><br>
                                 <img src="../img/viejo.png" width="20px" alt=""><b>(01) 422 6797</b> <br>
                                 <img src="../img/whatsapp.png" width="20px" alt=""> <b>983 523 514 </b><br><hr>
                                 <img src="../img/logocsi.png" width="200px" alt=""><br><br>
                                 <img src="../img/sysdentist.png" width="120px" alt=""><br><br>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 text-center">
                           <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><b>Cerrar</b></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <!---->
      <div id="estados" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-body" style="font-family: 'Manjari', sans-serif;">
                  <div class="row text-center">
                     <div class="col-11">
                        <h5 class="card-title text-center">ALEJANDRA VERONICA CALLIRGOS BLAS (21 AÑOS)</h5>
                        <h6 class="card-subtitle text-center" style="color:#FF0000;">HC-CB74171528</h6>
                     </div>
                     <div class="col-1 text-left">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                  </div><hr>
                  <div class="container text-center">
                     <button class="btn text-white" style="background-color: #6bc5d2;" type="button"><i class="fas fa-bell"></i> Notificar</button>
                     <button class="btn text-white" style="background-color: #105e62;" type="button"><i class="fas fa-clock"></i> Reprogramar</button>
                     <button class="btn text-white" style="background-color: #b5525c;" type="button"><i class="fas fa-times-circle"></i> Eliminar</button>
                  </div>
                  <div>
                     <div class="row">
                        <div class="col-6"><br>
                           <label for="">Fecha</label>
                           <input class="form-control" type="date" disabled name="" value="9999-12-31" id="">
                        </div>
                        <div class="col-3"><br>
                           <label for="">Hora</label>
                           <input class="form-control" type="text" disabled name="" value="03" id="">
                        </div>
                        <div class="col-3"><br>
                           <label for="">Minutos</label>
                           <input class="form-control" type="text" disabled name="" value="40" id="">
                        </div>
                        <div class="col-6"><br>
                           <label for="">Duración</label>
                           <input class="form-control" type="text" disabled name="" value="40 minutos" id="">
                        </div>
                        <div class="col-6"><br>
                           <label for="">Medico</label>
                           <input class="form-control" type="text" disabled name="" value="Marianela Rodriguez Wang" id="">
                        </div>
                        <div class="col-12"><br>
                           <label for="">Observaciones</label>
                           <textarea class="form-control" disabled name="" id="" rows="3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae mollitia ad illo quaerat adipisci, earum eaque suscipit a ipsum cupiditate sit modi voluptatibus, quas laudantium ducimus commodi fuga repellat provident.</textarea>
                        </div>
                     </div>
                  </div>
                  <div class="container text-center"><hr>
                     <div class="text-left">
                        <span style="color: #616A6B; font-size: 20px;"><b>Asignar estado: </b></span>
                     </div>
                     <button type="button" style="background-color: #008d4c; color: white;" class="btn btn-sm">Atendiendose</button>
                     <button type="button" style="background-color: #367fa9; color: white;" class="btn btn-sm">Atendido</button>
                     <button type="button" style="background-color: #f39c12; color: white;" class="btn btn-sm">No Asiste</button>
                     <button type="button" style="background-color: #dd4b39; color: white;" class="btn btn-sm">Anulado</button>
                     <button type="button"  style="background-color: #605ca8; color: white;" class="btn btn-sm">Postergado</button>
                  </div>
               </div>
            </div>
         </div>
      </div>

   <!--later-->
      <div class="modal fade" id="later" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: transparent; border: 0px solid #ffff;">
               <div class="row">
                  <div class="col-6">
                     <img src="../img/docanimacionsombra.png" width="250" alt="">
                  </div>
                  <div class="col-6">
                     <div class="card">
                        <div class="card-body">
                           <span>Estamos trabajando para que puedas disfrutar de estas funciones adicionales.</span>
                           <span>Te informaremos cada actualización del sistema para que no te pierdas de nada</span>
                        </div>
                     </div>
                     <div class="text-center"><br>
                        <a id="" href="detalles.php" data-dismiss="modal" class="text-white btn btn-sm btn-danger">Volver</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <script>
         /* $("#luego").modal("show")*/
            document.addEventListener("DOMContentLoaded", function() {
               var calendarEl = document.getElementById("calendar");

               var calendar = new FullCalendar.Calendar(calendarEl, {
               plugins: [ "interaction", "dayGrid", "timeGrid" ],
               header: {
                  left: "prev,next today",
                  center: "title",
                  right: "dayGridMonth,timeGridWeek,timeGridDay"
               },
               locale: "es",
               defaultDate: "2019-08-12",
               selectable: true,
               selectMirror: true,
               editable: true,
               eventLimit: true, 
               events: [
               {
                  title: "Evolución",
                  start: "2019-08-13",
                  color: "#2F9333"
               },
               {
                     title: "Observación",
                     start: "2019-08-11",
                     color: '#8619C8'
               },
               {
                     title: "Primera Cita (Diagnostico)",
                     start: "2019-08-15",
                     color: '#42A5F5'
               },
               {
                     title: "Emergencia",
                     start: "2019-08-20",
                     color: ' #CC0000'
               }
               ],
               eventClick: function(info) {
                  console.log(info);
                  $("#estados").modal("show");
               },
               mouseEnterInfo : function(info) {
                  console.log(info);
               }
            });

            calendar.render();
         });
      </script>
      
      <script>
         $(".hide01").show()
         $(".hide02,.hide03,.hide04,.hide05,.hide06").hide();
         $(".nuevo").click(function(){
            $(".hide02").show()
            $(".hide01, .hide03, .hide04, .hide05, .hide06").hide();
         })
         $("#registro,#paciente,#volver2").click(function(){
            $(".hide03, .hide04").show()
            $(".hide01, .hide02, .hide05, .hide06").hide();
         })
         $(".ocultar,#volver3").click(function(){
            $(".hide03, .hide05").show()
            $(".hide01, .hide02, .hide04, .hide06").hide();
         })
         $(".seleccion").click(function(){
            $(".hide03, .hide06").show()
            $(".hide01, .hide02, .hide04, .hide05").hide();
         })
         $("#volver1").click(function(){
            $(".hide01").show()
            $(".hide02,.hide03,.hide04,.hide05,.hide06").hide();
         })
      </script>

   <!--td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2019-07-28"></td-->

         <script>
           // $(document).ready(function(){
           //    $(".fc-event").click(function(){
           //       $("#estados").modal();
           //    });
           // });
         </script>


</body>
</html>