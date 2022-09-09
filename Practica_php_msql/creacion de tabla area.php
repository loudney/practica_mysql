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
    $sql ="CREATE TABLE  area (
        id_area BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        area VARCHAR(20)
    )";

    if ($conn->query ($sql)===TRUE)
    {
        echo "TABLA CREADA";

    }else {
        echo "NO SE PUDO CREAR LA TABLA  ". $conn ->error;

    }
    $conn->close();

?>