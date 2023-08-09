<?php
//Definimos las variables

function conexion(){
    $host="localhost";
    $user="root";
    $pass="";
    $dbname="boombang";
    //Abrimos la conexión
    $conexion=mysqli_connect($host,$user,$pass,$dbname);
    return $conexion;
}

$cc = conexion();

    

?>
