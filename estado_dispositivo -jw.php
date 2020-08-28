<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet"> 
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="animate.css">
    <title>Reparacion de Celulares, Laptops y Muchos Mas</title>
  </head>
<style>
body{
 font-family: 'CooperHewitt', sans-serif !Important;
 background-color: #23272e;
}

.nav-link{
  color: #1a1a1a;
}
.nav-link:hover{
  color: #dd0336;
  animation: normal;
  transition: 0.5s;
}
.navbartexto{
  font-size: 17px;
  margin-left: 20px;
  color: #ca2d3e !Important;
  font-weight: bold !Important;
  font-family: 'CooperHewitt-Bold', sans-serif !Important;
}
.navbartexto:hover{
color: #dd0336 !Important;
font-weight: bold;
}

#logomastec{
  width: 10%;
}
.logo-brand{
  max-width: 120px;
  min-width: 65px;
}
.navbar-toogler{
  font-size: 40px;
}

.bg-light2{
  background-color: transparent;
  min-height: 100px;
  z-index: 10000;
 transition: all 1s ease;
}

.bg-dark{
  background-color: white !Important;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .07);
}
.navbartext-black{
  color: #ca2d3e;
  margin-left: 20px;
}
.navbartext-black:hover{
  color: #dd0336 !Important;
  animation: normal;
  transition: 0.5s;
}


.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 99999;
    background: url('images/loader.gif') 50% 50% no-repeat #151921;    
}


</style>



<div class="loader"></div>
<body>
  <nav id="menu" class="navbar navbar-expand-lg navbar-light bg-light2 fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="images/logomastec.png" class="logo-brand animate__animated animate__bounce animate__repear-2" alt="logo" ></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <ion-icon class="navbar-toogler" name="menu-outline"></ion-icon>
      </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul id="textonavbar" class="navbar-nav ml-auto animate__animated animate__backInDown">
        <li class="nav-item active">
          <a id="navbartext" class="nav-link navbartexto" href="index.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a id="navbartext" class="nav-link navbartexto" href="nosotros.php">Nosotros</a>
        </li>
        <li class="nav-item">
          <a id="navbartext2" class="nav-link navbartexto" href="repara.php">Repara</a>
        </li>
        <li class="nav-item dropdown">
          <a id="navbartext3" class="nav-link navbartexto" href="tienda.php"  target="_blank" id="navbarDropdown"> Tienda </a>
        </li>
        <li class="nav-item">
          <a id="navbartext4" class="nav-link navbartexto" href="sistemasyaplicaciones.php" id="navbarDropdown"> Sistemas y Aplicaciones </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
    #bienvenido{
        background-image: url(images/fondodi.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }
.titulobienvenido{
    text-align: center;
    padding-top: 15%;
    padding-bottom: 5%;
}
.span1{
    background-color: #ca2d3e;
    padding: 1%;
    color: white;
    border-radius: 5px;
    box-shadow: 2px 2px 10px #ca2d3e;
}
</style>

<div id="bienvenido" class="container-fluid">
    <div class="titulobienvenido container wow zoomInUp">
        <h1 class="span1 ">Estado de tu dispositivo:</h1>
    </div>
</div>

<?php

$folio_cliente = $_POST['folio'];

//Conexion
include 'conexion.php';
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
//Conexion
$sql = "SELECT * FROM $tbl_name5 WHERE folio = '$folio_cliente'";



$result = $conexion->query($sql);
while ($row = $result->fetch_assoc()){

  $id = $row['id'];
  $nombre = $row['nombre'];
  $apellido = $row ['apellido'];
  $correo = $row['correo'];
  $celular = $row['celular'];
  $ciudad = $row['ciudad'];
  $calle = $row['calle'];
  $colonia = $row['colonia'];
  $num_ext = $row['num_ext'];
  $num_int = $row['num_int'];
  $cp = $row['cp'];
  $dispositivo = $row['dispositivo'];
  $marca = $row['marca'];
  $modelo = $row['modelo'];
  $servicio = $row['servicio'];
  $costo = $row['costo'];
  $metodo_pago = $row['metodo_pago'];
  $recoleccion = $row['recoleccion'];
  $envio = $row['envio'];
  $foraneo = $row['foraneo'];
  $costo_envio = $row['costo_envio'];
  $total = $row['total'];
  $estado_dispositivo = $row['estado_dispositivo'];
  $folio = $row['folio'];
}

$estado;

//1.- En recoleccion
//2.- En diagnostico
//3.- En reparacion
//4.- Listo para entregar
//5.- Enviando a domicilio
//6.- Dispositivo entregado


