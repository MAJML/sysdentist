
<!-- <script src="<?= $baseUrl ?>js/jquery-3.5.1.slim.min.js"></script>
<script src="<?= $baseUrl ?>js/bootstrap.bundle.min.js"></script>
</body>

</html>
 -->

<script>
      $(".pacientes").hide()
      $(".registrar").click(function(){
         $(".pacientes").show()
         $("#doctor").hide()
      })
    
  // $(".modalregistrosedesusuarios").modal("show")
    
    $("#registrodatos").hide()

    $(".btnsiguientesede").click(function(){
       $("#registrodatos").show()
       $("#registrosede").hide()
       $(".progress-bar").width("80%")
       $(".progress-bar").html("80%")
       $('.modalregistrosedesusuarios').modal({
       keyboard: false
       })
    })

    $(".btnsiguientedatos").click(function(){
       $(".progress-bar").width("100%")
       $(".progress-bar").html("100%")
       $('.modalregistrosedesusuarios').on('hidden.bs.modal', function (e) {
          $(".modalbienvenidaSysdentist").modal("show")
       })
    })
   </script>

   <script>
      listar();
    $(document).ready(function(){
       $("#ocultar").click(function(){
          $("#ocultado").hide();
          $("#personal").show();
       });
       $("#oculto").click(function(){
          $("#personal").hide();
          $("#ocultado").show();
       });
       $("#regresar").click(function(){
          $("#ocultado").hide();
          $("#personal").show();
       });
    });
    function registrar(){
     
     window.location.href="detalles.php"
    }
  
    function listar(){
    var template='';
     for(var i = 0; i < localStorage.length; i++){

        let clave = localStorage.key(i);
       let paciente = JSON.parse(localStorage.getItem(clave));
      template+=`
       <div class="row">
         <div class="col-12">
            <h5 class="text-center"><b>HC-src${paciente.dni}</b></h5><hr style="background-color: #222d32">
                                 </div>
                                 <div class="col-12"> <br>
                                    <p class="card-text"><b>DNI: </b> ${paciente.dni}</p>
                                 </div>
                                 <div class="col-12">
                                    <p class="card-text"><b>NOMBRES: </b>${paciente.nombres} ${paciente.apellidos}</p>
                                 </div><hr>
                                 <div class="col-12 text-right">
                                    <a href="detalles.php" type="button" class="btn btn-sm text-white" style="background-color:#367fa9">DETALLE</a>
                                 </div>
                              </div>
      
      `;
      
                   
  }
 $("#card_pacientes").empty().append(template);  
      
         
    }
   
   </script>

</body>
</html>