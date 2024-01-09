
listarSedes()

$(document).on('submit', "#form_registrar_sede", function(event){
    event.preventDefault();
    var data = $(this).serialize();
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Sedes/registrarSede',
        data:data,
        success:function(response){
            console.log("registrar sede : ", response);
            if(response == "ok"){
                $('.modal-header .close').click()
                $("#form_registrar_sede")[0].reset()
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
            }
        }
    });
});

function listarSedes(){
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Sedes/listarSedes',
        beforeSend: function() {
            $("#table_sedes tbody").html('')
        },
        success:function(response){
            /* console.log("registrar sede : ", response); */
            for (let i = 0; i < response.length; i++) {
                console.log(i); 
                html = '<tr><td class="text-center">'+response[i]['nombre']+'</td>';
                html += '<td class="text-center">'+response[i]['direccion']+'</td>'; 
                html += '<td class="text-center">'+response[i]['telefono']+'</td>';
                html += '<td class="text-center">';
                html += '<a href="#" class="badge bg-success text-white"  data-toggle="modal" data-target="#editarsedes">Editar</a>';
                html += '<a href="#"  data-toggle="modal" data-target="#eliminar" class="badge badge-danger">Eliminar</a>';
                html += '<a href="#" class="badge bg-info text-white" data-toggle="modal" data-target=".servicio">Servicios</a>';
                html += '</td></tr>';
                $("#table_sedes tbody").append(html);
            }
            
        }
    });
}