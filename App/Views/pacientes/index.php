<div class="container" style="font-size: 14px;">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                aria-selected="true">PACIENTES</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                aria-selected="false">PACIENTES ASIGNADOS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                aria-selected="false">HISTORIAL</a>
        </li>
    </ul>
</div><br>

<div class="container">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="container">
                <div class="row" style="font-size: 14px;">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                        <span class=""
                            style="color: #444c64; font-size: 30px;font-family: 'Montserrat', sans-serif;"><b>Directorio
                                de Pacientes</b>
                    </div>
                    <!---------------------Boton del modal----------------------------->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 text-right">
                        <button type="button" data-toggle="modal" data-target=".bd"
                            class="btn btn-sm btn-success text-white" id="ocultar"><img width="18px"
                                src="<?=$baseUrl?>img/mas.png" alt="">&nbsp;AGREGAR PACIENTE NUEVO</button></span>
                    </div>
                    <!---------------------fin Boton del modal------------------------->
                    <div class="container">
                        <hr>
                        <div class="form-group row">
                            <div class="col-sm-7">
                                <!--input type="text" class="form-control" id="" placeholder="Busqueda..."-->
                            </div>
                            <div class="col-sm-5" id="doctor">
                                <div class="row">
                                    <div class="col-7" style="padding-top: 100px;">
                                        <div class="card" style="border-radius: 50px 0px 50px 50px;">
                                            <div class="card-body text-center">
                                                <span
                                                    style="font-family: 'Montserrat', sans-serif;font-size: 17px;">Aquí
                                                    puedes registrar nuevos pacientes</span><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5 text-right">
                                        <img src="<?=$baseUrl?>img/manno.png" width="150">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pacientes">
                <div class="row">
                    <div class="col-sm-6"><br>
                        <div class="card">
                            <div class="card-body" id="card_pacientes">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="">
                <div class="row" style="font-size: 14px;">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-10  container">
                        <span class=""
                            style="color: #444c64; font-size: 30px;font-family: 'Montserrat', sans-serif;"><b>Directorio
                                de Pacientes Asignados</b>
                    </div>
                    <hr>
                    <div class="container  text-center">
                        <hr>
                        <div class="form-group row ">
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="" placeholder="Busqueda...">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <table class="text-center table table-bordered bg-white table-hover">
                            <thead class="text-center" style="color: #2f2e3f">
                                <tr>
                                    <th scope="col" width="15%">Historia Clinica</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">DNI</th>
                                    <th scope="col" width="30%">Doctor</th>
                                    <th scope="col" width="20%">Fecha de asignacion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>HC-CB74171528</td>
                                    <td>ALEJANDRA VERONICA</td>
                                    <td>74171528</td>
                                    <td>CALLIRGOS BLAS LUIS</td>
                                    <td>2018-09-01 20:47:04</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="">
                <div class="row" style="font-size: 14px;">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                        <span class=""
                            style="color: #444c64; font-size: 30px;font-family: 'Montserrat', sans-serif;"><b>Directorio
                                de Pacientes Asignados</b>
                    </div>
                    <!---------------------Boton del modal----------------------------->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                        <button type="button" data-toggle="modal" data-target=".bd"
                            class="btn btn-sm btn-success text-white" id="ocultar"><img width="18px"
                                src="<?=$baseUrl?>img/mas.png" alt="">&nbsp;AGREGAR NUEVO</button></span>
                    </div>
                    <!---------------------fin Boton del modal------------------------->
                    <div class="container  text-center">
                        <hr>
                        <div class="form-group row ">
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="" placeholder="Busqueda...">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <table class="text-center table table-bordered bg-white table-hover">
                            <thead class="text-center" style="color: #2f2e3f">
                                <tr>
                                    <th scope="col" width="15%">Historia Clinica</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">DNI</th>
                                    <th scope="col" width="30%">Doctor</th>
                                    <th scope="col" width="20%">Fecha de asignacion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--modaaaaaaaaaaaaaaal-->
