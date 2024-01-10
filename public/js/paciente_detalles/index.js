console.log('esto es la consola de paciente detalles');
var arrayDataImagen = [];
var arrayDataTipoImagen = [];
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
        data:{DataImagen:arrayDataImagen, DataTipoImagen:arrayDataTipoImagen},
        success:function(response){
            console.log("resssssss : ",response);
        },error:function(){
            console.log("ERROR GENERAL DEL SISTEMA, POR FAVOR INTENTE MÁS TARDE");
        }
    });
    /* console.log(arrayDataImagen, arrayDataTipoImagen); */
});


$("#subir_imagen_radiografia").change(function(){
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
        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);
        $(datosImagen).on("load", function(event){
            var rutaImagen = event.target.result;
            $(".content_imagenes_radiografia").append(`
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 contador_divs_im">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <center><img src="${rutaImagen}" class="ruta_imagen_radiografia" width="80%">
                    </center>
                    <div class="card-body">
                        <p class="text-muted text-center" style="font-size: 10px;"> 2_20190814121035.jpg</p>
                        <div class="row">
                            <div class="col-2 text-left">
                                <a href="#"><img src="${baseurl}img/borrar.png" width="16px"
                                        alt=""></a>
                            </div>
                            <div class="col-7 text-center">
                                <span style="font-size: 13px;color:#C0392B;">03/09/2019</span>
                            </div>
                            <div class="col-2 text-right">
                                <a href="#!" id="mostrar" data-toggle="modal"
                                    data-target=".informesdeimg"><img
                                        src="${baseurl}img/lapizInforme.png" width="16px" alt=""></a>
                            </div>
                        </div>
                        <hr>
                        <div style="font-family: 'Manjari', sans-serif;">
                            <label>Tipo de Imagen:</label>
                            <select class="form-control border border-danger contador_tipo_imagen" name="tipo_imagen">
                                <option hidden>Seleccionar...</option>
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