if($estado_dispositivo == 1){
    $estado = 'En recoleccion';
} else if($estado_dispositivo == 2){
    $estado = 'En diagnostico';
}else if($estado_dispositivo == 3){
    $estado = 'En reparacion';
}else if($estado_dispositivo == 4){
    $estado = 'Listo para entregar';
}else if($estado_dispositivo == 5){
    $estado = 'Enviando a domicilio';
}else if($estado_dispositivo == 6){
    $estado = 'Dispositivo entregado';
}


?>

<style>
    #datos{
        background-color: white;
        padding: 5%;
    }
    .estados{
        line-height: 10px;
        width: 100%;
    }
    span{
        font-weight: bold;
    }
    h1{
        width: 100%;
        text-align: center;
    }

    .imgestado{
        width: 100%;
    }
</style>
<div id="datos" class="container-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sg-12 wow slideInRight">
                <h1>Datos Personales.</h1>
                <p class="estados"><span>Nombre:</span> <?php echo $nombre; ?></p>
                <p class="estados"><span>Apellido:</span> <?php echo $apellido; ?></p>
                <p class="estados"><span>Correo:</span> <?php echo $correo; ?></p>
                <p class="estados"><span>Celular:</span> <?php echo $celular; ?></p>
                <p class="estados"><span>Ciudad:</span> <?php echo $ciudad; ?></p>
                <p class="estados"><span>Calle:</span> <?php echo $calle; ?></p>
                <p class="estados"><span>Colonia:</span> <?php echo $colonia; ?></p>
                <p class="estados"><span>Numero Exterior:</span> <?php echo $num_ext; ?></p>
                <p class="estados"><span>Numero Interior:</span> <?php echo $num_int; ?></p>
                <p class="estados"><span>Codigo Postal:</span> <?php echo $cp; ?></p>
            </div>
            <div class="col-lg-6 col-sg-12 wow slideInRight">
                <h1>Datos de Servicio.</h1>
                <p class="estados"><span>Dispositivo:</span> <?php echo $dispositivo; ?></p>
                <p class="estados"><span>Marca:</span> <?php echo $marca; ?></p>
                <p class="estados"><span>Modelo:</span> <?php echo $modelo; ?></p>
                <p class="estados"><span>Servicio:</span> <?php echo $servicio; ?></p>
                <p class="estados"><span>Costo del Servicio:</span> $<?php echo $costo; ?></p>
                <p class="estados"><span>Metodo de Pago:</span> <?php echo $metodo_pago; ?></p>
                <p class="estados"><span>Costo de envio:</span> $<?php echo $costo_envio; ?></p>
                <p class="estados"><span>Precio Total:</span> $<?php echo $total; ?></p>
                <p class="estados"><span>Estado de dispositivo:</span> <?php echo $estado; ?></p>
                <p class="estados"><span>Folio:</span> <?php echo $folio; ?></p>
            </div>
            <div class="col-lg-12 wow slideInRight">
                <?php
                    if($estado_dispositivo == 1){
                ?>
                    <img class="imgestado" src="images/estados/conenvio/1.png">
                <?php
                    }else if($estado_dispositivo == 2){
                ?>
                    <img class="imgestado" src="images/estados/conenvio/2.png">
                <?php
                    }else if($estado_dispositivo == 3){
                ?>
                    <img class="imgestado" src="images/estados/conenvio/3.png">
                <?php
                    }else if($estado_dispositivo == 4){
                ?>
                    <img class="imgestado" src="images/estados/conenvio/4.png">
                <?php
                    }else if($estado_dispositivo == 5){
                ?>
                    <img class="imgestado" src="images/estados/conenvio/5.png">
                <?php
                    }else if($estado_dispositivo == 6){
                ?>
                    <img class="imgestado" src="images/estados/conenvio/6.png">
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>





  
<style>
  .links{
    color: white;
    text-decoration: none;
  }
</style>

   <!-- Footer -->
<footer style="border-top: 2px solid white; background-color: #ca2d3e; " id="piedepag" class="page-footer font-small mdb-color lighten-3 pt-4">
    <div class="container text-center text-md-left">
      <div class="row">
        <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1 wow slideInLeft">
          <h5 style="text-align: center; color: white; " class="font-weight-bold text-uppercase mb-4">Mas Tecnologia</h5>
          <p style="font-weight: bold;color: white; text-align: center;">"Connecting and making life easy"</p>
          <p style="color: white;">Creamos soluciones tecnologicas a medida con metodologias agiles, desarrollos evolutivos y flexibles a traves de la armoninizacion 
            de Hardware, Software & SmartNetworking. 
          </p>
          </div>
          <hr class="clearfix w-100 d-md-none">
        <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1 wow slideInLeft">
          <h5 style="text-align: center; color: white;" class="font-weight-bold text-uppercase mb-4">INFORMACIÓN</h5>
            <ul class="list-unstyled">
            <li>
              <p><a class="links" href="#!">PROYECTOS</a></p>
            </li>
            <li>
              <p><a class="links" href="#!">EQUIPO DE TRABAJO</a></p>
            </li>
            <li>
              <p><a class="links" href="#!">BLOG</a></p>
            </li>
            <li>
              <p><a class="links" href="#!">CLIENTES</a></p>
            </li>
          </ul>
  
        </div>  
        <hr class="clearfix w-100 d-md-none">
          <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1 wow slideInRight">
            <h5 style="text-align: center; color: white;" class="font-weight-bold text-uppercase mb-4">Contacto</h5>
            <ul class="list-unstyled">
            <li>
              <p style="color: white;"><ion-icon size="large" name="home"></ion-icon>Morelia Mich, Virrey de Mendoza No.255</p>
            </li>
            <li>
              <p style="color: white;"><ion-icon size="large" name="mail"></ion-icon>mastecnologiaoficina1@gmail.com</p>
            </li>
            <li>
              <p style="color: white;"><ion-icon size="large" name="call"></ion-icon>443 343 0553</p>
            </li>
            <li>
              <p style="color: white;"><ion-icon size="large" name="logo-whatsapp" ></ion-icon>443 540 2474</p>
            </li>
          </ul>
          </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-2 col-lg-2 text-center mx-auto my-4 wow slideInRight">
          <h5 style="color: white; text-align: center;" class="font-weight-bold text-uppercase mb-4"></h5>
        <a href="reporte_login.php" target="_blank"><img width="120px" src="images/iconos/logomastecblanco.png"></a>
         </div>
      </div>
    </div>
    <div style="color: white;" class="footer-copyright text-center py-3 wow slideInUp">© 2020 Copyright:
  <a style="color: white;" href="https://www.mastecnologia.com.mx/"> mastecnologia.com.mx</a>
</div>

  </footer>




<style>
@media (max-width: 575.98px) { 
    .span1{
    font-size: 20px;
}


.titulobienvenido{
    
    padding-top: 50%;
}




}

@media (min-width: 576px) and (max-width: 767.98px) {
  

  
}

@media (min-width: 768px) and (max-width: 991.98px) { 
    .titulobienvenido{
    
    padding-top: 30%;
}

}

@media (min-width: 992px) and (max-width: 1199.98px) {
     

 }

@media (min-width: 1200px) { }
</style>





 <!--Scripts-->


<script type="text/javascript" src="swiper.min.js"></script>

  <script>
function myFunction(x) {
  if (x.matches) { // If media query matches

var x = window.matchMedia("(max-width: 700px)")
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 30,
      slidesPerGroup: 1,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      
    });
  } else {

    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 1,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        
        clickable: true,
      },
    });
  }
}