<div class="modal bd" aria-labelledby="myExtraLargeModalLabel">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" style="color:#1A5276;font-family: 'Montserrat', sans-serif;"><b>Paciente
                        Nuevo</b></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="form_registrar_paciente" class="modal-body" validate>
                <!--DATOS PERSONALES-->
                <div class="row container" id="personal">
                    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                        <h5>DATOS PERSONALES</h5>
                        <hr>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
                        <label>Tipo de Documento</label>
                        <select class="form-control" id="tipo_documento">
                            <option hidden>Seleccione</option>
                            <option value="Pasaporte o Carnet de Extrangeria">Pasaporte o Carnet de Extrangeria</option>
                            <option value="DNI">DNI</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6  col-xl-4">
                        <label id="text_dni_pasaporte">DNI</label>
                        <input type="number" class="form-control" id="dni" name="dni" required>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6  col-xl-4">
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6  col-xl-4">
                        <label>Nombres</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" required>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6  col-xl-4">
                        <label>Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6  col-xl-4">
                        <label>Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-6 col-xl-4">
                        <label>Genero</label>
                        <select class="form-control" id="genero" name="genero" required>
                            <option hidden>Elige Genero</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6  col-xl-4">
                        <label>E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-6 col-xl-4">
                        <label>Discapacidad</label>
                        <select class="form-control" id="sino" id="discapacidad" name="discapacidad" required>
                            <option value="no">NO</option>
                            <option value="si">SI</option>
                        </select>
                    </div>
                    <!--discapacitado-->
                    <!--                     <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4" id="discapacitado">
                        <label>Apoderado: </label>
                        <input disabled type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4" id="discapacitado">
                        <label>Parentezco Apoderado: </label>
                        <input disabled type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6  col-xl-4" id="discapacitado">
                        <label>Telèfono Mòvil Apoderado: </label>
                        <input disabled type="number" class="form-control" placeholder="">
                    </div> -->
                    <!--discapacitado-->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <label>Teléfono Móvil</label>
                        <input type="text" class="form-control" id="telefono_movil" name="telefono_movil" required>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <label>Teléfono Fijo</label>
                        <input type="text" class="form-control" id="telefono_fijo" name="telefono_fijo" required>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <label>Convenio</label>
                        <select class="form-control" id="convenio" name="convenio" required>
                            <option hidden>Elige Convenio</option>
                            <option value="Sin Convenio">Sin Convenio</option>
                            <option value="Medilink: SaludTotal">Medilink: SaludTotal</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                        <label>Actividad o Profesión</label>
                        <input type="text" class="form-control" id="actividad_profesional" name="actividad_profesional"
                            required>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <label>Dirección</label>
                        <textarea class="form-control" rows="1" id="direccion" name="direccion" required></textarea>
                    </div>
                    <div class="text-right col-12 col-sm-12 col-md-12 col-lg-12"><br>
                        <button type="button" class="btn btn-success" id="oculto"><img src="<?=$baseUrl?>img/flechaa.png" alt=""
                                width="15px">Siguiente</button><br><br>
                    </div>
                </div>
                <!--FIN DATOS PERSONALES-->

                <!--PROCEDENCIA-->
                <div class="row container" id="ocultado">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <h4>LUGAR DE NACIMIENTO</h4>
                        <hr>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <label>Departamento</label>
                        <select class="form-control" id="dep_nac" name="dep_nac" required>
                            <option>Lima</option>
                            <option>Arequipa</option>
                            <option>Amazonas</option>
                            <option>Ica</option>
                            <option>Cusco</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <label>Provincia</label>
                        <select class="form-control" id="prov_nac" name="prov_nac" required>
                            <option>Lima</option>
                            <option>Arequipa</option>
                            <option>Amazonas</option>
                            <option>Ica</option>
                            <option>Cusco</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <label>Distrito</label>
                        <select class="form-control" id="dist_nac" name="dist_nac" required>
                            <option>Lima</option>
                            <option>Arequipa</option>
                            <option>Amazonas</option>
                            <option>Ica</option>
                            <option>Cusco</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <h4>LUGAR DE PROCEDENCIA</h4>
                        <hr>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <label>Departamento</label>
                        <select class="form-control" id="dep_proc" name="dep_proc" required>
                            <option>Lima</option>
                            <option>Arequipa</option>
                            <option>Amazonas</option>
                            <option>Ica</option>
                            <option>Cusco</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <label>Provincia</label>
                        <select class="form-control" id="prov_proc" name="prov_proc" required>
                            <option>Lima</option>
                            <option>Arequipa</option>
                            <option>Amazonas</option>
                            <option>Ica</option>
                            <option>Cusco</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <label>Distrito</label>
                        <select class="form-control" id="dist_proc" name="dist_proc" required>
                            <option>Lima</option>
                            <option>Arequipa</option>
                            <option>Amazonas</option>
                            <option>Ica</option>
                            <option>Cusco</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <label>Observaciones</label>
                        <textarea class="form-control" rows="2" id="observax" name="observax"></textarea>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6"><br>
                        <button type="button" class="btn btn-danger" id="regresar"><img src="<?=$baseUrl?>img/flecha.png" alt=""
                                width="15px">Regresar</button><br><br>
                    </div>
                    <div class="text-right col-6 col-sm-6 col-md-6 col-lg-6"><br>
                        <!--button class="btn btn-success" type="button" disabled>
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Registrar...
                     </button><br-->
                        <button type="submit" class="btn btn-success">Registrar...</button><br>
                    </div>
                </div>
                <!--FIN PROCEDENCIA-->
            </form>
        </div>
    </div>
