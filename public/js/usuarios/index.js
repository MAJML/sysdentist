console.log('esto es el js de usuarios');
ListarUsuarios()

$(document).on('submit', "#form_registrar_usuario", function(event){
    event.preventDefault();
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Usuarios/RegistroUsuario',
        data:new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        success:function(response){
            console.log("la data del form registro usuarios : ",response);
            if(response == "ok"){
                $('.modal-header .close').click()
                $("#form_registrar_usuario")[0].reset()
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Usuario Registrado",
                    showConfirmButton: false,
                    timer: 1500
                });
                ListarUsuarios()
            }else{
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "No se pudo Registrar al usuario",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        }
    });
});

$("#tipo_documento_usuario").change(function(){
    tipo_document = $('#tipo_documento_usuario').val()
    if(tipo_document == 'DNI'){
        $("#dni").addClass('buscar_reniec')
    }else{
        $("#dni").removeClass("buscar_reniec")
    }
});

$(".buscar_reniec").keyup(function(){
    dni = $(".buscar_reniec").val()
    if (dni.length == 8) {
        /* consultaReniec(dni) */
        ValidarUsuarioRepetido(dni)
    }
});

$("#correo_usuario").keyup(function(){
    correo = $("#correo_usuario").val()
    VerificarCorreoRepetido(correo)
});

function VerificarCorreoRepetido(correo){
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Usuarios/verificarCorreoRepetido',
        data:{correo:correo},
        success:function(response){
            if(response != false){
                $("#correo_usuario").val('')
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Este correo ya esta registrado",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        },error:function(){
            console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });
}

function consultaReniec(dni){
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Usuarios/buscarReniec',
        data:{dni:dni},
        beforeSend: function() {
            $("#nombre").val('')
            $("#apellido").val('')
            $("#dni").css("border","1px solid #E74C3C ")
        },
        success:function(response){
            /* console.log("api reniec : ",response); */
            if(response.success == true){
                $("#dni").css("border","1px solid #14B76E")
                $("#nombre").val(response.data.nombres)
                $("#apellido").val(response.data.apellido_paterno+' '+response.data.apellido_materno)             
            }else{
                $("#dni").css("border","1px solid #E74C3C ")
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Advertencia, este DNI no existe",
                    showConfirmButton: false,
                    timer: 1500
                });
            }

        },error:function(){
            console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });
}

function ValidarUsuarioRepetido(dni){
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Usuarios/validarUsuarioRepetido',
        data:{dni:dni},
        success:function(response){
            if(response == false){
                consultaReniec(dni)
            }else{
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Este DNI ya esta registrado",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
            /* console.log("validar usuario repetido : ",response); */
        },error:function(){
            console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });
}

function ListarUsuarios(){
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Usuarios/listarUsuarios',
        beforeSend: function() {
            $("#content_usuarios_s .lalala").remove()
        },
        success:function(response){
            /* console.log("registrar sede : ", response); */
            for (let i = 0; i < response.length; i++) {
                if(response[i]['foto_perfil_usuario'] != ''){
                    fotoUsuario = baseurl+response[i]['foto_perfil_usuario'];
                }else{
                    fotoUsuario = 'https://www.shutterstock.com/image-vector/blank-avatar-photo-place-holder-600nw-1095249842.jpg';
                }
                html = '<div class="col-sm-6 col-md-3 lalala"><br>';
                html += '<div class="card rounded-0 text-center">'; 
                html += '<div class="card-body">';
                html += '<span><b>'+response[i]['sede']+'</b></span>';
                html += '<h5 class="card-title"><img src='+fotoUsuario+' width="120px" height="120px" alt=""></h5>';
                html += '<span class="card-text">';
                html += '<b>'+response[i]['apellido']+' '+response[i]['nombre']+'</b> <br>';
                html += '<span class="text-muted"><b>'+response[i]['nombre']+'</b><br></span> <br>';
                html += '<span class="badge badge-pill badge-success">Activo</span><br><br>';
                html += '<button type="button" data-toggle="modal" data-target=".bd" class="btn-sm btn btn-info rounded-0 btnEditarUsuario" onclick="DataUsuarioEdit('+response[i]['id']+')">Editar</button>';
                html += '<button type="button" class="btn-sm btn rounded-0" style="background-color: #566573;" hidden>';
                html += '<a href="#!" class="text-decoration-none text-white" data-toggle="modal" data-target=".firmas">Firma</a></button><br>';
                html += '<button type="button" data-toggle="modal" data-target="#eliminar" class="btn-sm btn btn-danger rounded-0" hidden>Desactivar</button>';
                html += '</span>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                $("#content_usuarios_s").append(html);
            }
            
        }
    });
}

function DataUsuarioEdit(id){
    console.log('sadd : ', id);
    $("#id_usuario_edit").val(id)
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Usuarios/DataUsuarioEdit',
        data:{id:id},
        success:function(response){
            /* console.log("validar usuario response : ",response); */
            $('#dni_edit').val(response['dni'])
            $('#nombre_edit').val(response['nombre'])
            $('#apellido_edit').val(response['apellido'])
            $('#sexo_edit').val(response['genero'])
            $('#celular_edit').val(response['telefono_movil'])
            $('#colegiatura_edit').val(response['colegiatura'])
            $('#especialidad_edit').val(response['especialidad'])
            $('#tipo_edit').val(response['tipo_doctor'])
            $('#email_edit').val(response['correo'])
        },error:function(){
            console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });
}

$(document).on('submit', "#form_editar_usuario", function(event){
    event.preventDefault();
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Usuarios/ModificarUsuario',
        data:new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        success:function(response){
            $('.btn_cerrarModel_EditarForm').click();
            /* console.log("la data del form Modificar Usuario : ",response); */
            if(response == "ok"){
                ListarUsuarios()
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Usuario Modificado",
                    showConfirmButton: false,
                    timer: 1500
                });
            }else{
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "No se pudo MNodificar el usuario",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        }
    });
});