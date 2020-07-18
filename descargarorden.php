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
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <title>Repara tu dispositivo</title>
    
<style>
body{
 font-family: 'Titillium Web', sans-serif; 
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
  font-size: 18px;
  margin-left: 20px;
  color: white !Important;
}
.navbartexto:hover{
color: #dd0336 !Important;
}

#logomastec{
  width: 10%;
}
.logo-brand{
  max-width: 85px;
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
  background-color: #23272e !Important;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .07);

}


.navbartext-black{
  color: white !Important;
  font-size: 18px;
  margin-left: 20px;
}
.navbartext-black:hover{
  color: #dd0336 !Important;
  animation: normal;
  transition: 0.5s;
}

</style>

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
          <a id="navbartext3" class="nav-link navbartexto" href="http://shop.mastecnologia.mx/" target="_blank" id="navbarDropdown"> Tienda </a>
        </li>
        <li class="nav-item">
          <a id="navbartext4" class="nav-link navbartexto" href="https://www.mastecnologia.com.mx/sistemas/" target="_blank" id="navbarDropdown"> Sistemas y Aplicaciones </a>
        </li>
      </ul>
    </div>
  </div>
</nav>





<style>
  h2{
    font-size: 48px;
    margin-bottom: 30px;
    color: white;
  }

  section{
    padding: 80px 0;
  }
</style>

<style>
.modelo{
  margin-top: 5%;
}
    
    .image{
        width: 100%;
        border-radius: 20px;
    }
    a:hover{
  text-decoration: none;
}
   .titulorow{
       font-size: 25px;
       color: white;
   }
    .portafolio-container{
    position: relative;
    overflow: hidden;
    margin: 10px 0;
    border-radius: 5px;
  }

  .portafolio-details{
    position: absolute;
    bottom: 25px;
    left: 25px;
    z-index: 9000;
  }

  .portafolio-container img{
  -moz-transition: all 0.8s;
  -webkit-transition: all 0.8s;
  transition: all 0.8s;
  filter: brightness(0.7);
  
}
.portafolio-container:hover img{
  -moz-transform: scale(1.2);
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
  filter: none;
  
}
.button-sub{
    background-color:transparent;
    border: none;
}

.parrafo{
  font-size: 18px;
  color: white;
  line-height: 1.8;
  margin-bottom: 0;
  text-align: left;
}
ol, li{
  color: white;
}
</style>


<?php
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$servicio = $_POST['servicio'];
$precio = $_POST['precio'];
$dispositivo = $_POST['dispositivo'];
  //formulario
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $correo = $_POST['correo'];
  $celular = $_POST['celular'];
  $calle = $_POST['calle'];
  $colonia = $_POST['colonia'];
  $numeroext = $_POST['numeroext'];
  $numeroint = $_POST['numeroint'];
  $ciudad = $_POST['ciudad'];
  $codigopostal = $_POST['codigopostal'];


$folio = strtoupper(substr("$modelo",0, 2). substr("$precio",0,2). substr("$nombre",0,2). substr("$apellido",0,2). substr("$celular",0,2). substr("$codigopostal",0,2));
?>