</div>

<!--modal modalregistrosedesusuarios-->
<div class="modal fade modalregistrosedesusuarios" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color: #F8F9F9;">
            <div class="card-body">
                <div class="text-center">
                    <span
                        style="font-size: 50px;font-family: 'Gayathri', sans-serif;color: #0277BD;"><b>BIENVENIDO</b><br></span>
                    <span style="font-family: 'Comfortaa', cursive;">En SysDentist estamos muy contentos de tenerte
                        aquí<br><br></span>
                </div>
                <div class="card" style="border-radius: 30px 30px 30px 30px">
                    <div class="card-body">
                        <center>
                            <div class="text-center col-11">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                        style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">50%
                                    </div>
                                </div>
                            </div>
                        </center><br>
                        <div id="registrosede">
                            <div class="text-center">
                                <span
                                    style="font-size: 30px;color: #EF5350;font-family: 'Gayathri', sans-serif;">Registra
                                    tu sede</span><br>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <label for="">Nombre de mi sede:</label>
                                    <input class="form-control border border-danger" placeholder="Petit Thouars"
                                        type="text">
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <label for="">Direccion:</label>
                                    <input class="form-control border border-danger"
                                        placeholder="Av. Petit Thouars 2686 oficina 202  Lince - Lima - Lima"
                                        type="text">
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <label for="">Telèfono:</label>
                                    <input class="form-control border border-danger" placeholder="991 313 259"
                                        type="text">
                                </div>
                            </div>
                            <div class="col-12 text-center"><br>
                                <button type="button"
                                    class="btn btn-sm btn-success btnsiguientesede"><b>Siguiente</b></button>
                            </div>
                        </div>
                        <div class="row" id="registrodatos">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <label for="">Tipo de Documento:</label>
                                <select class="form-control border border-danger" name="" id="">
                                    <option value="">DNI</option>
                                    <option value="">Carnet de Extranjeria</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <label for="">DNI</label>
                                <input class="form-control border border-danger" type="text">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <label for="">Nombre:</label>
                                <input class="form-control border border-danger" type="text">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <label for="">Apellidos:</label>
                                <input class="form-control border border-danger" type="text">
                            </div>
                            <!--------------------------------Cambio---------------------------------->
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <label for="">Género:</label>
                                <select class="form-control border border-danger" name="" id="">
                                    <option value="">Masculino</option>
                                    <option value="">Femenino</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <label for="">Usuario:</label>
                                <input class="form-control border border-danger" type="text">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <label for="">Contraseña:</label>
                                <input class="form-control border border-danger" type="text">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <label for="">Confirmar contraseña:</label>
                                <input class="form-control border border-danger" type="text">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <label for="">Télefono Móvil: </label>
                                <input class="form-control border border-danger" type="text">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <label for="">Correo Electronico:</label>
                                <input class="form-control border border-danger" type="text">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <label for="">Sede:</label>
                                <select class="form-control border border-danger" name="" id="">
                                    <option selected disabled value="">Seleccionar Sede</option>
                                    <option value="">Los Olivos</option>
                                    <option value="">La Victoria</option>
                                    <option value="">San Juan de Miraflores</option>
                                    <option value="">Villa Maria del Triunfo</option>
                                    <option value="">La Victoria</option>
                                    <option value="">San Juan de Lurigancho</option>
                                    <option value="">Villa el Salvador</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <label for="">Colegiatura:</label>
                                <input class="form-control border border-danger" type="text">
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <label for="">Tipo:</label>
                                <select name="" class="form-control border border-danger" id="">
                                    <option value="">Seleccionar Tipo</option>
                                    <option value="">Doctor (a)</option>
                                    <option value="">Tecnico (a)</option>
                                    <option value="">Asistente</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                <label for="">Especialidad:</label>
                                <select name="" class="form-control border border-danger" id="">
                                    <option selected value="">Seleccionar Especialidad</option>
                                    <option value="">SALUD PUBLICA ESTOMATOLOGICA</option>
                                    <option value="">REHABILITACION ORAL</option>
                                    <option value="">RADIOLOGIA BUCAL Y MAXILO FACIAL</option>
                                    <option value="">PERIODONCIA E IMPLANTES</option>
                                    <option value="">ORTODONCIA Y ORTOPEDIA MAXILAR</option>
                                    <option value="">ODONTOLOGIA RESTAURADORA Y ESTETICA</option>
                                    <option value="">ODONTOPEDIATRIA</option>
                                    <option value="">MEDICINA Y PATOLOGIA ESTOMATOLOGICA</option>
                                    <option value="">ESTOMATOLOGIA DE PACIENTES ESPECIALES</option>
                                    <option value="">CIRUGIA BUCAL MAXILO FACIAL</option>
                                    <option value="">AUDITORIA ODONTOLOGICA </option>
                                    <option value="">ENDODONCIA </option>
                                    <option value="">ORTODONCIA Y ORTOPEDIA MAXILAR </option>
                                    <option value="">ODONTOLOGO GENERAL </option>
                                    <option value="">IMPLANTOLOGIA ORAL INTEGRAL </option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="">Subir Foto de perfil:</label><br>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input border border-danger"
                                        id="customFileLang" lang="es">
                                    <label class="custom-file-label border border-danger"
                                        for="customFileLang">Seleccionar Archivo</label>
                                </div>
                            </div>
                            <div class="col-12 text-center"><br>
                                <button type="button"
                                    class="btn btn-sm btn-success btnsiguientedatos"><b>Finalizar</b></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--later-->
