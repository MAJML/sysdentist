console.log('esto es la consola de paciente detalles');
var arrayDataImagen = [];
var arrayDataTipoImagen = [];
var idPaciente = $("#id_paciente").val();
$("#btn_subir_imagen").click(function(){
    var elementos = document.getElementsByClassName('contador_divs_im');
    var ruta_imagen_radiografia = document.getElementsByClassName('ruta_imagen_radiografia');
    var contador_tipo_imagen = document.getElementsByClassName('contador_tipo_imagen');
    for (var i = 0; i < elementos.length; i++) {
        ruta_imagen_radiografia[i].classList.add('contador_img'+i);
        contador_tipo_imagen[i].classList.add('tipo_imagen'+i);
        arrayDataImagen.push($('.contador_img'+i).attr('src'))  
        arrayDataTipoImagen.push($('.tipo_imagen'+i).val())  
    }

    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Paciente_detalles/GuardarRadiografiaPaciente',
        data:{DataImagen:arrayDataImagen, DataTipoImagen:arrayDataTipoImagen, idPaciente:idPaciente},
        beforeSend: function() {
            let timerInterval;
                Swal.fire({
                title: "Cargando...",
                html: "Se esta subiendo el archivo, por favor espere",
                allowOutsideClick: false,
                timerProgressBar: false,
                didOpen: () => {
                    Swal.showLoading();
                    const timer = Swal.getPopup().querySelector("b");
                    timerInterval = setInterval(() => {
                    timer.textContent = `${Swal.getTimerLeft()}`;
                    }, 100);
                },
                willClose: () => {
                    clearInterval(timerInterval);
                }
                }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log("I was closed by the timer");
                }
            });
        },
        success:function(response){
            console.log("resssssss : ",response);
            if(response == "ok"){
                window.location.href = baseurl+'Paciente_detalles'+ "?token=" + idPaciente;
            }
        },error:function(){
            console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });
    
    /* console.log(arrayDataImagen, arrayDataTipoImagen); */
});

if($("#input_archivo_file").val() == '' || $("#input_archivo_file").val() == null){
    $(".btn_subir_file_ar").attr('disabled', true)
}
if($("#subir_imagen_radiografia").val() == "" || $("#subir_imagen_radiografia").val() == null){
    $("#btn_subir_imagen").attr('disabled', true)
}

$(document).on('submit', "#form_subir_archivos_rar_zip", function(event){
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        type: 'POST',
        url: baseurl+'Paciente_detalles/SubirArchivos',
        data: formData,
        contentType: false,
        processData: false,
        beforeSend: function() {
            let timerInterval;
                Swal.fire({
                title: "Cargando...",
                html: "Se esta subiendo el archivo, por favor espere",
                allowOutsideClick: false,
                timerProgressBar: false,
                didOpen: () => {
                    Swal.showLoading();
                    const timer = Swal.getPopup().querySelector("b");
                    timerInterval = setInterval(() => {
                    timer.textContent = `${Swal.getTimerLeft()}`;
                    }, 100);
                },
                willClose: () => {
                    clearInterval(timerInterval);
                }
                }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log("I was closed by the timer");
                }
            });
        },
        success:function(response){
            console.log(response);
            if(response == 'guardado'){
                $("#form_subir_archivos_rar_zip")[0].reset()
                $('.contador_divs_file').remove()
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "¡Archivo subido al sistema!",
                    showConfirmButton: false,
                    timer: 1500
                });
                window.location.href = baseurl+'Paciente_detalles'+ "?token=" + idPaciente;
            }else if(response == 'error_tipe_archivo'){
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "¡El archivo debe ser .rar o .zip!",
                    showConfirmButton: false,
                    timer: 1500
                });
            }else if(response == 'error'){
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "¡No seleccionaron ningun archivo!",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        }
    });
});

$("#input_archivo_file").change(function(){
    $(".btn_subir_file_ar").attr('disabled', false)
    var fechaActual = new Date();
    var formatoFecha = fechaActual.toLocaleDateString();
    $(".content_archivos_file_d").append(`
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 contador_divs_file">
                <div class="card shadow p-3 mb-5 bg-white rounded"><center><img src="${baseurl}img/archivo-rar.png" class="ruta_imagen_radiografia" width="80%">
                    </center>
                    <div class="card-body">
                        <p class="text-muted text-center" style="font-size: 10px;"> 2_20190814121035.jpg</p>
                        <div class="row">
                            <div class="col-2 text-left">
                                <a href="javascript:void(0);" onclick="eliminarSelectFile()"><img src="${baseurl}img/borrar.png" width="16px"
                                        alt=""></a>
                            </div>
                            <div class="col-7 text-center">
                                <span style="font-size: 13px;color:#C0392B;">${formatoFecha}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    `)
    $("#cont_arrch_file").removeClass("content_archivos_file_d")
});
function eliminarSelectFile(){
    $("#cont_arrch_file").addClass("content_archivos_file_d")
    $('.contador_divs_file').remove()
}


