<?
    include("conexion.php");
    $consulta="select id_estado,name_estado from estados order by name_estado asc";
    $result=mysql_query($consulta);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro XtremePower</title>
</head>
<body>
    <center><br><br><br>
        <form <!--action="proceso_guardar.php" method="POST" enctype="multipart/form-data"--> >
            <input type="text" name="nombre" placeholder="Nombre..." value=""><br><br>
            <input type="email" name="mail" placeholder="E-mail..." value=""><br><br>
            <input type="tel" name="tel" placeholder="Teléfono..." value=""><br><br>

            <select name="estados">
                <option value="">Seleccionar</option>
                <?
                while($fila=mysql_fetch_row($result)){
                    echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                }
                ?>
            </select><br><br>

            <input type="number" name="numtiket" placeholder="Número de tiket..." value=""><br><br>
            <input type="file" name="imagen" >
            <input type="submit" value="Enviar">
        </form>
    </center>
</body>

</html>