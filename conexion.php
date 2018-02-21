<?php

$conexion = new mysqli("127.0.0.1", "xtremepower", "mdmM4rketing", "xtremepromo");

if($conexion->connect_errno){
    echo "Conexión fracasada";
}
else {
    echo "Conexión exitosa bitches";
}

?>