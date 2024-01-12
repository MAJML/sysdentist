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

function ListarUsuarios(){
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Usuarios/listarUsuarios',
        beforeSend: function() {
            $("#content_usuarios_s .lalala").remove()
        },
        success:function(response){
            console.log("registrar sede : ", response);
            for (let i = 0; i < response.length; i++) {
                console.log(i); 
                html = '<div class="col-sm-6 col-md-3 lalala"><br>';
                html += '<div class="card rounded-0 text-center">'; 
                html += '<div class="card-body">';
                html += '<span><b>LOS OLIVOS</b></span>';
                html += '<h5 class="card-title"><img src="'+baseurl+response[i]['foto_perfil_usuario']+'" width="120px" height="120px" alt=""></h5>';
                html += '<span class="card-text">';
                html += '<b>'+response[i]['apellido']+' '+response[i]['nombre']+'</b> <br>';
                html += '<span class="text-muted"><b>'+response[i]['nombre']+'</b><br></span> Medico <br>';
                html += '<span class="badge badge-pill badge-success">Activo</span><br><br>';
                html += '<button type="button" data-toggle="modal" data-target=".bd" class="btn-sm btn btn-info rounded-0">Editar</button>';
                html += '<button type="button" class="btn-sm btn rounded-0" style="background-color: #566573;">';
                html += '<a href="#!" class="text-decoration-none text-white" data-toggle="modal" data-target=".firmas">Firma</a></button><br>';
                html += '<button type="button" data-toggle="modal" data-target="#eliminar" class="btn-sm btn btn-danger rounded-0">Desactivar</button>';
                html += '</span>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                $("#content_usuarios_s").append(html);
            }
            
        }
    });
}