var x = window.matchMedia("(max-width: 1500px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes

  </script>




 <!--Scripts-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/full.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


    <script>
      $(window).scroll(function() {
        if ($("#menu").offset().top > 56) {
            $("#menu").addClass("bg-dark");
        } else {
            $("#menu").removeClass("bg-dark");
        }
      });

      $(window).scroll(function() {
        if ($("#navbartext").offset().top > 56) {
            $("#navbartext").addClass("navbartext-black");
        } else {
            $("#navbartext").removeClass("navbartext-black");
        }
      });
      $(window).scroll(function() {
        if ($("#navbartext2").offset().top > 56) {
            $("#navbartext2").addClass("navbartext-black");
        } else {
            $("#navbartext2").removeClass("navbartext-black");
        }
      });
      $(window).scroll(function() {
        if ($("#navbartext3").offset().top > 56) {
            $("#navbartext3").addClass("navbartext-black");
        } else {
            $("#navbartext3").removeClass("navbartext-black");
        }
      });
      $(window).scroll(function() {
        if ($("#navbartext4").offset().top > 56) {
            $("#navbartext4").addClass("navbartext-black");
        } else {
            $("#navbartext4").removeClass("navbartext-black");
        }
      });
</script>

<script>
jQuery(document).ready(function() {
 jQuery(".loader").delay(1000).fadeOut("slow");
});
</script>


  </body>
</html>