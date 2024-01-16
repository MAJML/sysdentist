<style>
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
         .flex-container{
            display: flex;
         }
         .flex-item{
            display: inherit;
            width:43px;
            height: 35px;
            border: 1px solid;
            cursor: pointer ;
            margin:5px;
         }
         .flex-item:hover{
            background-color: #ECECEC;
            color: black;
         }
         .flex-item1{
            display: inherit;
            width:43px;
            height: 35px;
            background-color: transparent;
            margin:5px;
         }
         .flex-item p{
            width:100%; 
            text-align:center; 
            -webkit-align-self: center;
            -ms-flex-item-align: center;
            align-self: center;  
            margin:0; 
         }
         .dropdown-content{
            padding-top: 50%;
         }
         #a:hover{
            background-color: #F6F6F6;
         }
         #compartidos:hover{
            background-color: #EBF5FB ;
         }
   </style>
    
    <div class="container" style="font-family: 'Questrial', sans-serif;"><br>
        <span class="text-center font-weight-light" style="font-size: 40px">SEDES</span>
        <div class="row">
            <div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7">
                <input type="text" class="form-control" id="" placeholder="Busqueda...">
            </div>
            <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 text-right">
                <button type="button" data-toggle="modal" data-target="#nuevasede" style="background-color: #5DADE2;" class="btn btn-sm text-white"><img src="<?=$baseUrl?>img/mas.png" width="14px" alt=""> Nueva Sede</button>
            </div>
        </div><hr>
        <table class="table rounded table-bordered" id="table_sedes">
            <thead class="">
                <tr>
                    <th>Sede</th>
                    <th>Direccion</th>
                    <th>Teléfono</th>
                    <th colspan="3">Acciones</th>

                </tr>
            </thead>
            <tbody>
