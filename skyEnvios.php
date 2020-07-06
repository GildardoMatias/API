<?php
    
    $token = 'yQwH8LjiQpfDeGcbirdgv2sKK1UfJCwADFwRQuQRxrst';
    $header = array ('Authorization: Token token=yQwH8LjiQpfDeGcbirdgv2sKK1UfJCwADFwRQuQRxrst','Content-Type: application/json');
    $ch =  curl_init("https://api-demo.skydropx.com/v1/shipments");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //$datos = curl_exec($ch);
    $Jdatos = json_decode(curl_exec($ch),true);
    print_r($Jdatos);
    echo('<br><br>NEXT<br><br>');

    // for ($i=0; $i < count($Jdatos); $i++) {
    //     echo( $Jdatos[$i]['amount_local'] . '<br>' );
    // }

    curl_close($ch);
    ?>