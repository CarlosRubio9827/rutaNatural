<?php
session_start();
$titulo = "Ruta Natural";
$actual = "registro";
require_once("../layout/header.php");
?>
<link rel="stylesheet" href="../../assets/css/guest/auth/style.css" type="text/css">
<link rel="stylesheet" href="../../assets/css/addons/select2.css" type="text/css">
<link rel="stylesheet" href="../../assets/css/addons/bootstrap-material-datetimepicker.css" type="text/css"/>

<style type="text/css">
body {
    background: url("../../assets/img/guest/register/background.jpg")repeat center center fixed;
  
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}

.card{ 
    background-color: rgba(0, 0, 0, 0.8) !important;
}
input,.md-form > small,.select2-selection__rendered{
    color:  white !important;
    }
</style>
<?php
require_once("../layout/css.php");
?>
<main>
<section class="view intro-2">
        <div class="mask pattern-0 flex-center"></div>
<!-- Main Container -->
<div class="container mt-5 pt-3">
   
    <div class="row">
        <!-- Content -->
        <div class="col-md-6 mt-5  mb-5">

          

           <!-- Products Grid -->
           <section class="section pt-4" >

                <!-- Grid row -->
                <div class="row">
                        <div class="col-12">
                        <div class="card z-depth-5 hoverable">
                            <div class="card-body">
                                <!--Header-->
                                <div class="text-center">
                                    <h3 class="white-text"><strong> Registrarse.</strong></h3>
                                    <hr class="hr-light">
                                   
                                    <form id="register_form" method="POST" action="../../controllers/auth.php" accept-charset="UTF-8">
                                  
                                <input type="hidden" required value="register" name="method">

                                <h6 class="white-text">Los campos marcados con (<span class="obligatorio">*</span>) son obligatorios</h6>
                    
                                <div class="form-row">
                                <div class="col-1">
                                <i class="fas fa-id-card prefix-select white-text"></i>

                                </div>
                                        <div class="col-md-5 col-11">
                                            <!-- Material input -->
                                            <div class="md-form">
                                            <select required id="tipoIdentificacion" name="tipoIdentificacion">
                                            <option value="" disabled selected>Selecciona una opción</option>
                                            <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                                                <option value="Cédula de Ciudadania">Cédula de Ciudadania</option>
                                                <option value="Pasaporte">Pasaporte</option>
                                            </select>
                                            </div>
                                    
                                        <!-- Grid column -->
                                        </div>

                                        <div class="col-md-6">
                                                <!-- Material input -->
                                                <div class="md-form">
                                                    <input type="number" required id="numeroIdentificacion" value="" name="numeroIdentificacion" class="form-control validate">
                                                    <label for="numeroIdentificacion" data-error="Error" data-success="Correcto">Número identificación <span class="obligatorio">*</span></label>
                                                </div>

                                        </div>

                                    </div>
                                        <!-- Grid row -->
                                              
                                 <!-- Grid row -->
                                 <div class="form-row">
                                            <!-- Grid column -->
                                            <div class="col-md-6">
                                            
                                                <!-- Material input -->
                                                <div class="md-form">
                                                    <input type="text" required id="nombre" value="" name="nombre" class="form-control validate">
                                                    <label for="nombre" data-error="Error" data-success="Correcto">Nombre(s) <span class="obligatorio">*</span></label>
                                                </div>

                                            </div>
                                            <!-- Grid column -->
                                    
                                             <!-- Grid column -->
                                        <div class="col-md-6">
                                                <!-- Material input -->
                                                <div class="md-form">
                                                <input type="text" required id="apellido" value="" name="apellido" class="form-control validate">
                                                <label for="apellido" data-error="Error" data-success="Correcto">Apellidos <span class="obligatorio">*</span></label>
                                                </div> 
                                        </div>
                                            <!-- Grid column -->
                                          
                                    </div>

                                    <!-- Grid row -->
                                    <div class="form-row">
                                          
                                    <div class="col-md-6">
                                                <!-- Material input -->
                                                <div class="md-form">
                                        <input type="email" required id="email" value="" name="email" class="form-control validate" maxlength="100">
                                        <label for="email" data-error="Error" data-success="Correcto">Email <span class="obligatorio">*</span></label>
                                        </div> 
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <!-- Material input -->
                                                <div class="md-form">
                                         <input type="email" required id="confirmarEmail" value="" name="confirmarEmail" class="form-control validate" maxlength="100">
                                        <label for="confirmarEmail" data-error="Error" data-success="Correcto">Confirmar email <span class="obligatorio">*</span></label>
                                        </div> 
                                            </div>
                                          
                                    </div>
                                <!-- Grid row -->
                                        
                              
                                        <!-- Grid row -->
                                    <div class="form-row">
                                   
                                    <div class="col-md-6">
                                                <!-- Material input -->
                                                <div class="md-form">
                                                     <input type="number" required id="telefono" value="" name="telefono" class="form-control validate">
                                                    <label for="telefono" data-error="Error" data-success="Correcto">Número de Celular <span class="obligatorio">*</span></label>
                                                </div>

                                            </div>

                                        <div class="col-md-6">
                                            <!-- Material input -->
                                            <div class="md-form">
                                            <select class="form-control" required id="sexo" name="sexo">
                                            <option value="" disabled selected></option>
                                            <option value="femenino">Femenino</option>
                                                <option value="masculino">Masculino</option>
                                            </select>
                                            </div>
                                    
                                        <!-- Grid column -->
                                        </div>

                                    </div>
                                
                                        <div class="text-center">
                                           <center> <h5 class="white-text" style="max-width:300px;">Redes Sociales(nombre de usuario)</h5></center>
                                            <hr class="hr-light">
                                        </div>
                                        
                                        <div class="form-row">    

                                            <div class="col-md-6">
                                            <div class="md-form">
                                                <input type="text"   id="facebook" value="" name="facebook" class="form-control  ">
                                                <label for="facebook" data-error="Error" data-success="Correcto">Facebook <i class="fab fa-facebook-f  fa-lg" style="color:#FFFFFF; width:18; height:18;"></i></label>
                                                </div>    

                                            </div>

                                            <div class="col-md-6">
                                            <div class="md-form">
                                                <input type="text"   id="instagram" value="" name="instagram" class="form-control">
                                                <label for="instagram" data-error="Error" data-success="Correcto">Instagram <i class="fab fa-instagram fa-lg" style="color:#FFFFFF; width:18; height:18;"></i></label>
                                                </div>   

                                            </div>


                                        </div>

                                    
                                        
                                                <!-- Grid row -->
                                        <div class="form-row">
                                                <!-- Grid column -->
                                                <div class="col-md-12">
                                            <blockquote class="blockquote bq-primary">
  <p class="bq-title">Acepto que participo en la integración deportiva bajo mi propio riesgo y responsabilidad.</p>
  <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="terminoCondiciones" name="terminoCondiciones">
                <label class="custom-control-label white-text" for="terminoCondiciones">Acepto.</label>
              </div>
