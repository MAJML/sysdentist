<div class="container" style="font-family: 'Questrial', sans-serif;"><br>
    <span class="text-center font-weight-light" style="font-size: 40px">USUARIOS</span>
    <div class="row">
        <div class="col-sm-7">
            <input type="text" class="form-control rounded-pill" id="" placeholder="Busqueda...">
        </div>
        <div class="col-sm-5 text-right">
            <button type="button" style="background-color: #5DADE2;" data-toggle="modal"
                data-target=".bd-example-modal-lg" class="btn btn-sm text-white"><img src="<?=$baseUrl?>img/mas.png"
                    width="14px" alt=""> Agregar Usuario</button>
        </div>
    </div>
    <hr>
    <div class="row" id="content_usuarios_s">

        <div class="col-sm-6 col-md-3"><br>
            <div class="card rounded-0 text-center">
                <div class="card-body">
                    <span><b>LOS OLIVOS</b></span>
                    <h5 class="card-title"><img class="rounded-circle" src="<?=$baseUrl?>img/medico1.png" width="120px"
                            height="120px" alt=""></h5>
                    <span class="card-text">
                        <b>Rd. ENRIQUE SOTO QUISPE MENDOZA</b> <br>
                        <span class="text-muted"><b>ENRIQUE</b><br></span>
                        RADIOLOGIA<br>
                        <span class="badge text-white badge-pill" style="background-color: #6B6694;">Mi
                            Perfil</span><br><br>
                        <button type="button" data-toggle="modal" data-target=".bd"
                            class="btn-sm btn btn-info rounded-0">Editar</button>
                        <button type="button" class="btn-sm btn rounded-0" style="background-color: #566573;"><a
                                href="#!" class="text-decoration-none text-white" data-toggle="modal"
                                data-target=".firmas">Firma</a></button><br>
                    </span>
                </div>
            </div>
        </div>

        <!-- ----------------------------------------------------------------- -->

        <!-- <div class="col-sm-6 col-md-3"><br>
            <div class="card rounded-0 text-center">
                <div class="card-body">
                    <span><b>LOS OLIVOS</b></span>
                    <h5 class="card-title"><img src="<?=$baseUrl?>img/medico2.png" width="120px" height="120px" alt=""></h5>
                    <span class="card-text">
                        <b>Med. ESMERALDA TORRES SOLORZANO</b> <br>
                        <span class="text-muted"><b>ESMERALDA</b><br></span> Medico <br>
                        <span class="badge badge-pill badge-success">Activo</span><br><br>
                        <button type="button" data-toggle="modal" data-target=".bd" class="btn-sm btn btn-info rounded-0">Editar</button>
                        <button type="button" class="btn-sm btn rounded-0" style="background-color: #566573;">
                        <a href="#!" class="text-decoration-none text-white" data-toggle="modal" data-target=".firmas">Firma</a></button><br>
                        <button type="button" data-toggle="modal" data-target="#eliminar" class="btn-sm btn btn-danger rounded-0">Desactivar</button>
                    </span>
                </div>
            </div>
        </div> -->
        
    </div>
</div>

