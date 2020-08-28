<?php
    include_once 'config.php';
    $resultado = $conexion->query("SHOW COLUMNS FROM servicios_mastec");
    if (!$resultado) {
        echo 'No se pudo ejecutar la consulta: ';
        exit;
    }
    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            //print_r($fila);
            //echo "dato: " . $fila['Field'] . " tipo: " . $fila['Type'];
            json_encode($fila);
            echo $fila['Field'];
            echo "\t";
            echo $fila['Type'];
            echo "\n";
        }
    }
    ?>