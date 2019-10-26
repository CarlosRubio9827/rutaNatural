<?php
session_start();
$titulo = "Consulta Registros";
$actual = "estado";
require_once("../layout/header.php");
require_once("../../controllers/require/pdo.php");
?>
<link rel="stylesheet" href="../../assets/css/guest/auth/style.css" type="text/css">
<link rel="stylesheet" href="../../assets/css/guest/auth/login_style.css" type="text/css">
<link rel="stylesheet" href="../../assets/css/addons/datatables.css" type="text/css">
<link rel="stylesheet" href="../../assets/css/addons/bt4-datatables.min.css" type="text/css">
<link rel="stylesheet" href="../../assets/css/addons/bt4-buttons-datatables.min.css" type="text/css">
   
<style type="text/css">
body {
  background: url("../../assets/img/guest/register/background.jpg")repeat center center fixed;
    background-size: cover;
    -webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
}
 

</style>


</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="#" >
        <strong> <img src="../../assets/img/rutaNatural.png" alt="" class="logo-img">Ruta Natural</strong>
      </a>
  
      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
                 
       
           <li class="nav-item dropdown active">
                    <a class="nav-link border border-light rounded dropdown-toggle hoverable waves-light" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-running mr-2"></i>Administrador
                    </a>
                    <div class="dropdown-menu dropdown-menu-right menu-sup" aria-labelledby="navbarDropdownMenuLink">
                         
                        <a class="dropdown-item hoverable waves-effect"onclick="salir();">
                        <form class="nav_formu" id="logout-form" method="POST" action="../../controllers/exit.php">
                                            <input type="hidden" required value="logout" name="method"></form>
                                        <i class="fas fa-door-open mr-2"></i> Cerrar sesión
                                      </a>                      
                    </div>
                </li>
         
           
           
          
        </ul>

      </div>

    </div>
  </nav>

<?php

$db = new PDO_Connect;
$db->connect();

$usuario = $db->getAll("SELECT * FROM usuarios");
 
?>

<!--Intro Section-->
<section class="section pt-4 white-text"> 
        <div class="mask pattern-0 flex-center"></div>
            <div class="full-bg-img">
                <div class="container flex-center white-text">
                    <div class="d-flex align-items-center content-height">
                        <div class="row flex-center pt-5 mt-3">
                            <div class="col-12 mb-5 content-div white-text">
                                    <!--Form-->
                                <div class="card z-depth-5 hoverable">
                                    <div class="card-body">
                                            <!--Header-->
                                            <div style=" text-align: center; background-color: rgba(255,255,255,0)!important;">
                                                    <table id="ejemplo" class="table table-sm table-hover" >

                                                            <thead >
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Núm Documento</th>
                                                                <th>Nombre Completo</th>
                                                                <th>Correo</th>
                                                                <th>Núm Cel</th>
                                                                <th>Sexo</th>
                                                                <th>Facebook</th>
                                                                <th>Instagram</th>                 
                                                            </tr>
                                                            </thead>
                                                           
                                                            <tbody style=" text-align: left;background-color: rgba(0,0,0,0.05)!important;">
                                                            <?php
                                                            foreach($usuario as $row){
                                                            
                                                            ?>
                                                                <tr class="hoverable tr-theme">   
                                                                <!-- <td>                        
                                                                    <h4><span class="badge badge-warning hoverable">
                                                                        </span></h4>
                                                                    <h4><span class="badge badge-success hoverable">
                                                                        </span></h4>
                                                                </td> --> 
                                                                <td><?php echo $row->id; ?></td> 
                                                                <td><?php echo $row->numIdentificacion; ?></td>
                                                                <td><?php echo mb_strtoupper($row->nombres." ".$row->apellidos, 'UTF-8'); ?></td>
                                                                <td><?php echo $row->correo; ?></td>
                                                                <td><?php echo $row->numeroCelular; ?></td>
                                                                <td><?php echo $row->sexo; ?></td>
                                                                <td>
                                                                  <div class="text-center">
                                                                     <?php
                                                                  if($row->facebook){
                                                                    ?>
                                                                    <a target="_blank"href="<?php echo $row->facebook; ?>"><i class="fab fa-facebook-f  fa-lg" style="color:#FFFFFF; width:20; height:20;"></i></a>
                                                                  <?php }else{
                                                                    echo "No Tiene";
                                                                  }
                                                                  ?>
                                                                  </div>
                                                                 
                                                              </td>
                                                                <td>
                                                                <div class="text-center">
                                                                     <?php
                                                                  if($row->instagram){
                                                                    ?>
                                                                    <a target="_blank"href="<?php echo $row->instagram; ?>"><i class="fab fa-instagram  fa-lg" style="color:#FFFFFF; width:20; height:20;"></i></a>
                                                                  <?php }else{
                                                                    echo "No Tiene";
                                                                  }
                                                                  ?>
                                                                  </div>
                                                                </td>
                                                               
                                                                </tr>
                                                                 <?php      
                                                                    }
                                                                    ?> 
                                                            </tbody>
                                                        </table>
                                                    </div>      
                                                
                                    </div>
   
                                </div>
                            </div>
                                    <!--/.Form-->
                                  
                        </div>

                                <!--Fin datos Persoanles-->
                              
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
require_once("../layout/js.php");
?>
<script type="text/javascript" src="../../assets/js/addons/validation/jquery.validate.js"></script>
<script type="text/javascript" src="../../assets/js/addons/validation/messages_es.js"></script>
<script type="text/javascript" src="../../assets/js/addons/datatables.js"></script>
<script type="text/javascript" src="../../assets/js/addons/buttons-datatables.min.js"></script>
 <script type="text/javascript" src="../../assets/js/addons/bt4-datatables.min.js"></script>
<script type="text/javascript" src="../../assets/js/addons/bt4-buttons-datatables.min.js"></script>

<script type="text/javascript">

$(document).ready( function () {
    $('#ejemplo').DataTable({
        language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }}
    });

});
function myFunction(name,job) {
  document.getElementById("demo").innerHTML = "Welcome " + name + ", the " + job + ".";
}


</script>
<?php
require_once("../layout/footer.php");
?>