<!-- Nuevo usuario modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Usuario Nuevo</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="form_registrar_usuario" class="modal-body" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-6">
                        <label for="">Tipo de Documento:</label>
                        <select class="form-control border border-info" >
                            <option value="">DNI</option>
                            <option value="">Carnet de Extranjeria</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="">DNI</label>
                        <input class="form-control border border-info" type="text" name="dni" required>
                    </div>
                    <div class="col-6">
                        <label for="">Nombre:</label>
                        <input class="form-control border border-info" type="text" name="nombre" required>
                    </div>
                    <div class="col-6">
                        <label for="">Apellidos:</label>
                        <input class="form-control border border-info" type="text" name="apellido" required>
                    </div>
                    <div class="col-6">
                        <label for="">Usuario:</label>
                        <input class="form-control border border-info" type="text" name="usuario" required>
                    </div>
                    <div class="col-6">
                        <label for="">Contraseña:</label>
                        <input class="form-control border border-info" type="text" name="password" required>
                    </div>
                    <div class="col-6">
                        <label for="">Confirmar contraseña:</label>
                        <input class="form-control border border-info" type="text" name="repeat_password" required>
                    </div>
                    <div class="col-6">
                        <label for="">Télefono Móvil: </label>
                        <input class="form-control border border-info" type="text" name="telefono_movil" required>
                    </div>
                    <div class="col-6">
                        <label for="">Correo Electronico:</label>
                        <input class="form-control border border-info" type="text" name="correo" required>
                    </div>
                    <div class="col-6">
                        <label for="">Sede:</label>
                        <select class="form-control border border-info" name="sede" id="sede" required>
                            <option hidden>Seleccionar Sede</option>
                            <option value="Los Olivos">Los Olivos</option>
                            <option value="La Victoria">La Victoria</option>
                            <option value="San Juan de Miraflores">San Juan de Miraflores</option>
                            <option value="Villa Maria del Triunfo">Villa Maria del Triunfo</option>
                            <option value="La Victoria">La Victoria</option>
                            <option value="San Juan de Lurigancho">San Juan de Lurigancho</option>
                            <option value="Villa el Salvador">Villa el Salvador</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label for="">Colegiatura:</label>
                        <input class="form-control border border-info" type="text" name="colegiatura" required>
                    </div>
                    <div class="col-3">
                        <label for="">Género:</label>
                        <select class="form-control border border-info" name="genero" id="genero" required>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="">Tipo:</label>
                        <select name="tipo_doctor" class="form-control border border-info" id="tipo_doctor" required>
                            <option value="">Seleccionar Tipo</option>
                            <option value="">Doctor (a)</option>
                            <option value="">Tecnico (a)</option>
                            <option value="">Asistente</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="">Especialidad:</label>
                        <select name="especialidad" class="form-control border border-info" id="especialidad" required>
                            <option hidden>Seleccionar Especialidad</option>
                            <option value="SALUD PUBLICA ESTOMATOLOGICA">SALUD PUBLICA ESTOMATOLOGICA</option>
                            <option value="REHABILITACION ORAL">REHABILITACION ORAL</option>
                            <option value="RADIOLOGIA BUCAL Y MAXILO FACIAL">RADIOLOGIA BUCAL Y MAXILO FACIAL</option>
                            <option value="PERIODONCIA E IMPLANTES">PERIODONCIA E IMPLANTES</option>
                            <option value="ORTODONCIA Y ORTOPEDIA MAXILAR">ORTODONCIA Y ORTOPEDIA MAXILAR</option>
                            <option value="ODONTOLOGIA RESTAURADORA Y ESTETICA">ODONTOLOGIA RESTAURADORA Y ESTETICA</option>
                            <option value="ODONTOPEDIATRIA">ODONTOPEDIATRIA</option>
                            <option value="MEDICINA Y PATOLOGIA ESTOMATOLOGICA">MEDICINA Y PATOLOGIA ESTOMATOLOGICA</option>
                            <option value="ESTOMATOLOGIA DE PACIENTES ESPECIALES">ESTOMATOLOGIA DE PACIENTES ESPECIALES</option>
                            <option value="CIRUGIA BUCAL MAXILO FACIAL">CIRUGIA BUCAL MAXILO FACIAL</option>
                            <option value="AUDITORIA ODONTOLOGICA">AUDITORIA ODONTOLOGICA </option>
                            <option value="ENDODONCIA">ENDODONCIA </option>
                            <option value="ORTODONCIA Y ORTOPEDIA MAXILAR">ORTODONCIA Y ORTOPEDIA MAXILAR </option>
                            <option value="ODONTOLOGO GENERAL">ODONTOLOGO GENERAL </option>
                            <option value="IMPLANTOLOGIA ORAL INTEGRAL">IMPLANTOLOGIA ORAL INTEGRAL </option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="">Subir Foto de perfil:</label><br>
                        <div class="custom-file">
                            <!-- <input type="file" class="custom-file-input border border-info" id="customFileLang"> -->
                            <input type="file" name="foto_perfil_usuario" id="customFileLang" required>
                            <label class="custom-file-label border border-info" for="customFileLang">Seleccionar
                                Archivo</label>
                        </div>
                    </div>
                </div>
                <div class="text-right"><br>
                    <button type="submit" class="btn btn-sm btn-success">Guardar</button>
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Editar usuario modal -->
<div class="modal fade bd" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="p-2 mb-3 modal-content" style="font-family: 'Questrial', sans-serif;">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Editar Usuario</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <label for="">Tipo de Documento:</label>
                        <select class="form-control border border-info">
                            <option value="" selected>DNI</option>
                            <option value="">Carnet de Extranjeria</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="">DNI</label>
                        <input disabled class="form-control border border-info" type="text" value="74125638">
                    </div>
                    <div class="col-6">
                        <label for="">Nombre:</label>
                        <input disabled class="form-control border border-info" value="GLORIA MANUELA" type="text">
                    </div>
                    <div class="col-6">
                        <label for="">Apellidos:</label>
                        <input disabled class="form-control border border-info" value="LAJO ROJAS" type="text">
                    </div>
                    <div class="col-6">
                        <label for="">Sexo:</label>
                        <select class="form-control border border-info" name="" id="">
                            <option value="">Masculino</option>
                            <option value="">Femenino</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="">Número de Contacto: </label>
                        <input class="form-control border border-info" value="963821456" type="text">
                    </div>
                    <div class="col-6">
                        <label for="">Colegiatura:</label>
                        <input class="form-control border border-info" value="12345" type="text">
                    </div>
                    <div class="col-6">
                        <label for="">Especialidad:</label>
                        <select name="" class="form-control border border-info" id="">
                            <option value="">Seleccionar Especialidad</option>
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
                            <option selected value="">ENDODONCIA </option>
                            <option value="">ORTODONCIA Y ORTOPEDIA MAXILAR </option>
                            <option value="">ODONTOLOGO GENERAL </option>
                            <option value="">IMPLANTOLOGIA ORAL INTEGRAL </option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="">Tipo:</label>
                        <select name="" class="form-control border border-info" id="">
                            <option value="">Seleccionar Tipo</option>
                            <option selected value="">Doctor (a)</option>
                            <option value="">Tecnico (a)</option>
                            <option value="">Radiologo (a)</option>
                            <option value="">Asistente</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="">Estado:</label>
                        <select class="form-control border border-info" name="" id="">
                            <option value="">Activo</option>
                            <option value="">Inactivo</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="">Sede:</label>
                        <select class="form-control border border-info" name="" id="">
                            <option value="" selected>Los Olivos</option>
                            <option value="">La Victoria</option>
                            <option value="">San Juan de Miraflores</option>
                            <option value="">Villa Maria del Triunfo</option>
                            <option value="">La Victoria</option>
                            <option value="">San Juan de Lurigancho</option>
                            <option value="">Villa el Salvador</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="">Correo Electronico:</label>
                        <input class="form-control border border-info" value="gloria@gmail.com" type="text">
                    </div>
                    <div class="col-12">
                        <label for="">Subir Foto de perfil:</label><br>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input border border-info" id="customFileLang"
                                lang="es">
                            <label class="custom-file-label border border-info" for="customFileLang">Seleccionar
                                Archivo</label>
                        </div>
                    </div>
                </div>
                <div class="text-right"><br>
                    <button type="button" class="btn btn-sm btn-success">Guardar</button>
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--FIRMAS-->
<div class="modal firmas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="font-family: 'Questrial', sans-serif;">
        <div style="background-color: #fafafa" class="modal-content">
            <div class="modal-body text-center">
                <div class="row">
                    <div class="col-12 text-center">
                        <span style="font-size: 25px;color:#0B5345"><b>Anterior</b></span><br>
                        <canvas id="myCanvas"></canvas><br><br>
                    </div>
                    <div class="col-12 text-center">
                        <span style="font-size: 25px;color:#0B5345"><b>Actualizar</b></span><br>
                        <canvas id="myCanvas"></canvas><br><br>
                    </div>
                </div>
                <button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Guardar</button>
                <button type="button" value="Reset" id='resetSign' class="btn btn-sm text-white"
                    style="background-color: #D35400;">Limpiar</button>
            </div>
        </div>
    </div>
