
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script language="JavaScript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script language="JavaScript" src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" />
        

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--     <link href="../packages/core/main.css" rel="stylesheet" />
    <link href="../packages/bootstrap/main.css" rel="stylesheet" />
    <link href="../packages/timegrid/main.css" rel="stylesheet" />
    <link href="../packages/daygrid/main.css" rel="stylesheet" />
    <link href="../packages/list/main.css" rel="stylesheet" />
    <script src="../packages/core/main.js"></script>
    <script src="../packages/interaction/main.js"></script>
    <script src="../packages/bootstrap/main.js"></script>
    <script src="../packages/daygrid/main.js"></script>
    <script src="../packages/timegrid/main.js"></script>
    <script src="../packages/list/main.js"></script>
    <script src="../js/theme-chooser.js"></script> -->
    <script> var baseurl = "<?=$baseUrl?>"; </script>
</head>
<body>
    <style>
        body{
            background: url("<?=$baseUrl?>img/What.jpeg");
            background-repeat: no-repeat;
            background-size : 100% 150%;
            background-position: center;
            height: 100vh;
        }
        .contenedor{
            padding-left: 80px;
            padding-right: 150px;
        }
        .formulario{
            padding-left: 40px;
            padding-right: 40px;
        }
        #innova{
                font-size: 30px;
            }
        #title{
            font-size: 120px;
            color: rgba(255,255,255,0.5);
            opacity: 10;
            }
        .espacio{
            padding-top: 200px;
            }
        .espacio2{
            padding-top: 20px;
            }
        @media only screen and (max-width: 1000px){
           .contenedor{
                padding-left: 200px;
                padding-right: 200px;
            }
        }
        @media only screen and (max-width: 1000px){
            
            body{
                background-size : 150% 150%;
            }
           .contenedor{
                padding-left: 10px;
                padding-right: 10px;
            }
            #title{
                font-size: 48px;
            }
            #medico{
                display: none;
            }
            #innova{
                font-size: 15px;
            }
            .card{
                padding: 0px 5px 0px 5px;
            }
            .espacio{
                padding-top: 50px;
                display: none;
            }
        }
        @media only screen and (max-width: 1198px){
           .contenedor{
                padding-left: 300px;
                padding-right: 300px;
            }
            body{
                background-size : 150% 150%;
            }
            .espacio{
                display: none;
            }
        }
        @media only screen and (max-width: 1000px){
           .contenedor{
                padding-left: 200px;
                padding-right: 200px;
            }
            body{
                background-size : 200% 150%;
            }
        }
        @media only screen and (max-width: 700px){
           .contenedor{
                padding-left: 100px;
                padding-right: 100px;
            }
            .espacio{
                display: none;
            }
            .formulario{
                padding-left: 10px;
                padding-right: 10px;
            }
            body{
                background-size : 300% 150%;
            }
        }
        @media only screen and (max-width: 500px){
           .contenedor{
                padding-left: 10px;
                padding-right: 10px;
            }
            .espacio{
                display: none;
            }
            .formulario{
                padding-left: 30px;
                padding-right: 30px;
            }
            body{
                background-size : 300% 150%;
            }
        }
    </style>
    <div class="contenedor">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 espacio" id="">
                <div class="row" id="filas">
                    <div class="col-12 text-center">
                        <h2 id="title"><b>SYSDENTIST</b></h2>
                    </div>
                    <div class="col-12 text-center">
                        <div class="text-white">
                            <span id="innova" style="-webkit-text-fill-color: #00e1cd">Innovación informatica para sus pacientes y su clínica</span>
                            <marquee><strong>SYSDENTIST - LOS MEJORES PROFESIONALES SE JUNTARON: ODONTOLOGOS, CIRUJANOS DENTISTAS, RADIOLÓGOS, ORTODONCISTA, ENDODONCISTA, PERIODONCISTA, PROTESISTA, CIRUJANO ORAL Y ODONTOPEDIATRAS</strong></marquee>
                            <p style="font-size: 23px">Suscribete y úsalo</p>
                            <div class="text-center">
                                <span>CONSULTAS Y SUGERENCIAS:</span> &nbsp;
                                <img src="<?=$baseUrl?>img/phone.png" width="20px"><b> (01) 422 6797</b> | <img src="<?=$baseUrl?>img/what.png" width="18px"><b> 983 523 514</b> |
                                <span>ASISTENCIA TÉCNICA: <img src="<?=$baseUrl?>img/phone.png" width="20px"><b> (01) 325 6478</b></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 espacio2">
                <div class="card"style="background-color: transparent;border: 0px solid;">
                    <div class="card-body bg-white formulario" style="opacity: 0.95 ;border-radius: 20px 20px 20px 20px;font-family: 'Didact Gothic', sans-serif;">
                        <div class="text-center">
                            <span style="color: rgb(0, 51, 160);text-align: center"><h4><b>Ingresa a Sysdentist</b></h4></span>
                        </div>
                        <form id="form_registro_empresa" method="post">
                            <div class="form-group">
                                <label for="">RUC: </label>
                                <input class="form-control" type="number" name="ruc" id="ruc" required>
                                <label for="">RAZON SOCIAL <span class="text-danger">(No se aceptan caracteres Especiales)</span>: </label>
                                <textarea class="form-control" name="razon_social" id="razon_social" rows="2" required></textarea>
                                <label for="">NOMBRE COMERCIAL <span class="text-danger">(No se aceptan caracteres Especiales)</span>: </label>
                                <textarea class="form-control" name="nombre_comercial" id="nombre_comercial" rows="1" required></textarea>
                                <!-- <label for="">USUARIO ADMINISTRADOR: </label>
                                <input class="form-control" type="text" name="usuario_admin" required> -->
                                <label for="">CORREO: </label>
                                <input class="form-control" type="email" name="correo" id="" required>
                                <label for="">CONTRASEÑA: </label>
                                <input class="form-control" type="text" name="password" id="" required>
                                <label for="">TIPO DE NEGOCIO:</label>
                                <select name="tipo_negocio" class="form-control border-danger" id="" required>
                                    <option value="" hidden>Seleccionar Tipo</option>
                                    <option value="Centro Radiologico">Centro Radiologico</option>
                                    <option value="Odontólogo Particular">Odontólogo Particular</option>
                                    <option value="Clinica Privada">Clinica Privada</option>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">Acepto <a href="" data-toggle="modal" data-target="#exampleModalScrollable">terminos y condiciones</a></label>
                                </div><br>
                                <button type="submit" style="background-color: #00E1CD;" class="btn btn-sm btn-block">ACEPTAR</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center text-black-50">
            <div class="container">
                <div class="footer-copyright">
                    Copyright ® 2016-2019 <a class="text-black-50" href="https://www.csiingenieros.com">CSI INTERNATIONAL SERVICES S.A.C.</a> <br>Todos los derechos reservados.
                </div>
            </div>
        </footer>
    </div>
    <div style="font-family: 'Didact Gothic', sans-serif" class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Terminos de Servicio Sysdentist</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Al utilizar<b> Sysdentist </b> usted declara que conoce y acepta los siguientes términos y condiciones ("Términos del Servicio"). Se le aconseja que revise los Términos del Servicio de vez en cuando por cualquier actualización o cambio que pueda afectarlo.<b> Sysdentist </b> se reservan el derecho de actualizar y modificar los términos de servicio en cualquier momento sin previo aviso. Las nuevas funcionalidades que pueden ser añadidas al Servicio estarán sujetas a los Términos del Servicio. En caso de seguir utilizando el Servicio después que dichas modificaciones se hayan hecho, esto constituirá su aceptación de dichas modificaciones. La violación de cualquier parte de los Términos del Servicio resultará en la cancelación de su cuenta. <br>
                    1. Componentes del servicio contratado:<br>
                    Tanto<b> Sysdentist </b> corresponden a plataformas online para la administración de consultas y clínicas dentales/médicas, que además posee soporte remoto, disponible de 9 a 18 hrs hora local PERU.<br>
                    1.1 Para Sysdentist: el soporte es en canal telefónico, email y Skype exclusivamente para planes Pro y Titanium y en formato exclusivamente email para el plan Basic. Los planes Pro y Titanium incluyen capacitación básica gratuita para el personal, con un máximo de 6 hrs totales entre todas las sesiones, y repartidas en un máximo de 3 sesiones. Estas sesiones pueden ser en oficinas autorizadas de <b>CSI INTERNATIONAL SERVICES S.A.C.</b> o por medio de Skype (online).
                    Estas sesiones pueden ser exigidas exclusivamente durante el primer mes de servicio. Si el cliente necesita más tiempo de capacitación, o necesita capacitaciones extras fuera del primer mes de uso, puede solicitar horas adicionales bajo las mismas condiciones anteriores, por un valor de 60 USD (1,5 UF) por capacitación (2 horas). En caso de que el cliente desee capacitaciones en un lugar distinto, estas deberán ser evaluadas por el ejecutivo, evaluando el costo de transporte y tiempo dedicado en el mismo. El costo de esta alternativa es de 100 USD (2,5 UF) por 2 horas de capacitación consumida por el ejecutivo, además se debe considerar el costo de transporte asociado, donde se considera también el tiempo de transporte desde las instalaciones principales de HealthAtom como base para el cálculo.<br>
                    1.2 Para Sysdentist: el soporte es en cualquiera de los canales disponibles (teléfono, email o skype). Las capacitaciones son gratuitas mientras sean en la oficina o por Skype. Las horas destinadas para capacitación son las siguientes:<br>
                    •	Capacitación Configuración - Administrador: 2 sesiones, 90 minutos cada una.<br>
                    •	Capacitación Operación - Key Users/administrador: 3 sesiones, 90 minutos cada una.<br>
                    Estas sesiones pueden ser exigidas exclusivamente durante los primeros dos meses de servicio. Si el cliente quiere ejecutar el paquete en terreno, tiene un valor de 15 UF. Cada hora adicional de capacitación en nuestra oficina tiene un valor de 2 UF. Cada hora adicional de capacitación en terreno tiene un valor de 3 UF. Además se debe considerar el costo de transporte asociado, donde se considera también el tiempo de transporte desde las instalaciones principales de HealthAtom como base para el cálculo.
                    Tanto en Sysdentist, es responsabilidad del cliente contactar y coordinar con nuestro equipo las sesiones de ayuda. Mientras estén en proceso de implementación (caso de<b> Sysdentist </b> durante el primer mes de servicio, y<b> Sysdentist </b> los dos primeros meses de servicio), puede solicitar la carga de la base de datos de sus pacientes y arancel de precios, siempre y cuando estos se entreguen en el formato estipulados por el ejecutivo, y en una instancia única, donde exista sólo un archivo plano de los pacientes y otro archivo plano único del arancel de precios. Estas cargas de datos son únicas, y cualquier carga adicional de datos externos debe ser evaluada en términos de consumo de horas de ejecutivo, con un valor de 60 USD (1,5 UF) la hora. Además, se señala de manera explícita, que los datos de pacientes a cargar deben pertenecer a la clínica solicitante, y no puede tratarse de una Base de Datos adquirida. Para resguardar la veracidad de esta información, será requisito excluyente que ésta cuente con el número de identificación nacional de cada paciente.
                    Para Sysdentist, el espacio inicial para almacenamiento de imágenes es de 10 Gb.
                    Todos los usuarios o licencias, que sean gratuitas, no podrán reclamar una disminución en el pago mensual al momento de desistir de su uso.
                    Existe la posibilidad que un cliente pueda solicitar ampliar la capacidad, independiente del plan, a un espacio de 5 Gb, por un monto de 25 USD/mes (0,5 UF/mes) adicionales al valor del plan, y por cada 5Gb extra por sobre esos 5 Gb, el costo también es de 25 USD/mes (0,5 UF/mes) adicionales al monto del plan.<br>
                    2. Modificaciones en el servicio:<br>
                    <b> Sysdentist </b> se reservan el derecho de modificar, suspender o interrumpir el Servicio en cualquier momento si el cliente posee deudas de cualquier tipo con la entidad.<b> Sysdentist </b> poseen la facultad de modificar la tarifa mensual cobrada por el servicio una vez al año, por términos de reajuste. Esta tarifa no puede subir más de un 10% anual, y su objetivo es simplemente compensar los efectos inflacionarios. En caso de que<b> Sysdentist </b> deseen modificar la tarifa, se le notificará al menos con un mes de anticipación, para que usted pueda recuperar su información y salir del servicio si no se encuentra de acuerdo.<br>
                    3. Funcionalidades futuras:<br>
                    El usuario acepta que sus compras no están sujetas a la entrega de cualquier funcionalidad o características futuras, a menos que<b> Sysdentist </b> así lo comuniquen.<br>
                    4. Tarifas y Pago:<br>
                    Las tarifas se basan en servicios y contenidos adquiridos y no el uso real. Las obligaciones de pago son “no cancelables” y las tarifas pagadas no son reembolsables (a excepción de lo descrito en el punto 8. Políticas de Satisfacción Garantizada). La facturación o pago se realiza por período anticipado (ya sea mensual, semestral o anual), por lo cual, al emitir la notificación de cobro del período no se realizará devolución de dinero si se disminuyen profesionales o usuarios con posterioridad a la emisión de este documento.
                    La notificación de cobro es emitida y enviada al cliente de forma electrónica vía e-mail, es responsabilidad del cliente proporcionar dicha dirección e indicar a<b> Sysdentist </b> cualquier cambio, posterior a la activación de la plataforma, de dicha dirección.<br>
                    5. Pagos Automaticos con Tarjeta de Crédito Y Dévito:<br>
                    El cliente podrá contratar el pago automatico del Servicio “Sysdentist” a través del sistema OneClick, operado por Transbank S.A.----
                    La modalidad de cobro OneClick permite al cliente agregar una tarjeta de crédito, en la cual autoriza a <b>CSI INTERNATIONAL SERVICES S.A.C.</b> a cargar mensual, semestral o anualmente el valor correspondiente al servicio contratado, una vez emitida la notificación de cobro indicada en el numeral 4, por lo cual el cliente se compromete a mantener la tarjeta vigente y con el crédito suficiente para cubrir los cargos que efectúe la compañia. En caso de no poder efectuar el cargo en la tarjeta de crédito, el cobro se reintentará durante los 4 días siguientes, si durante los 5 intentos de cobro este resulta infructuoso y usted no contacta al equipo de pagos de <b>CSI INTERNATIONAL SERVICES S.A.C.</b>, su plataforma quedará en estado impago e ingresará en el proceso de corte automatico.<br>
                    El cliente contactará al equipo de pagos de <b>CSI INTERNATIONAL SERVICES S.A.C.</b> a través del correo eléctronico pagos@healthatom.com, en los siguientes casos:<br>
                    •	Regularización de pagos<br>
                    •	Eliminación del servicio OneClick<br>
                    •	Discrepancia entre el monto cargado en la tarjeta y el valor de su plan<br>
                    •	Extravío de la tarjeta y requerimiento de ingresar una nueva<br>
                    <b> Sysdentist </b> protege y asegura los datos personales y de la tarjeta de crédito asociada al servicio y en dicho mérito garantiza que serán utilizados solo para los fines asociados a la prestación del servicio contratado y no los revelará a terceros, a menos que estemos requeridos por ley o autoridad a hacerlo, dando cumplimiento a las normas legales y disposiciones reglamentarias de protección de datos personales.<br>
                    6. Pagos atrasados:<br>
                    Si cualquier cantidad facturada no es recibida por nosotros en la fecha prevista, (a) los cargos pueden devengar intereses de mora al tipo del 1,5% del saldo pendiente por mes, o la tasa máxima permitida por la ley, lo que sea menor, y/o (b) Podemos condicionar futuras renovaciones de la suscripción.<br>
                    •	Para clientes chilenos:<br>
                    Clientes que acumulan 3 notificaciones de cobro del servicio impagas, se les eliminará la plataforma, todo esto previo aviso del equipo de Postventa quién advertirá de la situación, además de las notificaciones anteriores que fueron enviadas por el equipo de pagos.<br>
                    •	Para todos los clientes excepto Peruanos:<br>
                    Clientes que acumulan 2 notificaciones de cobro del servicio impagas, se les eliminará la plataforma, todo esto previo aviso del equipo de Postventa quién advertirá de la situación, además de las notificaciones anteriores que fueron enviadas por el equipo de pagos.<br>
                    7. Cancelación y término del servicio:<br>
                    Usted es el único responsable de la adecuada cancelación de su cuenta. Su cuenta y todos sus contenidos serán eliminados 4 semanas tras la cancelación del servicio, esto también aplicará en caso de no cumplimiento de las políticas de pago referidas en el punto 6. Luego de este periodo<b> Sysdentist </b> borrarán toda la información sin almacenar nada de ella, y sin alternativa de recuperarla. Tanto<b> Sysdentist </b> se reservan el derecho de modificar, suspender o cancelar su cuenta si se descubren comportamientos inapropiados dentro de la plataforma, cómo intenciones maliciosas, piratería, u otra actividad relacionada. Derecho de Autor y Propiedad: La información perteneciente a su base de datos es confidencial y de su propiedad, y <b>CSI INTERNATIONAL SERVICES S.A.C.</b> nunca publicará ni hará uso de ella mencionando y comentando puntualmente alguno de estos registros. Tanto<b> Sysdentist </b> y sus proveedores poseen los derechos de propiedad intelectual de cualquiera y todos los componentes protegibles del Servicio, incluyendo, pero no limitado a, el nombre del servicio, obras de arte y elementos de la interfaz de uso contenidos en el servicio, muchas de las funcionalidades particulares, y su documentación relacionada. Usted no puede copiar, modificar, adaptar, reproducir, distribuir, realizar ingeniería inversa, descompilar o desensamblar cualquier aspecto del servicio del cual<b> Sysdentist </b>  o sus proveedores sean propietarios.<b> Sysdentist </b> no reclama derechos de propiedad intelectual sobre el contenido que usted suba o proporcione al Servicio, siendo usted el único responsable por la información y contenido ingresado al sistema. Aquellos clientes que no presenten deudas y deseen terminar con el servicio, podrán solicitar los datos almacenados en la plataforma, en los cuales se incluye la información relacionada con los pacientes (tales como: fichas clínicas, planes de tratamiento, pagos, entre otros). El formato en el cual se entregarán dichos datos serán archivos excel y/o html. <br>

                    8. Nivel de servicio (SLA):<br>
                    <b> Sysdentist </b> como servicios ofrecen un nivel de servicio superior al 99%. Si a lo largo de un año completo llegase a proporcionar un nivel inferior al 99%, usted podrá solicitar la devolución proporcional del dinero de acuerdo con las horas en las que no tuvo servicio. Contacto y notificaciones: Al registrarse para utilizar<b> Sysdentist </b> está optando a recibir nuestras notificaciones por correo electrónico relacionado con el producto y sus proyectos. No compartiremos su correo electrónico con 3ras partes. Nuestro equipo podría contactarlo para notificarlo sobre información y servicios asociados a su cuenta. Condiciones Generales: Su uso del Servicio, incluyendo cualquier contenido, información o funcionalidad que contiene, se ofrece "tal cual" y "según disponibilidad" sin representación o garantía de ningún tipo, ya sea expresa o implícita, incluyendo pero no limitado a, las garantías de comerciabilidad, adecuación para un propósito particular y no infracción. Usted asume total responsabilidad y riesgo por el uso de este Servicio. Usted se compromete a no revender, duplicar, reproducir o explotar cualquier parte del Servicio sin el expreso consentimiento por escrito de<b> Sysdentist </b> . Usted no puede usar el Servicio para almacenar, hospedar, o enviar correo electrónico no solicitado (spam). Usted no puede usar el servicio para transmitir cualquier tipo de virus, gusanos o contenido malicioso.<b> Sysdentist </b> se compromete a intentar encontrar solución ante eventual cierre del negocio, ya sea proporcionando un software cómo producto (instalable) o habilitando un acceso online similar, pero con ausencia de soporte. En este caso, usted tendra la opción de seguir o cortar el servicio. En caso de continuar, otra entidad se hará responsable en ese momento, pudiendo cobrar hasta un 40% del valor mensual, sacando el soporte y manteniendo exclusivamente el funcionamiento online.<br>
                    <b> Sysdentist </b> no ofrece ninguna garantía con respecto a:<br>
                    i.	Su capacidad para utilizar el Servicio<br>
                    ii.	Su satisfacción con el servicio<br>
                    iii.	Que el servicio estará disponible en todo momento, sin interrupciones, y sin errores<br>
                    iv.	La exactitud de cálculos matemáticos llevados a cabo por el Servicio<br>
                    v.	Que los errores o los “bugs” en el servicio serán corregido en los plazos que usted desee<br>
                    <b> Sysdentist </b> , sus afiliados y sus patrocinadores no son responsables de ningún daño directo, indirecto, incidental, consecuente, especial, ejemplar, punitivo, o de otro tipo que surja de o esté relacionado de alguna manera con el uso del Servicio. Su único recurso para la insatisfacción con el servicio es dejar de usar el Servicio. Si alguna cláusula de las Condiciones del servicio no es válida o inaplicable, la aplicabilidad de las disposiciones restantes no se verán deterioradas. El fracaso de<b> Sysdentist </b> de ejercer cualquier derecho previsto en este documento no se considerará una renuncia a cualquier derecho. Los Términos del Servicio establecen el acuerdo completo entre usted y<b> Sysdentist </b> como con su Servicio y reemplazan cualquier acuerdo anterior entre usted y<b> Sysdentist </b> (incluyendo pero no limitado a, las versiones anteriores de los Términos del Servicio).
                    9. Política de satisfacción garantizada<br>
                    La devolución del dinero se realizará siempre y cuando se cumplan las siguientes condiciones:<br>
                    i.	Haya transcurrido el primer mes de uso de la plataforma (30 días)<br>
                    ii.	La plataforma haya sido correctamente configurada<br>
                    iii.	Se hayan realizado las capacitaciones correspondientes<br>
                    iv.	Se indiquen las razones por las cuales el sistema no cumple con las expectativas<br>
                    La finalidad de la política de satisfacción es obtener feedback de los clientes con el único fin de mejorar día a día la plataforma.<br>
                    No aplica la devolución del dinero en aquellos casos en los que se contrata la plataforma durante un día por la mañana y se descontrata por la tarde, ya que eso implica que solo se realizó la suscripción con el fin de hurgar dentro del sistema, sin una intención real de aprender sobre su uso para juzgar si es útil o no.
                    <b> Sysdentist </b> no ofrece accesos Demos, ya que la experiencia ha demostrado que los usuarios subvaloran lo robusto y potente del servicio, situación evidente al no existir capacitación previa. Con el fin de evitar esta situación, es que <b>CSI INTERNATIONAL SERVICES S.A.C.</b> se asegura de instruir y capacitar al usuario para que pueda utilizar el servicio, y si aún así no se encuentra satisfecho, se devuelve el dinero invertido de primer mes de uso.<br>
                    10. Facturación electrónica<br>
                    Para los clientes que cuenten con el servicio de facturación electrónica, el que se contrata de manera independiente, es importante transmitir que:
                    1.	Sysdentist provee de integración con proveedores de factura electrónica para el caso de clientes Perú.<br>
                    2.	Sysdentist es un intermediario tecnológico y no tiene responsabilidad sobre la emisión de documentos electrónicos, siendo el único responsable el proveedor que seleccione el cliente.<br>
                    3.	El cobro mensual generado por<b> Sysdentist </b> considera exclusivamente la integración con el proveedor de facturación electrónica, y no considera en ningún caso la emisión gratuita de documentos electrónicos.<br>
                    Cualquier pregunta relacionada con los Términos del Servicio deben ser dirigidas a soporte@sysdentist.com <br>
                    <div class="text-center">
                        Version gratuita<br>
                        <b> Sysdentist </b> versión vip<br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button  style="background-color: #00E1CD;" type="button" class="btn btn-sm"><b>ACEPTAR CONDICIONES</b></button>
                </div>
            </div>
        </div>
    </div>

    <script src="<?=$baseUrl?>js/home/registro.js"></script>