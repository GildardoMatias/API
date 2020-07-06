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
        break;
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
}

function getp($params)
{
    // include_once('config.php');
    // echo json_encode($params);
    include_once 'config.php';
    $users;
    $i = 0;
    $users[$i] = array("nombre"=>"Not found");
    $consulta = "SELECT * FROM users where correo =\"" . $params["User"] . "\"";
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
}

function post($params)
{
    include_once('config.php');
    if ($params)
        echo json_encode($params);
    else
        echo 'kha';
}