</div>

<!--Modal Eliminar-->
<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="<?=$baseUrl?>img/desactivar.png" width="100px" alt="">
                <h3><br>Esta seguro que desea desactivar este registro?</h3><br><br>
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-sm btn-success">Desactivar</button>
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
                        <span id="sys" class="navbar-brand" style="color:white;"><img id="sysd"
                                src="<?=$baseUrl?>img/nav-03.png" alt=""><b>SysDentist</b></span><br>
                    </div>
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 fotodoctor">
                            <img src="<?=$baseUrl?>img/doctor001.png" width="180px" alt="">
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8"><br><br>
                            <div class="card" style="border-radius: 40px 40px 40px 40px;">
                                <div class="card-body text-center"><br><br>
                                    <span>ASISTENCIA TÉCNICA:<br>
                                        <img src="<?=$baseUrl?>img/viejo.png" width="20px" alt=""><b>(01) 325 6478</b>
                                        <br>
                                    </span>
                                    <hr>
                                    <span>CONSULTAS Y SUGERENCIAS:</span><br>
                                    <img src="<?=$baseUrl?>img/viejo.png" width="20px" alt=""><b>(01) 422 6797</b> <br>
                                    <img src="<?=$baseUrl?>img/whatsapp.png" width="20px" alt=""> <b>983 523 514
                                    </b><br>
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


<footer class="text-center text-black-50">
    <div class="container ">
        <div class="footer-copyright ">
            Copyright ® 2016-2019 CSI INTERNATIONAL SERVICES S.A.C. <br>Todos los derechos reservados.
        </div>
    </div>
</footer>
<script src="<?=$baseUrl?>js/usuarios/index.js"></script>