$("#subir_imagen_radiografia").change(function(){
    
    var fechaActual = new Date();
    var formatoFecha = fechaActual.toLocaleDateString();
    var cantidadCardRadiografia = $(".contador_divs_im").length+1
    var imagen = this.files[0];
    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){
        $("#subir_imagen_radiografia").val("");
            Swal.fire({
                position: "center",
                icon: "error",
                title: "¡La imagen debe estar en formato JPG o PNG!",
                showConfirmButton: false,
                timer: 1500
            });
    }else if(imagen["size"] > 1000000){
        $("#subir_imagen_radiografia").val("");
            Swal.fire({
                position: "center",
                icon: "error",
                title: "¡La imagen no debe pesar mas de 1MB!",
                showConfirmButton: false,
                timer: 1500
            });
    }else{
        $("#btn_subir_imagen").attr('disabled', false)
        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);
        $(datosImagen).on("load", function(event){
            var rutaImagen = event.target.result;
            $(".content_imagenes_radiografia").append(`
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 contador_divs_im" id="${cantidadCardRadiografia}">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <center><img src="${rutaImagen}" class="ruta_imagen_radiografia" width="80%">
                    </center>
                    <div class="card-body">
                        <p class="text-muted text-center" style="font-size: 10px;"> 2_20190814121035.jpg</p>
                        <div class="row">
                            <div class="col-2 text-left">
                                <a href="javascript:void(0);" onclick="eliminarSelectImagen(`+cantidadCardRadiografia+`)"><img src="${baseurl}img/borrar.png" width="16px"
                                        alt=""></a>
                            </div>
                            <div class="col-7 text-center">
                                <span style="font-size: 13px;color:#C0392B;">${formatoFecha}</span>
                            </div>
                            <div class="col-2 text-right">
                                <a hidden href="javascript:void(0);" id="mostrar" data-toggle="modal"
                                    data-target=".informesdeimg"><img
                                        src="${baseurl}img/lapizInforme.png" width="16px" alt=""></a>
                            </div>
                        </div>
                        <hr>
                        <div style="font-family: 'Manjari', sans-serif;">
                            <label>Tipo de Imagen:</label>
                            <select class="form-control border border-danger contador_tipo_imagen" name="tipo_imagen">
                                <option value="Rx. Cefalometrica">Rx. Cefalometrica</option>
                                <option value="Rx. Periapical">Rx. Periapical</option>
                                <option value="Rx. Senos Maxilares">Rx. Senos Maxilares</option>
                                <option value="Rx. Panorámicas">Rx. Panorámicas</option>
                                <option value="Rx. ATM">Rx. ATM</option>
                                <option value="Rx. Frontal">Rx. Frontal</option>
                                <option value="Rx. Carpal">Rx. Carpal</option>
                                <option value="Tomografía">Tomografía</option>
                                <option value="Fotos Extraorales">Fotos Extraorales</option>
                                <option value="Fotos Intraorales">Fotos Intraorales</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            `)
        })
        $("#subir_imagen_radiografia").val("");
        valor = $('.ruta_imagen_radiografia').attr('src')
        tipo_imagen = $('.contador_tipo_imagen').val()
        /* console.log('valor : ', valor); */
        /* objectDataImagen.push(imagen.valor) */
        
/*         objectDataImagen.imagen = valor;
        objectDataImagen.tipo_imagen = tipo_imagen;
        arrayDataImagen.push(objectDataImagen) */

    }
})

for (let index = 0; index < $('.pacientesArchivos').length; index++) {
    $('#btnDescargarImagen'+index).on('click', function() {
        var urlImagen = $('#imgPacienteradio'+index).attr('src');
        var enlaceTemporal = document.createElement('a');
        enlaceTemporal.href = urlImagen;
        enlaceTemporal.target = '_blank';
        enlaceTemporal.download = 'imagen.jpg'; // Puedes personalizar el nombre del archivo

        document.body.appendChild(enlaceTemporal);
        enlaceTemporal.click();

        document.body.removeChild(enlaceTemporal);
    });

    $("#imgPacienteradio"+index).click(function(){
        $("#view_imagen_his").attr('src', $("#imgPacienteradio"+index).attr('src'))
    });
}

$(".tipodecentro1").click(function(){
    var centro = $(".tipodecentro1").attr('nombre')
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Paciente_detalles/centro',
        data:{centro:centro},
        beforeSend: function() {
            /* $(".centros_radiologicos").remove() */
        },
        success:function(response){
            console.log("data centro : ",response);
            for (let i = 0; i < response.length; i++) {
                html = '<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-1 select" onclick="centroUsuarios('+response[i]['id']+')">';
                html += '<div class="card border border-info" id="">';
                html += '<div class="card-body">';
                html += '<div class="text-center">';
                html += '<img src="'+baseurl+'img/dental.png" width="45" alt=""><br>';
                html += '<span style="font-size: 16px;">'+response[i]['nombre_comercial']+'</span><br>';
                html += '<span style="font-size: 16px;"> hay '+response[i]['doctores']+' doctores</span>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                $(".centros_radiologicos").append(html);
            }
        },error:function(){
            console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });
}); 

