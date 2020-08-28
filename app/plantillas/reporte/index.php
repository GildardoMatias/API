
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>



<?php
  function getPlantilla($marca, $modelo, $servicio, $precio, $dispositivo, $nombre, $apellido, $correo, $celular, $calle, $colonia, $numeroext, $numeroint, $ciudad, $codigopostal, $folio, $hoy,$fehca_vencimiento, $total){    
    $plantilla = '
   
    <body>
    <header class="clearfix">
      <div id="logo">
        <img src="img/logo.png" width="180" height="185">
      </div>
      <div id="company">
        <h2 class="name">Mas Tecnologí­a</h2>
        <div>Morelia Mich, Virrey de Mendoza No.255, 58000, MX</div>
        <div>443 540 2474</div>
        <div><a href="mailto:mastecnologiaoficina1@gmail.com">mastecnologiaoficina1@gmail.com
        </a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">Reporte para:</div>';

         
            $plantilla .= '<h2 class="name">'."$nombre".'&nbsp;'."$apellido".'</h2>';        
          $plantilla .= '<div class="address">'."$calle".'&nbsp;, '."$colonia".'&nbsp;'."$numeroext".'&nbsp;'."$numeroint".', &nbsp;'."$codigopostal".', '."$ciudad".'&nbsp; Mich.</div>
          <div class="email"><a href="mailto:'."$correo".'">'."$correo".'</a>&nbsp;'."$celular".'</div>
        </div>
        <div id="invoice">
          <h1>Reporte de Reparación</h1>
          <h1 style="font-size: 18px; font-weight: bold;">Folio: '."$folio".'</h1>
          <div class="date">Fecha de reporte: '."$hoy".' </div>
          <div class="date">Fecha de vencimiento: '."$fehca_vencimiento".'</div>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">DESCRIPCIÓN</th>
            <th class="unit">COSTO</th>
            <th class="qty">ANTICIPO</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="no">01</td>
            <td class="desc"><h3>'."$dispositivo".', '."$servicio".','."$marca".', '."$modelo".'</h3></td>
            <td class="unit">$'."$precio".'</td>
            <td class="qty">$0</td>
            <td class="total">$'."$total".'</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">SUBTOTAL</td>
            <td>$'."$total".'</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">GRAND TOTAL</td>
            <td>$'."$total".'</td>
          </tr>
        </tfoot>
      </table>
      <div id="thanks">Gracias por su Preferencia!</div>
      <div id="notices">
        <div>Aviso:</div>
        <div class="notice">Equipos y dispositivos no reclamados despues de 30 dias de su reparación tendran un un aumento del 10% al costo total.</div>
      </div>
    </main>
    <footer>
      Reporte valido hasta su fecha de vencimiento, dudas o aclaraciones: mastecnologiaoficina1@gmail.com
    </footer>
  </body>';

  return $plantilla;
  }
  ?>

</html>