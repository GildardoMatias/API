<?php
include_once 'config.php';
echo('remote query');
include_once('config.php');

//$marca = $params["marca"]; https://mastecnologia.com.mx/API/servicesByDevice.php?query=show tables
$dispositivo = $params["dispositivo"];
$query = $_GET["query"];

        $myArr = [
            "dispositivo" => $dispositivo,
            //"modelo" => "No disponible",
            "servicio" => "No disponible",
            "precio" => "No disponible"
        ];

        $i = 0;
        //$servs[$i] = $myArr;
        $consulta = $query;
        $resultado = mysqli_query($conexion, $consulta) or die("Algo ha ido mal en la consulta a la base de datos");
        while ($columna = mysqli_fetch_array($resultado)) {
            // $myArr = [
            //     "dispositivo" => $columna["dispositivo"],
            //     //"modelo" => $columna["modelo"],
            //     "servicio" => $columna["servicio"],
            //     "precio" => $columna["precio_publ"]
            // ];
            // $servs[$i] = $myArr;
            echo $columna;
            $servs[$i] = $columna;
            $i++;
        }
        //$myJSON = json_encode($myArr);
        $myJSON = json_encode($servs);
        echo $myJSON;
    

    $conexion->close();
?>