$(".tipodecentro2").click(function(){
    var centro = $(".tipodecentro2").attr('nombre')
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Paciente_detalles/centro',
        data:{centro:centro},
        beforeSend: function() {
            /* $(".centros_radiologicos").remove() */
        },
        success:function(response){
            /* console.log("data centro : ",response); */
            for (let i = 0; i < response.length; i++) {
                html = '<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-1 select" onclick="centroUsuarios('+response[i]['id']+')">';
                html += '<div class="card border border-info" id="">';
                html += '<div class="card-body">';
                html += '<div class="text-center">';
                html += '<img src="'+baseurl+'img/dental.png" width="45" alt=""><br>';
                html += '<span style="font-size: 16px;">'+response[i]['nombre_comercial']+'</span><br>';
                html += '<span style="font-size: 16px;"> hay '+response[i]['doctores']+' doctores</span>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                $(".centros_radiologicos").append(html);
            }
        },error:function(){
            console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });
}); 

$(".tipodecentro3").click(function(){
    var centro = $(".tipodecentro3").attr('nombre')
    $("#texto_centro").html('Seleccione Clinica Privada')
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Paciente_detalles/centro',
        data:{centro:centro},
        beforeSend: function() {
            /* $(".centros_radiologicos").remove() */
        },
        success:function(response){
            /* console.log("data centro : ",response); */
            for (let i = 0; i < response.length; i++) {
                html = '<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-1 select" onclick="centroUsuarios('+response[i]['id']+')">';
                html += '<div class="card border border-info" id="">';
                html += '<div class="card-body">';
                html += '<div class="text-center">';
                html += '<img src="'+baseurl+'img/dental.png" width="45" alt=""><br>';
                html += '<span style="font-size: 16px;">'+response[i]['nombre_comercial']+'</span><br>';
                html += '<span style="font-size: 16px;"> hay '+response[i]['doctores']+' doctores</span>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                $(".centros_radiologicos").append(html);
            }
        },error:function(){
            console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });
}); 

function centroUsuarios(idCentro){
    $("#busquedaHospital").hide()
    $(".centros_radiologicos div").remove()
    $("#texto_centro").html('Seleccione el Doctor')
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Paciente_detalles/centroUsuarios',
        data:{idCentro:idCentro},
        success:function(response){
            console.log("data centroUsuarios : ",response);
            if(response.length > 0){
                for (let i = 0; i < response.length; i++) {
                    html = '<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-1 select" onclick="reasignarPaciente('+response[i]['id']+')">';
                    html += '<div class="card border border-info" id="">';
                    html += '<div class="card-body">';
                    html += '<div class="text-center">';
                    html += '<img src="'+baseurl+'img/doctor.png"" width="45" alt=""><br>';
                    html += '<span style="font-size: 16px;">'+response[i]['nombre']+' '+response[i]['apellido']+' || '+response[i]['sede']+'</span><br>';
                    html += '<span><b>Especialidad : </b>'+response[i]['especialidad']+'</span>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                    $(".centros_radiologicos").append(html);
                }
            }else{
                $("#texto_centro").html('No hay ningun Doctor registrado')
            }
            btnre = '<span class="btn btn-success w-50 mx-auto mt-5" onclick="enviarPacienteEmpresa('+idCentro+','+idPaciente+')">Reasignar a esta empresa</span><br><br><br>';
            $(".centros_radiologicos").append(btnre)
        },error:function(){
            console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });

}

function enviarPacienteEmpresa(idCentro, idPaciente){
    /* console.log(idCentro+'xd xd '+idPaciente); */
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Paciente_detalles/enviarPacienteEmpresa',
        data:{idPaciente:idPaciente, idCentro:idCentro},
        beforeSend: function() {
        },
        success:function(response){
            console.log("data enviarPacienteEmpresa : ",response);
            if(response == 'ok'){
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Paciente Reasignado",
                    showConfirmButton: false,
                    timer: 1500
                });
                window.location.href = baseurl+'Paciente_detalles'+ "?token=" + idPaciente;
            }else{
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Error del sistema, Intentelo m,as tarde",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        },error:function(){
            console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });
}

function reasignarPaciente(idUsuario) {
    Swal.fire({
        title: "¿Esta seguro de reasignar al paciente?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, reasignar"
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type:"POST",
                dataType:"json",
                url: baseurl+'Paciente_detalles/reasignarPaciente',
                data:{idUsuario:idUsuario, idPaciente:idPaciente},
                success:function(response){
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Paciente Reasignado",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    window.location.href = baseurl+'Paciente_detalles'+ "?token=" + idPaciente;
                },error:function(){
                    Swal.fire({
                        position: "center",
                        icon: "error",
                        title: "Error del sistema, Intentelo m,as tarde",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
        }
      });

}

function eliminarSelectImagen(cantidadCardRadiografia){
    $('#'+cantidadCardRadiografia).remove()
}

