console.log('esto es la cosola del login');

$(document).on('submit', "#form_login", function(event){
    event.preventDefault();
    var data = $(this).serialize();
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Home/iniciarSecion',
        data:data,
        success:function(response){
            console.log(response);
            $("#form_login")[0].reset();
            if(response == 'entro'){
                window.location.href = baseurl+"pacientes";
            }else if(response == 'Credenciales Incorrectas'){
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Credenciales Incorrectas",
                    showConfirmButton: false,
                    timer: 1500
                });
            }else if(response == 'error'){
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "No esta Registrado , vaya a crearse una cuenta",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        },error:function(){
            console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });
  });