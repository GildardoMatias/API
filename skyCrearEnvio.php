<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body class="m-2">
    <h1>Cliente skydropx</h1>
    <h3>Creación de envios</h3>
    <form action="" method="post">
        <!-- <div class="row m-2">
            <label for="">CP Origen:</label><input type="number" name="zipfrom" id="zipfrom" class="form-control col-2">
            <label for="">CP Destino:</label><input type="number" name="zipto" id="zipto" class="form-control col-2">
        </div>
        <div class="row m-2">
            Ancho :<input type="number" name="ancho" id="ancho" class="form-control col-2">
            Alto: <input type="number" name="alto" id="alto" class="form-control col-2">
            Largo: <input type="number" name="profu" id="profu" class="form-control col-2">
        </div>
        <div class="row m-2">
            Peso (kg):<input type="number" name="peso" id="peso" class="form-control col-2"><br>
        </div> -->
        <input type="submit" value="Crear Envio" class="btn btn-primary">
    </form>
</body>
</html>

<?php

    $body = [
        "address_from" => [
        "province" => "Ciudad de México",
        "city"=> "Azcapotzalco",
        "name"=> "Luciano Castañeda",
        "zip"=> "02900",
        "country"=> "MX",
        "address1"=> "Av. Principal #234",
        "company"=> "skydropx",
        "address2"=> "Centro",
        "phone"=> "3384217447",
        "email"=> "skydropx@email.com"],
        "parcels"=> [
          "weight"=> 1,
          "distance_unit"=> "CM",
          "mass_unit"=> "KG",
          "height"=> 10,
          "width"=> 10,
          "length"=> 10
        ],
        "address_to"=> [
          "province"=> "Jalisco",
          "city"=> "Guadalajara",
          "name"=> "Gildardo Matias",
          "zip"=> "44100",
          "country"=> "MX",
          "address1"=> " Av. Lázaro Cárdenas #234",
          "company"=> "-",
          "address2"=> "Americana",
          "phone"=> "3311510605",
          "email"=> "ejemplo@skydropx.com",
          "references"=> "Frente a tienda de abarrotes",
          "contents"=> "Celular con pantalla rota"
        ]
    ];

    $token = 'yQwH8LjiQpfDeGcbirdgv2sKK1UfJCwADFwRQuQRxrst';
    $header = array('Authorization: Token token=yQwH8LjiQpfDeGcbirdgv2sKK1UfJCwADFwRQuQRxrst', 'Content-Type: application/json');
    $request_body = json_encode($body);
    $ch =  curl_init("https://api-demo.skydropx.com/v1/shipments");
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $request_body);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //$datos = curl_exec($ch);
    $Jdatos = json_decode(curl_exec($ch), true);
    echo ('<br><h5>Respuesta :</h5>');
    echo ('<br><br><h5>Precios:</h5>');
    print_r($Jdatos);

    curl_close($ch);

?>