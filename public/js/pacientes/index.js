console.log('pacientes');
$("#tipo_documento").css("border","1px solid #E74C3C ")
$("#dni").attr('disabled', true)

$(document).on('submit', "#form_registrar_paciente", function(event){
    event.preventDefault();
    var data = $(this).serialize();
    var dni = $("#dni").val();
    var email = $("#email").val();
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Pacientes/registrarPaciente',
        data:data,
        success:function(response){
            console.log(response);
            redireccionandoVentana(dni, email)
            $("#form_registrar_paciente")[0].reset();
            $(".modal-header .close").click(); 
        },error:function(){
            console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });
});

$("#tipo_documento").change(function(){
    $("#tipo_documento").css("border","1px solid #14B76E")
    $("#dni").css("border","1px solid #E74C3C ")
    $("#dni").attr('disabled', false)
    if($("#tipo_documento").val() == "Pasaporte o Carnet de Extrangeria"){
        $("#text_dni_pasaporte").html('PASAPORTE')
    }else if($("#tipo_documento").val() == "DNI"){
        $("#text_dni_pasaporte").html('DNI')
    }
});

$("#dni").keyup(function(){
    dni = $("#dni").val()
    if (dni.length == 8) {
        consultaReniec(dni)
    }
});

/*----------------------- BUSCAR PACIENTES ---------------------- */
$("#buscador_pacientes").keyup(function(){
    paciente =$("#buscador_pacientes").val()
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Pacientes/buscarPacientes',
        data:{paciente:paciente},
        beforeSend: function() {
        },
        success:function(response){
            $("#content_paciente_data_llena div").remove()
            /* console.log("buscar pacient3 : ",response); */
            for (let i = 0; i < response.length; i++) {
                if(response[i]['id_usuario'] == null || response[i]['id_usuario'] == ''){
                    doctor = 'NO ASIGNADO'
                }else{
                    doctor = response[i]['nombre_usuario']+' '+response[i]['apellido_usuario']
                }   
                if(response[i]['nombre_comercial'] == null || response[i]['nombre_comercial'] == ''){
                    referido = 'NO REFERID'
                }else{
                    referido = response[i]['nombre_comercial']
                }   
                html = '<div class="col-md-6 mb-3 elemento">';
                html += '<div class="card p-4">';
                html += '<h5 class="text-center"><b>'+response[i]['codigo_paciente']+'</b></h5> <hr>';
                html += '<p><b>DNI: </b> '+response[i]['dni']+'</p>';
                html += '<p><b>NOMBRES: </b> '+response[i]['nombres']+' '+response[i]['apellidos']+'</p>';
                html += '<p><b>DOCTOR: </b> '+doctor+'</p>';
                html += '<p><b>REFERIDO: </b> '+referido+'</p>';
                html += '<div class="d-flex justify-content-end">';
                html += '<a href="'+baseurl+'Paciente_detalles?token='+response[i]['id']+'" class="btn btn-primary">DETALLE</a>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                $("#content_paciente_data_llena").append(html);
            }
        },error:function(){
            console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });
});
/* ---------------------------------------------------------------- */

function consultaReniec(dni){
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Pacientes/buscarReniec',
        data:{dni:dni},
        beforeSend: function() {
            $("#nombres").val('')
            $("#apellidos").val('')
            $("#fecha_nacimiento").val('')
            $("#dni").css("border","1px solid #E74C3C ")
        },
        success:function(response){
            /* console.log("api reniec : ",response); */
            if(response.success == true){
                $("#dni").css("border","1px solid #14B76E")
                $("#nombres").val(response.data.nombres)
                $("#apellidos").val(response.data.apellido_paterno+' '+response.data.apellido_materno)
                $("#fecha_nacimiento").val(response.data.fecha_nacimiento)    
                $("#direccion").html(response.data.direccion)   
                $("#genero").val(response.data.sexo)         
            }else{
                $("#dni").css("border","1px solid #E74C3C ")
            }

        },error:function(){
            console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });
}

function redireccionandoVentana(dni, email){
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Pacientes/buscarPacienteCreado',
        data:{dni:dni, email:email},
        success:function(response){
            console.log("dad : ",response['id']);
            window.location.href = baseurl+'Paciente_detalles'+ "?token=" + response['id'];   
        }
    });
}