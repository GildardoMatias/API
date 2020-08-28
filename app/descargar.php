<?php





$marca = $_POST['marca'];

$modelo = $_POST['modelo'];

$servicio = $_POST['servicio'];

$precio = $_POST['precio'];

//$dispositivo = $_POST['dispositivo'];
$dispositivo = "Dispositivoss";




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

  $folio = $_POST['folio'];



 









$hoy = date("d-m-Y");

$fehca_vencimiento = date("d-m-Y",strtotime($hoy."+ 15 days")); 

$total = $precio;





    require_once('../vendor/autoload.php');

    //PLANTILLA

    require_once('plantillas/reporte/index.php');

    //CSS PLANTILLA

    $css = file_get_contents('plantillas/reporte/style.css');

    $mpdf = new \Mpdf\Mpdf([



    ]);



    $plantilla = getPlantilla($marca, $modelo, $servicio, $precio, $dispositivo, $nombre, $apellido, $correo, $celular, $calle, $colonia, $numeroext, $numeroint, $ciudad, $codigopostal, $folio, $hoy,$fehca_vencimiento, $total);

    $mpdf->writehtml($css,\Mpdf\HTMLParserMode::HEADER_CSS);

    $mpdf->writehtml($plantilla,\Mpdf\HTMLParserMode::HTML_BODY);

    $mpdf->Output("Reporte.pdf","D");



?>