</blockquote>

 </div>
                            </div>
                                            <!-- Grid row --> 
                                    
                         

                                        <a onclick="validar()" class="btn btn-theme btn-outline-white hoverable waves-light mt-5 role="button">
                                            <i class="fas fa-user-plus mr-2"></i>Registrarse</a>
                                    </form>

                                </div>                                 
                                <!--  -->
                            </div>
                                </div>
            </div>
        </div>
            <!--Grid row-->
       
            </section>
            <!-- /.Products Grid -->
        </div>
        <!-- /.Content -->

        <div class="mt-5  text-center text-md-left  col-md-6 col-xl-5 offset-xl-1">
         
            <div class="card mb-4 z-depth-5 hoverable mt-5">
                <div class="card-body">
                  
                <div class="white-text text-center">
                <h3 class="h1-responsive font-weight-bold">¡Integración Runner!</h3>
                <h3 class="h1-responsive font-weight-bold"> RUTA NATURAL </h3>
                <hr class="hr-light">

                    <div class="text-center">
                        <img src="../../assets/img/folleto.jpeg" style="display:block;
margin:auto; width: 300px; height: 600px;" alt="No se pudo cargar la imagen">
                    </div>
                  
               

                <br>
               </div>
        </div>
    </div>
        </div>

    </div>
     
    
<div class="row">
    <div class="col-12 mb-5 text-center content-div white-text">
        <!--Form-->
        <div class="card z-depth-5 hoverable">
            <div class="card-body">
               
             <h3 class="h1-responsive font-weight-bold">¡Integración Runners!</h3>
             <h3 class="h1-responsive font-weight-bold"> RUTA NÁTURAL </h3>
             <hr class="hr-light">
             <pre>
                <div class="video-responsive">

                    <iframe  src="https://www.youtube.com/embed/TVJDoKb2nlk"
                         frameborder="0"
                          allowfullscreen="allowfullscreen">
                    </iframe>
                </div>
            <pre>
             <br>
            
     </div>
 </div>
     </div>
        </div>
    </div>
