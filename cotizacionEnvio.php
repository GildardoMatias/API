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
    <h3>Cotizacion de envios</h3>
    <form action="" method="post">
        <div class="row m-2">
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
        </div>

        <input type="submit" value="Cotizar" class="btn btn-primary">
    </form>
</body>

</html>

<?php
if (isset($_POST['zipfrom'])) {
    $body = [
        "zip_from" => $_POST['zipfrom'],
        "zip_to" => $_POST['zipto'],
        "parcel" => [
            "weight" => $_POST['peso'],
            "height" => $_POST['ancho'],
            "width" => $_POST['alto'],
            "length" => $_POST['profu']
        ]
    ];
    $token = 'yQwH8LjiQpfDeGcbirdgv2sKK1UfJCwADFwRQuQRxrst';
    $header = array('Authorization: Token token=yQwH8LjiQpfDeGcbirdgv2sKK1UfJCwADFwRQuQRxrst', 'Content-Type: application/json');
    $request_body = json_encode($body);
    $ch =  curl_init("https://api-demo.skydropx.com/v1/quotations");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $request_body);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //$datos = curl_exec($ch);
    $Jdatos = json_decode(curl_exec($ch), true);
    echo ('<br><h5>Respuesta :</h5>');
    //print_r($Jdatos);
    echo ('<br><br><h5>Precios:</h5>');

    for ($i = 0; $i < count($Jdatos); $i++) {
        echo ('Paquetería:  ' . $Jdatos[$i]['provider'] . "  Precio:  " . $Jdatos[$i]['amount_local'] . '<br>');
    }

    curl_close($ch);
}
?>