<!--                 <tr>
                    <td>La Victoria</td>
                    <td>Plaza central Lima, Cercado de Lima 15001</td>
                    <td>(01) 512465</td>
                    <td class="text-center">
                       <a href="#" class="badge bg-success text-white"  data-toggle="modal" data-target="#editarsedes">Editar</a>
                       <a href="#"  data-toggle="modal" data-target="#eliminar" class="badge badge-danger">Eliminar</a>
                       <a href="#" class="badge bg-info text-white" data-toggle="modal" data-target=".servicio">Servicios</a>
                    </td>
                </tr> -->
            </tbody>
        </table><hr>
        <!-- <div class="">
            <div class="text-left">
                <span style="font-size: 40px;color: black;">Encabezado de Informe</span><br>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Cargar encabezado de informe</label>
                <small class="text-muted">&nbsp; La portada no puede ser mayor a 700 pixeles x 200 pixeles</small>
            </div><br><br><hr>
            <span style="font-size: 25px;color: black;">Encabezados Predefinidos</span>
            <div class="row">
                <div class="col-1 p-4 mb-3">
                    <div class="custom-control custom-radio">
                        <input type="radio" checked id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1"></label>
                    </div>
                </div>
                <div class="col-11">
                    <div class="border" style="border: 1px solid #797D7F;">
                        <img src="<?=$baseUrl?>img/Screenshot.png" height="100">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1 p-4 mb-3"><br>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2"></label>
                    </div>
                </div>
                <div class="col-11"><br>
                    <div class="border" style="border: 1px solid #797D7F;">
                        <img src="<?=$baseUrl?>img/Screenshot.png" height="100">
                    </div>
                </div>
            </div>
        </div><br>
        <div class="">
            <div class="text-left">
                <span style="font-size: 40px;color: black;">Marca de agua</span><br>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Cargar encabezado de informe</label>
                <small class="text-muted">&nbsp; La portada no puede ser mayor a 120 pixeles</small>
            </div><br><br><hr>
            <span style="font-size: 25px;color: black;">Marca de Agua Predefinida</span>
            <div class="row text-center">
                <div class="col-6">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="custom1" checked name="customRadio1" class="custom-control-input">
                        <label class="custom-control-label" for="custom1"></label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="custom" name="customRadio1" class="custom-control-input">
                        <label class="custom-control-label" for="custom"></label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="">
                        <img src="<?=$baseUrl?>img/screenMARCA.png" height="500">
                    </div>
                </div>
                <div class="col-6">
                    <div class="">
                        <img src="<?=$baseUrl?>img/screenMARCA.png" height="500">
                    </div>
                </div>
            </div>
        </div><br> -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="nuevasede" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <form method="post" id="form_registrar_sede" class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Nueva sede</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="">Nombre: </label>
                <input class="form-control border border-info" name="name_sede" type="text" required>
                <label for="">Direccion: </label>
                <input class="form-control border border-info" name="direccion_sede" type="text" required>
                <label for="">Teléfono: </label>
                <input class="form-control border border-info" name="telefono_sede" type="text" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-sm btn-success">Guardar</button>
            </div>
            </div>
        </form>
    </div>

    <div class="modal fade" id="editarsedes" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Editar Sede</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <label for="">Nombre: </label>
                        <input class="form-control border border-info" value="La Victoria" type="text">
                        <label for="">Direccion: </label>
                        <input class="form-control border border-info" value="Plaza central Lima, Cercado de Lima 15001" type="text">
                        <label for="">Teléfono: </label>
                        <input class="form-control border border-info" value="(01) 512465" type="text">
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn-sm btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn-sm btn btn-success">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Modal Eliminar-->
    <div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="<?=$baseUrl?>img/advertencia.png" width="100px"  alt=""> 
                    <h3><br>Esta seguro que desea eliminar este registro?</h3> Esta Operacion es irreversible <br><br>
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Eliminar</button>
                </div>
            </div>
        </div>
    </div>

    <!--Servicios-->
    <div class="modal fade servicio" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="container">
                    <div class="row" id="RadiografiaIntraoral">
                        <div class="col-12 text-center"><br>
                            <span style="color: #ABB2B9; font-size: 25px;"><b>Radiografías Intraoral Digital</b></span>
                        </div>
                        <div class="container"><br>
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="text-center">
                                    <span>DERECHA</span>
                                    </div>
                                    <div class="flex-container flex-start">
                                    <div class="flex-item"><p>18</p></div>
                                    <div class="flex-item"><p>17</p></div>
                                    <div class="flex-item"><p>16</p></div>
                                    <div class="flex-item"><p>15</p></div>
                                    <div class="flex-item"><p>14</p></div>
                                    <div class="flex-item"><p>13</p></div>
                                    <div class="flex-item"><p>12</p></div>
                                    <div class="flex-item"><p>11</p></div>
                                    </div>
                                    <div class="flex-container flex-start">
                                    <div class="flex-item1"><p></p></div>
                                    <div class="flex-item1"><p></p></div>
                                    <div class="flex-item1"><p></p></div>
                                    <div class="flex-item"><p>55</p></div>
                                    <div class="flex-item"><p>54</p></div>
                                    <div class="flex-item"><p>53</p></div>
                                    <div class="flex-item"><p>52</p></div>
                                    <div class="flex-item"><p>51</p></div>
                                    </div>
                                    <div class="flex-container flex-start">
                                    <div class="flex-item1"><p></p></div>
                                    <div class="flex-item1"><p></p></div>
                                    <div class="flex-item1"><p></p></div>
                                    <div class="flex-item"><p>85</p></div>
                                    <div class="flex-item"><p>84</p></div>
                                    <div class="flex-item"><p>83</p></div>
                                    <div class="flex-item"><p>82</p></div>
                                    <div class="flex-item"><p>81</p></div>
                                    </div>
                                    <div class="flex-container flex-start">
                                    <div class="flex-item"><p>48</p></div>
                                    <div class="flex-item"><p>47</p></div>
                                    <div class="flex-item"><p>46</p></div>
                                    <div class="flex-item"><p>45</p></div>
                                    <div class="flex-item"><p>44</p></div>
                                    <div class="flex-item"><p>43</p></div>
                                    <div class="flex-item"><p>42</p></div>
                                    <div class="flex-item"><p>41</p></div>
                                    </div><br>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="text-center">
                                    <span>IZQUIERDA</span>
                                    </div>
                                    <div class="flex-container flex-start">
                                    <div class="flex-item"><p>21</p></div>
                                    <div class="flex-item"><p>22</p></div>
                                    <div class="flex-item"><p>23</p></div>
                                    <div class="flex-item"><p>24</p></div>
                                    <div class="flex-item"><p>25</p></div>
                                    <div class="flex-item"><p>26</p></div>
                                    <div class="flex-item"><p>27</p></div>
                                    <div class="flex-item"><p>28</p></div>
                                    </div>
                                    <div class="flex-container flex-start">
                                    <div class="flex-item"><p>61</p></div>
                                    <div class="flex-item"><p>62</p></div>
                                    <div class="flex-item"><p>63</p></div>
                                    <div class="flex-item"><p>64</p></div>
                                    <div class="flex-item"><p>65</p></div>
                                    <div class="flex-item1"><p></p></div>
                                    <div class="flex-item1"><p></p></div>
                                    <div class="flex-item1"><p></p></div>
                                    </div>
                                    <div class="flex-container flex-start">
                                    <div class="flex-item"><p>71</p></div>
                                    <div class="flex-item"><p>72</p></div>
                                    <div class="flex-item"><p>73</p></div>
                                    <div class="flex-item"><p>74</p></div>
                                    <div class="flex-item"><p>75</p></div>
                                    <div class="flex-item1"><p></p></div>
                                    <div class="flex-item1"><p></p></div>
                                    <div class="flex-item1"><p></p></div>
                                    </div>
                                    <div class="flex-container flex-start">
                                    <div class="flex-item"><p>31</p></div>
                                    <div class="flex-item"><p>32</p></div>
                                    <div class="flex-item"><p>33</p></div>
                                    <div class="flex-item"><p>34</p></div>
                                    <div class="flex-item"><p>35</p></div>
                                    <div class="flex-item"><p>36</p></div>
                                    <div class="flex-item"><p>37</p></div>
                                    <div class="flex-item"><p>38</p></div>
                                    </div><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"><br>
                            <div class="card shadow-sm p-3 bg-white rounded">
                                <div class="card-body">
                                    <span style="color:#34495E ; font-size: 20px;">Radiografía Bitewing</span><hr>
                                    <div class="row">
                                    <div class="col-8">
                                        Molar Derecha
                                    </div>
                                    <div class="col-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Bitewing1">
                                            <label class="custom-control-label" for="Bitewing1"></label>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        Premolar Derecha
                                    </div>
                                    <div class="col-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Bitewing2">
                                            <label class="custom-control-label" for="Bitewing2"></label>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        Premolar Izquierda
                                    </div>
                                    <div class="col-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Bitewing3">
                                            <label class="custom-control-label" for="Bitewing3"></label>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        Molar Izquierda
                                    </div>
                                    <div class="col-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Bitewing4">
                                            <label class="custom-control-label" for="Bitewing4"></label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"><br>
                            <div class="card shadow-sm p-3 bg-white rounded">
                                <div class="card-body">
                                    <span style="color:#34495E ; font-size: 17px;">Radiografía Oclusal</span><hr>
                                    <div class="row">
                                    <div class="col-8">
                                        Maxilar superior
                                    </div>
                                    <div class="col-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Oclusal1">
                                            <label class="custom-control-label" for="Oclusal1"></label>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        Maxilar inferior
                                    </div>
                                    <div class="col-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Oclusal2">
                                            <label class="custom-control-label" for="Oclusal2"></label>
                                        </div>
                                    </div><br><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12"><br>
                            <div class="card shadow-sm p-3 bg-white rounded">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-10">
                                    Serie Radiográfica (14 periapicales - 4 bitewings)
                                    </div>
                                    <div class="col-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="serie">
                                            <label class="custom-control-label" for="serie"></label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center" id="RadiografiaExtraoral">
                        <div class="col-12 text-center"><br>
                            <span style="color: #ABB2B9; font-size: 25px;"><b>Radiología Extraoral Digital</b></span>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4"><br>
                            <div class="card shadow rounded-top p-3 mb-2 bg-white">
                                <center><img src="<?=$baseUrl?>img/Panoramicas/panoramica1.jpg" style="width: 100%; height:8rem;" ></center>
                                <div class="row">
                                    <div class="col-9">
                                    <p class="text-muted text-center"  style="font-size: 14px;">Rx. Panorámicas</p>
                                    </div>
                                    <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                        <input type="checkbox" class="custom-control-input" id="imagenes001">
                                        <label class="custom-control-label" for="imagenes001"></label>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4"><br>
                            <div class="card shadow rounded-top p-3 mb-2 bg-white">
                                <center><img src="<?=$baseUrl?>img/cefalometrico/cef1.jpg" class=""style="width: 70%; height:8rem;"></center>
                                <div class="row">
                                    <div class="col-9">
                                    <p class="text-muted text-center"  style="font-size: 14px;"> Rx. Cefalometrica</p>
                                    </div>
                                    <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                        <input type="checkbox" class="custom-control-input" id="imagenes002">
                                        <label class="custom-control-label" for="imagenes002"></label>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4"><br>
                            <div class="card shadow rounded-top p-3 mb-2 bg-white">
                            <center><img src="<?=$baseUrl?>img/senosMaxilares/senos maxilares.jpg" class="" style="width: 70%; height:8rem;"></center>
                                <div class="row">
                                    <div class="col-9">
                                    <p class="text-muted text-center"  style="font-size: 14px;">Rx. Senos Maxilares</p>
                                    </div>
                                    <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                        <input type="checkbox" class="custom-control-input" id="imagenes003">
                                        <label class="custom-control-label" for="imagenes003"></label>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4"><br>
                            <div class="card shadow rounded-top p-3 mb-2 bg-white">
                                <center><img src="<?=$baseUrl?>img/ATM/atm.jpg" class="" style="width: 100%; height:8rem;" ></center>
                                <div class="row">
                                    <div class="col-9">
                                    <p class="text-muted text-center"  style="font-size: 14px;">Rx. ATM</p>
                                    </div>
                                    <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                        <input type="checkbox" class="custom-control-input" id="imagenes004">
                                        <label class="custom-control-label" for="imagenes004"></label>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4"><br>
                            <div class="card shadow rounded-top p-3 mb-2 bg-white">
                                <center><img src="<?=$baseUrl?>img/Frontales/fontal1.jpg" class="" style="width: 60%; height:8rem;"></center>
                                <div class="row">
                                    <div class="col-9">
                                    <p class="text-muted text-center"  style="font-size: 14px;">Rx. Frontal</p>
                                    </div>
                                    <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                        <input type="checkbox" class="custom-control-input" id="imagenes005">
                                        <label class="custom-control-label" for="imagenes005"></label>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4"><br>
                            <div class="card shadow rounded-top p-3 mb-2 bg-white">
                                <center><img src="<?=$baseUrl?>img/carpal/CARPAL.jpg" class="" style="width: 40%; height:8rem;"></center>
                                <div class="row">
                                    <div class="col-9">
                                    <p class="text-muted text-center" style="font-size: 14px;">Rx. Carpal</p>
                                    </div>
                                    <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                        <input type="checkbox" class="custom-control-input" id="imagenes006">
                                        <label class="custom-control-label" for="imagenes006"></label>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                    </div>
                    <div class="row" id="solicitarinforme">
                        <div class="col-12 text-center"><br>
                            <span style="color: #ABB2B9; font-size: 25px;"><b>Seleccionar Imagenes</b></span>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4"><br>
                            <div class="card shadow rounded-top p-3 mb-2 bg-white">
                                <center><img src="<?=$baseUrl?>img/Panoramicas/panoramica1.jpg" style="width:100%;height:8rem;"></center>
                                <div class="text-center">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" style="background-color: chocolate;" id="compartir001">
                                    <label class="custom-control-label" for="compartir001"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4"><br>
                            <div class="card shadow rounded-top p-3 mb-2 bg-white">
                                <center><img src="<?=$baseUrl?>img/ATM/atm.jpg" class="" style="width:100%;height:8rem;"></center>
                                <div class="text-center">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" style="background-color: chocolate;" id="compartir004">
                                    <label class="custom-control-label" for="compartir004"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4"><br>
                            <div class="card shadow rounded-top p-3 mb-2 bg-white">
                                <center><img src="<?=$baseUrl?>img/Frontales/fontal1.jpg" class=""style="width:70%;height:8rem;"></center>
                                <div class="text-center">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" style="background-color: chocolate;" id="compartir002">
                                    <label class="custom-control-label" for="compartir002"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4"><br>
                            <div class="card shadow rounded-top p-3 mb-2 bg-white">
                            <center><img src="<?=$baseUrl?>img/carpal/CARPAL.jpg" class="" style="width:70%;height:8rem;"></center>
                                <div class="text-center">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" style="background-color: chocolate;" id="compartir003">
                                    <label class="custom-control-label" for="compartir003"></label>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                    </div>
                    <div class="row" id="cefalometricoComputarizado">
                        <div class="col-12 text-center"><br>
                            <span style="color: #ABB2B9; font-size: 25px;"><b>Análisis Cefalométrico Computarizado</b></span>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"><br><br>
                            <div class="row">
                                <div class="col-10">
                                    Steiner-tweed 
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico1">
                                    <label class="custom-control-label" for="cefalometrico1"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    Ricketts 
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico2">
                                    <label class="custom-control-label" for="cefalometrico2"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                Mac Namara 
                                </div>
                                <div class="col-2">
                                <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico3">
                                    <label class="custom-control-label" for="cefalometrico3"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                Índice de Vert 
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico4">
                                    <label class="custom-control-label" for="cefalometrico4"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                Schwarz 
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico5">
                                    <label class="custom-control-label" for="cefalometrico5"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                Dows 
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico6">
                                    <label class="custom-control-label" for="cefalometrico6"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    Roth - Jaraback 
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico7">
                                    <label class="custom-control-label" for="cefalometrico7"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                USP 
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico8">
                                    <label class="custom-control-label" for="cefalometrico8"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                Análisis de Jarabak  
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico9">
                                    <label class="custom-control-label" for="cefalometrico9"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                Análisis de Bimier 
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico10">
                                    <label class="custom-control-label" for="cefalometrico10"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                Análisis de Bjork 
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico11">
                                    <label class="custom-control-label" for="cefalometrico11"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                Análisis de Burstonel-Legan
                                </div>
                                <div class="col-2">
                                <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico12">
                                    <label class="custom-control-label" for="cefalometrico12"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"><br><br>
                            <div class="row">
                                <div class="col-10">
                                Análisis de Burstonel-Legan(perfil) 
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico14">
                                    <label class="custom-control-label" for="cefalometrico14"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    Análisis de Delaire 
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico15">
                                    <label class="custom-control-label" for="cefalometrico15"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    Análisis Facial 
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico16">
                                    <label class="custom-control-label" for="cefalometrico16"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    Sleep Apnea
                                </div>            
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico17">
                                    <label class="custom-control-label" for="cefalometrico17"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    Análisis de Perfil Blando
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico18">
                                    <label class="custom-control-label" for="cefalometrico18"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    Medidas VTO
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico19">
                                    <label class="custom-control-label" for="cefalometrico19"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    Análisis de Perfil Dento-Esqueletal
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico20">
                                    <label class="custom-control-label" for="cefalometrico20"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    Análisis de Ricketts Resumido
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico21">
                                    <label class="custom-control-label" for="cefalometrico21"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    Análisis de Rocabado
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico22">
                                    <label class="custom-control-label" for="cefalometrico22"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    PETROVIC
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico23">
                                    <label class="custom-control-label" for="cefalometrico23"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    UPCH
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="cefalometrico24">
                                    <label class="custom-control-label" for="cefalometrico24"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-1"> <br>
                                    Otros:
                                </div>
                                <div class="col-11"> <br>
                                    <textarea class="form-control" id="" rows="1"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="AGenerales">
                        <div class="col-12 text-center"><br>
                            <span style="color: #ABB2B9; font-size: 25px;"><b>Análisis Generales</b></span>
                        </div>
                        <div class="col-12">
                            <div class="row" >
                                <div class="col-12"><br>
                                    <div class="text-center">
                                    <span style="font-size: 15px;font-family: 'Manjari', sans-serif;"><b>ANÁLISIS CARPAL</b></span>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"><br>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="generales1">
                                                <label class="custom-control-label text-muted" style="font-size: 15px;" for="generales1">FISHMAN</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"><br>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="generales2">
                                                <label class="custom-control-label text-muted" style="font-size: 15px;" for="generales2">Tw2</label>
                                            </div>
                                        </div>
                                    </div><hr>
                                    </div>
                                </div>
                                <div class="col-12"><br>
                                    <div class="text-center">
                                    <span style="font-size: 15px;font-family: 'Manjari', sans-serif;"><b>ANÁLISIS RX FRONTAL</b></span>
                                    <div class="row">
                                        <div class="col-12"><br>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="generales3">
                                                <label class="custom-control-label text-muted" style="font-size: 15px;" for="generales3">RICKETS FRONTAL</label>
                                            </div>
                                        </div>
                                    </div><hr>
                                    </div>
                                </div>
                                <div class="col-12"><br>
                                    <div class="text-center">
                                    <span style="font-size: 15px;font-family: 'Manjari', sans-serif;"><b>FOTOS</b></span>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"><br>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="generales4">
                                                <label class="custom-control-label text-muted" style="font-size: 15px;" for="generales4">INTRAORAL</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"><br>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="generales5">
                                                <label class="custom-control-label text-muted" style="font-size: 15px;" for="generales5">EXTRAORAL</label>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="protocolos">
                        <div class="col-12 text-center"><br>
                            <span style="color: #ABB2B9; font-size: 25px;"><b>Protocolos de Diagnóstico</b></span>
                        </div>
                        <div class="col-12"><br>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                    <div class="col-10 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <b>I. PROTOCOLO ORTODONTICO BÁSICO</b>
                                    </div>
                                    <div class="col-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="protocolo1">
                                            <label class="custom-control-label" for="protocolo1"></label>
                                        </div>
                                    </div>
                                    </div>
                                    <div>
                                        01 Rx Panorámica <br>
                                        01 Rx Cefalometrica <br>
                                        Set Fotográfico Completo extraorales e intraorales (11 fotos)
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                    <div class="col-10 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <b>II. DIAGNÓSTICO ORTODONTICO</b>
                                    </div>
                                    <div class="col-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="protocolo2">
                                            <label class="custom-control-label" for="protocolo2"></label>
                                        </div>
                                    </div>
                                    </div>
                                    <div>
                                    01 Rx Panorámica <br>
                                    01 Rx Cefalométrica <br>
                                    Fotos extraorales<br>
                                    01 Análisis <br>
                                    CD
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                    <div class="col-10 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <b>III. DIAGNÓSTICO ORTODONTICO</b>
                                    </div>
                                    <div class="col-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="protocolo3">
                                            <label class="custom-control-label" for="protocolo3"></label>
                                        </div>
                                    </div>
                                    </div>
                                    <div>
                                    01 Rx Panorámica <br>
                                    01 Rx Cefalométrica <br>
                                    Set Fotográfico Completo extraorales e intraorales (11 fotos) <br>
                                    02 Análisis <br>
                                    CD
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                    <div class="col-10 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <b>IV. PROTOCOLO PERIODONCIA</b>
                                    </div>
                                    <div class="col-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="protocolo4">
                                            <label class="custom-control-label" for="protocolo4"></label>
                                        </div>
                                    </div>
                                    </div>
                                    <div>
                                    01 Rx Panorámica <br>
                                    Set Radiográfica (14 periapicales - 4 bitewings) 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="Servicios">
                        <div class="col-12 text-center"><br>
                            <span style="color: #ABB2B9; font-size: 25px;"><b>Otros Servicios</b></span>
                        </div>
                        <div class="col-12"><br>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <b>GUIA QUIRÚRGICA</b>
                                </div>
                                <div class="col-10">
                                    PARA IMPLANTES <br>
                                    PARA GINGIVOPLASTÍAS <br>
                                    SPLIN QUIRÚRGICO (ORTOGNÁTICA) <br>
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="nuevos1">
                                    <label class="custom-control-label" for="nuevos1"></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="nuevos2">
                                    <label class="custom-control-label" for="nuevos2"></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="nuevos3">
                                    <label class="custom-control-label" for="nuevos3"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12"><hr>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <b>PLANEAMIENTO ORTODÓNTICO VIRTUAL</b>
                                </div>
                                <div class="col-10">
                                    SETUP ORTODONTICO VIRTUAL<br>
                                    ALINEADORES INVISIBLES (ver caso)<br>
                                    FERULA DE TRANSFERENCIA (cemento indirecto)<br>
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="nuevos4">
                                    <label class="custom-control-label" for="nuevos4"></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="nuevos5">
                                    <label class="custom-control-label" for="nuevos5"></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="nuevos6">
                                    <label class="custom-control-label" for="nuevos6"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12"><hr>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <b>DISEÑO DE SONRISA 3D</b>
                                </div>
                                <div class="col-10">
                                    MOCKUP VIRTUAL<br>
                                    MOCHUP VIRTUAL E IMPRESO 3D<br>
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="nuevos7">
                                    <label class="custom-control-label" for="nuevos7"></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="nuevos8">
                                    <label class="custom-control-label" for="nuevos8"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12"><hr>
                            <div class="row">
                                <div class="col-12">
                                    <b>SCANEO</b>
                                </div>
                                <div class="col-10">
                                    INTRAORAL <br>
                                    FACIAL <br>
                                    IMPRESO 3D <br>
                                    MODELO <br>
                                    STL
                                </div>
                                <div class="col-2">
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="nuevos9">
                                    <label class="custom-control-label" for="nuevos9"></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="nuevos10">
                                    <label class="custom-control-label" for="nuevos10"></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="nuevos11">
                                    <label class="custom-control-label" for="nuevos11"></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="nuevos12">
                                    <label class="custom-control-label" for="nuevos12"></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="nuevos13">
                                    <label class="custom-control-label" for="nuevos13"></label>
                                    </div>
                                </div>
                            </div>
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
         #aa:hover{
            background-color: #BBDEFB;
         }
         #ab:hover{
            background-color: #C8E6C9;
         }
         #ac:hover{
            background-color: #FFCCBC;
         }
      </style>
      <div id="soporte" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-body">
                  <div class="text-center">
                     <div style="background-color: #00216B">
                        <span id="sys" class="navbar-brand" style="color:white;"><img  id="sysd" src="<?=$baseUrl?>img/nav-03.png" alt=""><b>SysDentist</b></span><br>
                     </div>
                     <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 fotodoctor">
                           <img src="<?=$baseUrl?>img/doctor001.png" width="180px" alt="">
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8"><br><br>
                           <div class="card" style="border-radius: 40px 40px 40px 40px;">
                              <div class="card-body text-center"><br><br>
                                 <span>ASISTENCIA TÉCNICA:<br>
                                    <img src="<?=$baseUrl?>img/viejo.png" width="20px" alt=""><b>(01) 325 6478</b> <br>
                                 </span>
                                 <hr>
                                 <span>CONSULTAS Y SUGERENCIAS:</span><br>
                                 <img src="<?=$baseUrl?>img/viejo.png" width="20px" alt=""><b>(01) 422 6797</b> <br>
                                 <img src="<?=$baseUrl?>img/whatsapp.png" width="20px" alt=""> <b>983 523 514 </b><br><hr>
                                 <img src="<?=$baseUrl?>img/logocsi.png" width="200px" alt=""><br><br>
                                 <img src="<?=$baseUrl?>img/sysdentist.png" width="120px" alt=""><br><br>
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
   <!--later-->
      <div class="modal fade" id="later" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: transparent; border: 0px solid #ffff;">
               <div class="row">
                  <div class="col-6">
                     <img src="<?=$baseUrl?>img/docanimacionsombra.png" width="250" alt="">
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

<script src="<?=$baseUrl?>js/sedes/index.js"></script>