<?php

    include_once('config.php');
    if(empty($_SERVER['CONTENT_TYPE']))
        { 
        $_SERVER['CONTENT_TYPE'] = "application/x-www-form-urlencoded"; 
        }
    
    if (isset($_REQUEST["dispositivo"])) {

        $dispositivo = $_REQUEST["dispositivo"];

        $myArr = [
            "dispositivo" => $dispositivo,
            //"modelo" => "No disponible",
            "servicio" => "No disponible",
            "precio" => "No disponible"
        ];

        // $i = 0;
        // $servs[$i] = $myArr;
        $servs[] = $myArr;
        //$i = 1;
        //$consulta = "SELECT * FROM servicios_ofrecidos WHERE marca = '" . $marca . "' and modelo = '" . $modelo . "';";
        $consulta = "SELECT * FROM servicios_ofrecidos WHERE dispositivo = '" . $dispositivo . "';";
        $resultado = mysqli_query($conexion, $consulta) or die("Algo ha ido mal en la consulta a la base de datos");
        while ($columna = mysqli_fetch_array($resultado)) {
            $myArr = [
                "dispositivo" => $columna["dispositivo"],
                //"modelo" => $columna["modelo"],
                "servicio" => $columna["servicio"],
                "precio" => $columna["precio_publ"]
            ];
            $servs[] = $myArr;
            //$i++;
        }
        //$myJSON = json_encode($myArr);
        $myJSON = ( json_encode($servs) );
        echo $myJSON;
    
    } else {
        echo json_encode(array("response" => "Sin datos"));
    }
    $servs = NULL;
    $conexion->close();
