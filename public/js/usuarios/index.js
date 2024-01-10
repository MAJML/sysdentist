console.log('esto es el js de usuarios');

$(document).on('submit', "#form_registrar_usuario", function(event){
    event.preventDefault();
    var data = $(this).serialize();
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Usuarios/RegistroUsuario',
        data:data,
        success:function(response){
            console.log("registrar sede : ", response);
            /* if(response == "ok"){
                $('.modal-header .close').click()
                $("#form_registrar_usuario")[0].reset()
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Nueva sede creado",
                    showConfirmButton: false,
                    timer: 1500
                });
                listarSedes()
            }else{
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "No se pudo crear la sede",
                    showConfirmButton: false,
                    timer: 1500
                });
            } */
        }
    });
});