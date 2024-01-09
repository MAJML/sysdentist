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