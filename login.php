<?php
//esto es para iniciar session
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

include('conexion.php');
$cc = conexion();

$result = mysqli_query($cc, "SELECT * FROM registros WHERE usuario = '$usuario' AND clave = '$clave'" );

//Vamos a comprobar que el usuario ingreso correctamente.
if(mysqli_num_rows($result) > 0){
    //con esto guardamos los datos para usarlos en cualquier pagina que queramos.
    $_SESSION['usuario'] = $usuario;
    
    header("Location: index.php");
    //Con sto lo redirigimos a otra pagina
    //salir
    exit;
} else{
    echo '<script>
            alert("Usuario o clave incorrecta, vuelva a intentar");
            window.location = "index.php";
          </script>';
    //salir
    //exit;
}

?>