<div class="modal fade" id="later" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
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
                        <a id="" href="detalles.php" data-dismiss="modal"
                            class="text-white btn btn-sm btn-danger">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--modal modalbienvenidaSysdentist-->
<div class="modal fade modalbienvenidaSysdentist" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="" style="background-color: #00216B;font-family: 'Questrial', sans-serif;">
                <div class="text-center p-3">
                    <span style="font-size: 35px;color: white;font-family: 'Comfortaa', cursive;"><b>BIENVENIDO A
                            SYSDENTIST</b></span>
                </div>
            </div>
            <div class="text-center"><br>
                <div class="container"><br>
                    Estamos muy felices de que seas parte de la familia <b>SysDentist</b> y uses este sistema que
                    evolucionará contigo, estamos trabajando para que puedas tener
                    la mejor experiencia en esta plataforma virtual de gestión odontológica. <br><br>
                    SysDentist, un software creado con la ayuda de los mejores profesionales de la odontología como:<br>
                    ODONTOLOGOS, CIRUJANOS DENTISTAS, RADIOLÓGOS, ORTODONCISTA, ENDODONCISTA, PERIODONCISTA, PROTESISTA,
                    CIRUJANO ORAL Y ODONTOPEDIATRAS<br>
                    <b>Varios de nuestros modulos aún estan siendo testeados por la cual aún no esta disponibles,
                        <br>por favor danos unos días más.</b><br><br>
                    <span style="font-size: 23px;font-family: 'Questrial', sans-serif;"><b>"DEJA LO TRADICIONAL Y VIVE
                            LA ODONTOLOGÍA DIGITAL AL 100%"</b></span>
                    <br><br>
                    <div class="">
                        <img src="<?=$baseUrl?>img/logos.png" width="500" alt="">
                    </div>
                </div>
                <br><button type="button" class="btn btn-sm btn-info" data-dismiss="modal">VOY A USARLO</button><br><br>
            </div>
        </div>
    </div>
</div>
<!--SOPORTE-->
<style>
#sys {
    font-size: 50px;
}

#sysd {
    width: 50px;
}

@media only screen and (max-width: 650px) {
    .fotodoctor {
        display: none;
    }
}

@media only screen and (max-width: 1000px) {

    /*.fotodoctor{
               display: none;
            }*/
    #sys {
        font-size: 30px;
    }

    #sysd {
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
                        <span id="sys" class="navbar-brand" style="color:white;"><img id="sysd" src="<?=$baseUrl?>img/nav-03.png"
                                alt=""><b>SysDentist</b></span><br>
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
                                    <img src="<?=$baseUrl?>img/whatsapp.png" width="20px" alt=""> <b>983 523 514 </b><br>
                                    <hr>
                                    <img src="<?=$baseUrl?>img/logocsi.png" width="200px" alt=""><br><br>
                                    <img src="<?=$baseUrl?>img/sysdentist.png" width="120px" alt=""><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="button" class="btn btn-sm btn-danger"
                                data-dismiss="modal"><b>Cerrar</b></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--later-->
<div class="modal fade" id="later" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
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
                        <a id="" href="detalles.php" data-dismiss="modal"
                            class="text-white btn btn-sm btn-danger">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=$baseUrl?>js/pacientes/index.js"></script>