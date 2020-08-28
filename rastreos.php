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
    $users[$i] = array("marca" => "No encontrado");
    $consulta = "SELECT * FROM servicios_mastec where folio =\"" . $params["Folio"] . "\"";
    $resultado = mysqli_query($conexion, $consulta) or die("Algo ha ido mal en la consulta a la base de datos");
    while ($columna = mysqli_fetch_array($resultado)) {
        switch($columna["estado_dispositivo"]){
            case 1:
                $estado = "En recolección";
            break;
            case 2:
                $estado = "En diagnostico";
            break;
            case 3:
                $estado = "En reparación";
            break;
            case 4:
                $estado = "Listo para entrega";
            break;
            case 5:
                $estado = "Enviando a domicilio";
            break;
            case 6:
                $estado = "Dispositivo entregado";
            break;
        }
        $myArr = [
            "id" => $columna["id"],
            "marca" => $columna["marca"],
            "modelo" => $columna["modelo"],
            "estado" => $estado,
            "servicio" => $columna["servicio"]
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

        $sql = "INSERT INTO cotizaciones (marca,modelo,servicio,fecha_cotizacion) values (\"". $marca ."\",'". $modelo."','".$servicio. "',NOW());";

        if ($conexion->query($sql) === TRUE) {
            echo json_encode(array("response" => "Guardado", "Marca"=>$marca,"modelo"=>$modelo,"servicio"=>$servicio));
        } else {
            echo json_encode(array("response" => "Error: ".$conexion->error));
        }
        //echo json_encode(array("toks" => $_POST['Token']));
    } else {
        echo json_encode(array("response" => "Sin datos"));
    }
    $conexion->close();
}