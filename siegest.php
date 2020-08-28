<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');
header("Access-Control-Allow-Headers: X-Requested-With");
//header('Content-Type: text/html; charset=utf-8');
header("Content-Type: application/json; charset=UTF-8");
header('P3P: CP="IDC DSP COR CURa ADMa OUR IND PHY ONL COM STA"');

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        get($_REQUEST);
        break;
    case 'POST':
        post($_REQUEST);
        break;
}

function get($params)
{
    if ($params) {

        $dispositivo = $params["dispositivo"];
    } else {
    }
}

function post($params)
{
    include_once 'config.php';
    if ($params) {
        $curp = $params["curp"];
        $app = $params["app"];
        $apm = $params["apm"];
        $nom = $params["nom"];
        
        $sql = 'insert into sieg_pr values ("1","'.$nom.'","'.$app.'","'.$apm.'","'.$curp.'")';

        $resultado = $conexion->query($sql);
        
        if (!$resultado) {
            echo json_encode(Array("Error "=>"BD, no query executed"));
        } else 
        echo json_encode(array("curp_r" => $curp, "nombre_rec"=>$nom, "app_rec"=>$app));
    } else {
        echo json_encode(array("response" => "No data"));
    }
}