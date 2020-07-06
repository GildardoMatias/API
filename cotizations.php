<?php

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if ($_REQUEST)
            getp($_REQUEST);
        else
            get();
        break;
    case 'POST':
        post($_REQUEST);
}

function get()
{
    include_once 'config.php';
    $users;
    $i = 0;
    $consulta = "SELECT * FROM users";
    $resultado = mysqli_query($conexion, $consulta) or die("Algo ha ido mal en la consulta a la base de datos");
    while ($columna = mysqli_fetch_array($resultado)) {
        $myArr = [
            "id" => $columna["id"],
            "nombre" => $columna["nombre"],
            "correo" => $columna["correo"],
            "contrasena" => $columna["contrasena"]
        ];
        $users[$i] = $myArr;
        $i++;
    }
    $myJSON = json_encode($users);
    echo $myJSON;
    $conexion->close();
}

function getp($params)
{
    include_once 'config.php';
    $users;
    $i = 0;
    $users[$i] = array("nombre" => "No encontrado");
    $consulta = "SELECT * FROM users where id =\"" . $params["Id"] . "\"";
    $resultado = mysqli_query($conexion, $consulta) or die("Algo ha ido mal en la consulta a la base de datos");
    while ($columna = mysqli_fetch_array($resultado)) {
        $myArr = [
            "id" => $columna["id"],
            "nombre" => $columna["nombre"],
            "correo" => $columna["correo"],
            "contrasena" => $columna["contrasena"]
        ];
        $users[$i] = $myArr;
        $i++;
    }
    $myJSON = json_encode($users);
    echo $myJSON;
    $conexion->close();
}

function post($params)
{
    include_once('config.php');
    if ($params) {

        $marca = $params["marca"];
        $modelo = $params["modelo"];
        $servicio = $params["servicio"];

        $sql = "INSERT INTO cotizaciones (marca,modelo,servicio,fecha_cotizacion) values (\"" . $marca . "\",'" . $modelo . "','" . $servicio . "',NOW());";

        if ($conexion->query($sql) === TRUE) {
            //echo json_encode(array("response" => "Guardado", "Marca"=>$marca,"modelo"=>$modelo,"servicio"=>$servicio));
        } else {
            //echo json_encode(array("response" => "Error: ".$conexion->error));
        }

        /* Array for default response */
        $myArr = [
            "marca" => $marca,
            "modelo" => $modelo,
            "precio" => "No disponible"
        ];

        $servs;
        $i = 0;
        //$consulta = "SELECT * FROM servicios_ofrecidos WHERE marca = '" . $marca . "' and modelo = '" . $modelo . "';";
        $consulta = "SELECT * FROM servicios_ofrecidos WHERE modelo = '" . $modelo . "';";
        $resultado = mysqli_query($conexion, $consulta) or die("Algo ha ido mal en la consulta a la base de datos");
        while ($columna = mysqli_fetch_array($resultado)) {
            $myArr = [
                "marca" => $columna["marca"],
                "modelo" => $columna["modelo"],
                "precio" => $columna["precio_publ"]
            ];
            $servs[$i] = $myArr;
            $i++;
        }
        $myJSON = json_encode($myArr);
        //$myJSON = json_encode($servs);
        echo $myJSON;
    } else {
        echo json_encode(array("response" => "Error"));
    }

    $conexion->close();
}