<!-- /.Main Container -->
</section>
</main>
<?php
require_once("../layout/js.php");
?>
<script type="text/javascript" src="../../assets/js/addons/select2.min.js"></script>
<script type="text/javascript" src="../../assets/js/addons/i18n/es.js"></script>
<script type="text/javascript" src="../../assets/js/addons/bootstrap-material-datetimepicker.js"></script>
<script type="text/javascript" src="../../assets/js/addons/validation/jquery.validate.js"></script>
<script type="text/javascript" src="../../assets/js/addons/validation/messages_es.js"></script>
<script type="text/javascript">



$('#tipoIdentificacion').select2({
        placeholder: "Tipo de identificación *",
        theme: "material",
        language: "es"
    });
    


    $('#sexo').select2({
        placeholder: "Sexo *",
        theme: "material",
        language: "es"
    });

  


    $(".select2-selection__arrow")
        .addClass("fas fa-chevron-down white-text");

 
function validar(){
  if($("#register_form").validate({
    lang: 'es',
    errorPlacement: function(error, element){
      $(element).parent().after(error);
		}})){        
    var email = $("#email").val();
    var confirmarEmail = $("#confirmarEmail").val();
    if(email == confirmarEmail){
if($("#terminoCondiciones").prop("checked") == true){

   var valor =  $("#numeroIdentificacion").val();

    $.ajax({
  url: "../../controllers/auth.php",
  method: "POST",
  data: { method: "check_nuip", nuip:valor},
}).done(function(response) {
    console.log(response);
    var data = JSON.parse(response);
    if(data.status == 200){
    if(data.existeNuip){
        $("#register_form").submit();
    }else if(!data.existeNuip){
        swal({
  //position: 'top-end',
  type: 'warning',
  title: 'El número de identificación ya ha sido registrado.',
  showConfirmButton: false,
  toast: true,
  animation: false,
  customClass: 'animated shake',
  timer: 3000
}) 
    }
    }else{
        swal({
  //position: 'top-end',
  type: 'error',
  title: data.existe,
  showConfirmButton: false,
  toast: true,
  animation: false,
  customClass: 'animated shake',
  timer: 3000
}) 
    }
    
}).fail(function( jqXHR, textStatus ) {
    swal({
  //position: 'top-end',
  type: 'error',
  title: textStatus,
  showConfirmButton: false,
  toast: true,
  animation: false,
  customClass: 'animated shake',
  timer: 3000
}) 
});

//Verificacion de codigo de equipo

 /* var codigoGrupo =  $("#codigoGrupo").val();
    $.ajax({
  url: "../../controllers/auth.php",
  method: "POST",
  data: { method: "check_cod", cod:codigoGrupo},
}).done(function(response) { 
    console.log(response);
    var data = JSON.parse(response);
    if(data.status == 200){
    if(data.existe){
       $("#register_form").submit();    
    }else if(!data.existe){
     swal({
  //position: 'top-end',
  type: 'warning',
  title: 'El código que ingresaste no pertenece a ningún grupo registrado.',
  showConfirmButton: false,
  toast: true,
  animation: false,
  customClass: 'animated shake',
  timer: 3000
}) 
    }
    }else{
        swal({
  //position: 'top-end',
  type: 'error',
  title: data.existe,
  showConfirmButton: false,
  toast: true,
  animation: false,
  customClass: 'animated shake',
  timer: 3000
}) 
    }
    
}).fail(function( jqXHR, textStatus ) {
    swal({
  //position: 'top-end',
  type: 'error',
  title: textStatus,
  showConfirmButton: false,
  toast: true,
  animation: false,
  customClass: 'animated shake',
  timer: 3000
}) 
});  */

//Fin de verificación de código de equipo


}else{
    swal({
  //position: 'top-end',
  type: 'warning',
  title: 'Acepte los terminos',
  showConfirmButton: false,
  toast: true,
  animation: false,
  customClass: 'animated shake',
  timer: 3000
}) 
}
}else{
    swal({
  //position: 'top-end',
  type: 'warning',
  title: 'Los correos no coinciden',
  showConfirmButton: false,
  toast: true,
  animation: false,
  customClass: 'animated shake',
  timer: 3000
})
  }

  }
  }

</script>
<?php
require_once("../layout/footer.php");
?>