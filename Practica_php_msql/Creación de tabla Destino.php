<?php
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="dbPractica2022";

    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if (mysqli_connect_error()){
        die ('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    echo "CONEXION CORRECTA";
    //tabla 
    $sql ="CREATE TABLE  destino (
        id_destino BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        destino  varchar(30),
        fecha_llegada date ,
        fecha_salida DATE,
        id_persona BIGINT UNSIGNED
    )";

    if ($conn->query ($sql)===TRUE)
    {
        echo "TABLA CREADA";

    }else {
        echo "NO SE PUDO CREAR LA TABLA  ". $conn ->error;

    }
    $conn->close();

?>