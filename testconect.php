<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    </head>
    <body>
    <?php
    if (isset($_GET['aid']) && is_numeric($_GET['aid'])) {
        $aid = (int) $_GET['aid'];
    } else {
        $aid = 1;
    }
    // conecxion bd
    $mysqli = new mysqli('localhost', 'xtremepower', 'mdmM4rketing', 'xtremepromo');
    $acentos = $mysqli->query("SET NAMES 'utf8'");

    // falla al conectar con la base
    if ($mysqli->connect_errno) {
        echo "Lo sentimos, este sitio web está experimentando problemas.";
        echo "Error: Fallo al conectarse a MySQL debido a: \n";
        echo "Errno: " . $mysqli->connect_errno . "\n";
        echo "Error: " . $mysqli->connect_error . "\n";

        exit;
    }

    // consulta SQL
    $sql = "SELECT id_estado, name_estado FROM estados WHERE id_estado = $aid";
    if (!$resultado = $mysqli->query($sql)) {
        // mensaje para consulta inservible.
        echo "Lo sentimos, este sitio web está experimentando problemas.";

        // obtener información del error
        echo "Error: La ejecución de la consulta falló debido a: \n";
        echo "Query: " . $sql . "\n";
        echo "Errno: " . $mysqli->errno . "\n";
        echo "Error: " . $mysqli->error . "\n";
        exit;
    }

    // resultado de la consulta
    if ($resultado->num_rows === 0) {
        // consulta fracasada
        echo "Lo sentimos. No se pudo encontrar una coincidencia para el ID $aid. Inténtelo de nuevo.";
        exit;
    }

    // manejo de errores
    $sql = "SELECT id_estado, name_estado FROM estados ORDER BY name_estado asc";
    if (!$resultado = $mysqli->query($sql)) {
        echo "Lo sentimos, este sitio web está experimentando problemas.";
        exit;
    }

    // imprimir resultado de consulta
    echo "<ul>\n";
    while ($estado = $resultado->fetch_assoc()) {
        echo "<li>";
        echo $estado['name_estado'];
        echo "</li>";
    }
    echo "</ul>\n";

    // cerrar conexion
    $resultado->free();
    $mysqli->close();
    ?>

    </body>
</html>

