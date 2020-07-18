<?php

$marca = $_GET['marca'];

$modelo = $_GET['modelo'];

$servicio = $_GET['servicio'];

$precio = $_GET['precio'];

$dispositivo = $_GET['dispositivo'];

// $marca = "marcs";

// $modelo = "mods";

// $servicio = "servs";

// $precio = "precs";

//  $dispositivo = "dispos";

  //formulario

  $nombre = $_GET['nombre'];

  $apellido = $_GET['apellido'];

  $correo = $_GET['correo'];

  $celular = $_GET['celular'];

  $calle = $_GET['calle'];

  $colonia = $_GET['colonia'];

  $numeroext = $_GET['numeroext'];

  $numeroint = $_GET['numeroint'];

  $ciudad = $_GET['ciudad'];

  $codigopostal = $_GET['codigopostal'];

  //$folio = $_GET['folio'];
  // $nombre = "variant";

  // $apellido = "variant";

  // $correo = "variant";

  // $celular = "variant";

  // $calle = "variant";

  // $colonia = "variant";

  // $numeroext = "variant";

  // $numeroint = "variant";

  // $ciudad = "variant";

  // $codigopostal = "variant";

   $folio = "variant";


$hoy = date("d-m-Y");

$fehca_vencimiento = date("d-m-Y",strtotime($hoy."+ 15 days")); 

$total = $precio;

    require_once('../vendor/autoload.php');

    //PLANTILLA

    require_once('plantillas/reporte/index.php');

    //CSS PLANTILLA

    $css = file_get_contents('plantillas/reporte/style.css');

    $mpdf = new \Mpdf\Mpdf([]);

    $plantilla = getPlantilla($marca, $modelo, $servicio, $precio, $dispositivo, $nombre, $apellido, $correo, $celular, $calle, $colonia, $numeroext, $numeroint, $ciudad, $codigopostal, $folio, $hoy,$fehca_vencimiento, $total);

    $mpdf->writehtml($css,\Mpdf\HTMLParserMode::HEADER_CSS);

    $mpdf->writehtml($plantilla,\Mpdf\HTMLParserMode::HTML_BODY);

    $mpdf->Output("Reporte.pdf","I");

    echo "<script>window.close();</script>";

?>