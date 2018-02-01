<?php
/**
 * Created by PhpStorm.
 * User: limonrefreshingideas
 * Date: 01/02/18
 * Time: 16:17
 */

    $conexion = new mysqli("localhost", "root", "mdmM4rketing", "xtremepromo");

        if($conexion){
            echo "conexion exitosa";
        }
        else {
            echo "conexion fracasada";
        }
?>