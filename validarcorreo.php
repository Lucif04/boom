<?php

include('conexion.php');
$cc= conexion();

$correo = $_REQUEST['correo'];

$guardar = mysqli_query($cc, "SELECT correo FROM registros WHERE correo = '$correo'");

$rc = '';
while($rs = mysqli_fetch_array($guardar)){
        $rc = $rs['correo'];
}

if ($rc == $correo){
    echo 'El correo ya existe';
} else{
    echo 'Correo valido';
}
    

?>