<section class="modelo">
<div class="container">
    <h1 style="color: white; text-align: center; font-size: 40px;">Gracias por hacer tu cotizacion.</h1>
    
    <div class="container">
      <h2 style="color: white; text-align: left; font-size: 20px;">Pasos para realizar tu reparacion:</h2>
      
      <ol type=1>
        <li><span style="font-size: 20px; color: #dd0336; font-weight: bold;"><?php echo $folio?></span> Este es tu FOLIO con el que seguiras el estado de tu reparación y evitaras extravios.
        <li>Lleva tu dispositivo con tu FOLIO o puedes descargar o imprimir el reporte de reparacion donde tambien esta tu FOLIO, a nuestras oficinas ubicadas en: CALLE VIRREY DE MENDOZA #255 INTERIOR #7, COLNIA CENTRO.
        <li>Puedes esperar a que tu dispositivo reciba el servicio que cotizaste o dejarlo y volver despues.
        <li>Revisa el funcionamiento de tu dispositivo despues de la reparacion y verifica que se completo el servicio deseado
        <li>Paga la cantidad que se te cotizo en tu reporte
        <li>Disfruta de tu dispositivo.
      </ol>
    </div>
    
 <!--Primera Fila-->
    <div class="row">

        <div class="col-sm wow slideInLeft">
          <form action="app/index.php" method="POST"  target="_blank">

            <input type="hidden" name="marca" value="<?php print_r($marca); ?>">
            <input type="hidden" name="modelo" value="<?php echo $modelo; ?>">
            <input type="hidden" name="servicio" value="<?php  print_r($servicio);?>">
            <input type="hidden" name="precio" value="<?php echo $precio;?>">
            <input type="hidden" name="dispositivo" value="<?php echo $dispositivo;?>">

            <input type="hidden" name="nombre" value="<?php echo $nombre;?>"> 
            <input type="hidden" name="apellido" value="<?php echo $apellido;?>"> 
            <input type="hidden" name="correo" value="<?php echo $correo;?>"> 
            <input type="hidden" name="celular" value="<?php echo $celular;?>"> 
            <input type="hidden" name="calle" value="<?php echo $calle;?>"> 
            <input type="hidden" name="colonia" value="<?php echo $colonia;?>"> 
            <input type="hidden" name="numeroext" value="<?php echo $numeroext;?>"> 
            <input type="hidden" name="numeroint" value="<?php echo $numeroint;?>"> 
            <input type="hidden" name="ciudad" value="<?php echo $ciudad;?>"> 
            <input type="hidden" name="codigopostal" value="<?php echo $codigopostal;?>"> 
            <input type="hidden" name="folio" value="<?php echo $folio;?>"> 

              <div class="portafolio-container">
                  <div class="portafolio-details">
                      <button class="button-sub" type="submit"><h2 class="titulorow">Imprimir</h2></button>
                  </div>
                  <button class="button-sub" type="submit"><img class="image" src="images/imprimir.png"></button>
              </div>
          </form>
        </div>

        <div class="col-sm wow slideInLeft">
          <form action="app/descargar.php" method="POST"  target="_blank">
            <input type="hidden" name="marca" value="<?php print_r($marca); ?>">
            <input type="hidden" name="modelo" value="<?php echo $modelo; ?>">
            <input type="hidden" name="servicio" value="<?php  print_r($servicio);?>">
            <input type="hidden" name="precio" value="<?php echo $precio;?>">
            <input type="hidden" name="dipositivo" value="<?php echo $dispositivo;?>">

            <input type="hidden" name="nombre" value="<?php echo $nombre;?>"> 
            <input type="hidden" name="apellido" value="<?php echo $apellido;?>"> 
            <input type="hidden" name="correo" value="<?php echo $correo;?>"> 
            <input type="hidden" name="celular" value="<?php echo $celular;?>"> 
            <input type="hidden" name="calle" value="<?php echo $calle;?>"> 
            <input type="hidden" name="colonia" value="<?php echo $colonia;?>"> 
            <input type="hidden" name="numeroext" value="<?php echo $numeroext;?>"> 
            <input type="hidden" name="numeroint" value="<?php echo $numeroint;?>"> 
            <input type="hidden" name="ciudad" value="<?php echo $ciudad;?>"> 
            <input type="hidden" name="codigopostal" value="<?php echo $codigopostal;?>"> 
            <input type="hidden" name="folio" value="<?php echo $folio;?>"> 

              <div class="portafolio-container">
                  <div class="portafolio-details">
                      <button class="button-sub" type="submit"><h2 class="titulorow">Descargar</h2></button>
                  </div>
                  <button class="button-sub" type="submit"><img class="image" src="images/descargar.png"></button>
              </div>
          </form>
          </div>
        <div class="col-sm wow slideInLeft"></div>
    </div>

      
</section>


<style>
  .links{
    color: white;
    text-decoration: none;
  }
</style>

     
    <!-- Footer -->
<footer style="border-top: 2px solid white; background-color: #23272e; margin-top: 50px;" id="piedepag" class="page-footer font-small mdb-color lighten-3 pt-4">
    <div class="container text-center text-md-left">
      <div class="row">
        <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1 wow slideInLeft">
          <h5 style="text-align: center; color: white; " class="font-weight-bold text-uppercase mb-4">Mas Tecnologia</h5>
          <p style="font-weight: bold;color: white; text-align: center;">"Connecting and making life easier"</p>
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
              <p style="color: white;"><i class="fas fa-home mr-3"></i>Morelia Mich, Virrey de Mendoza No.255</p>
            </li>
            <li>
              <p style="color: white;"><i class="fas fa-envelope mr-3"></i>mastecnologiaoficina1@gmail.com</p>
            </li>
            <li>
              <p style="color: white;"><i class="fas fa-phone mr-3"></i> 443 540 2474</p>
            </li>
          </ul>
          </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-2 col-lg-2 text-center mx-auto my-4 wow slideInRight">
          <h5 style="color: white; text-align: center;" class="font-weight-bold text-uppercase mb-4"></h5>
        <a href="reporte_login.php" target="_blank"><img width="150px" src="images/logomastec.png"></a>
         </div>
      </div>
    </div>
    <div style="color: white;" class="footer-copyright text-center py-3 wow slideInUp">© 2020 Copyright:
  <a href="https://mdbootstrap.com/"> mastecnologia.com.mx</a>
</div>

  </footer>


<style>
@media (max-width: 575.98px) { 
  h1{
    font-size: 40px;
    line-height: normal;
  }
  .parrafo{
  font-size: 15px;
  line-height:normal;
}

.repescuela{
  width: 100%;
  float: none;
}
.sistemasyapps{
  width: 100%;
  float: none;
}

.repempresas{
  width: 100%;
  float: none;
}

.titulorow{
  font-size: 25px;
  font-weight: bold;
}
.parraforow{
  font-size: 15px;
}

#soluciones2{
    height: 1050px;
}
.middle{
  margin-top: 50%;
}
.btn2{
  width: 70px;
  height: 70px;
}
}

@media (min-width: 576px) and (max-width: 767.98px) {}

@media (min-width: 768px) and (max-width: 991.98px) { }

@media (min-width: 992px) and (max-width: 1199.98px) { }

@media (min-width: 1200px) { }
</style>





 <!--Scripts-->


<script type="text/javascript" src="swiper.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : false,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
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

  </body>
</html>