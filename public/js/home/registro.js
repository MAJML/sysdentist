
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
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Empresa registrada, ya puede Iniciar Sesión",
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar',
                    closeOnConfirm: false,
                    timer: 20000
                }).then((result)=>{
                    if(result.value){
                        window.location.href = baseurl;
                    }
                });
                setTimeout(function () {
                    window.location.href = baseurl;
                }, 20000);
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
        rucRepetido(ruc)
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
            $("#razon_social").attr('readonly', true)
            $("#nombre_comercial").attr('readonly', true)
            $("#razon_social").attr('placeholder', 'buscando ...')
            $("#nombre_comercial").attr('placeholder', 'buscando ...')
        },
        success:function(response){
            /* console.log(response); */

            if(response.success == false){
                $("#razon_social").attr('readonly', false)
                $("#nombre_comercial").attr('readonly', false)
                $("#razon_social").attr('placeholder', 'No se encontro el ruc Ingrese manualmente')
                $("#nombre_comercial").attr('placeholder', 'No se encontro el ruc Ingrese manualmente')
            }else{
                razon_social = response.data.nombre_o_razon_social.replace(/^"(.*)"$/, '$1');
                $("#razon_social").val(razon_social)
                $("#nombre_comercial").val(razon_social)
            }

            /* var cadenaConComillas = '"Hola, mundo!"';
            var cadenaSinComillas = cadenaConComillas.replace(/^"(.*)"$/, '$1'); */

            /* razon_social = response.data.nombre_o_razon_social.replace(/^"(.*)"$/, '$1'); */


        },error:function(){
            console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });
}

function rucRepetido(ruc){
    $.ajax({
        type:"POST",
        dataType:"json",
        url: baseurl+'Home/consultarRucRepetido',
        data:{ruc:ruc},
        success:function(response){
            /* console.log('esta es la funcion de ruc repetido: ', response); */
            if(response == false){
                consultaSunat(ruc)
            }else{
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Esta Empresa ya esta registrado",
                    showConfirmButton: false,
                    timer: 1500
                });
                $("#form_registro_empresa")[0].reset();
            }
        },error:function(){
            console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });
}
