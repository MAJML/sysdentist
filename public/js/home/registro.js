
$(document).on('submit', "#form_registro_empresa", function(event){
    event.preventDefault();
    var data = $(this).serialize();
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Home/registrarEmpresa',
        data:data,
        success:function(response){
            $("#form_registro_empresa")[0].reset();
            if(response == 'ok'){
                window.location.href = baseurl+"pacientes";
            }else{
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        },error:function(){
            console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });
});

$("#ruc").keyup(function(){
    ruc = $("#ruc").val()
    if (ruc.length >= 11) {
        consultaSunat(ruc)
    }
});


function consultaSunat(ruc){
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Home/consultaSunat',
        data:{ruc:ruc},
        beforeSend: function() {
            $("#razon_social").val('')
            $("#nombre_comercial").val('')
        },
        success:function(response){
            /* console.log(response.data.nombre_o_razon_social); */
            $("#razon_social").val(response.data.nombre_o_razon_social)
            $("#nombre_comercial").val(response.data.nombre_o_razon_social)
        },error:function(){
            console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });
}