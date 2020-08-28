<?php
include_once 'config.php';

$sql = "SHOW TABLES FROM reparalo";
//$resultado = mysql_query($sql);

$resultado = $conexion->query($sql);

if (!$resultado) {
    echo "Error de BD, no se pudieron listar las tablas\n";
    //echo 'Error MySQL: ' . mysqli_error;
    exit;
}

while ($fila = mysqli_fetch_row($resultado)) {
    echo "Tabla: {$fila[0]}\n";
}

mysqli_free_result($resultado);
//mysql_free_result($resultado);
?>