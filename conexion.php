<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "zonagamer";

    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $conexion = mysqli_connect($servername, $username, $password, $database);

    $sql = "INSER INTO gamer (nombre, telefono, correo) values ('$nombre', '$telefono', '$correo')";

    if (mysqli_query($conexion, $sql))
    {
        ?>
            <h3 class="bien">Registro completado</h3>  
        <?php
    }

?>