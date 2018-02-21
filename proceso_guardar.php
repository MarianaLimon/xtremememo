<?php

    include ("");

    $nombre = $_POST['nombre'];
    $mail = $_POST['mail'];
    $tel = $_POST['tel'];
    $numtiket = $_POST['numtiket'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $query = "INSERT INTO registro (name,mail,tel,id_estado,numtiket,imgtiket) VALUES('$nombre','$mail','$tel','$numtiket','$imagen')";
    $resultado = $conexion->query($query);

    if ($resultado){
        echo "Incertado correctamente";
    }
    else{
        echo "No se inserto ni madres";
    }
?>