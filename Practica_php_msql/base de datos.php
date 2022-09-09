<?php
    $host="localhost";
    $dbusername="root";
    $dbpassword="";

    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if (mysqli_connect_error()){
        die ('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    echo "CONEXION CORRECTA";
    $sql ="CREATE DATABASE dbPractica2022";
    if($conn->query ($sql)==TRUE){
        echo "BASE DE DATOS CREADA CORRECTAMENTE";
    }else {
        echo "ERROR AL CREAR LA TABLA ". $conn->error;
    }
    $conn->close();

?>