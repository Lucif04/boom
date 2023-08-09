<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$clave = $_POST['clavee'];
$pjelegido = $_POST['pjelegido'];

/*Conectar a la db*/
include('conexion.php');
$con= conexion();
/*en 000webhost no funciona el autoincrementar, entonces hicimos el auto incremento manual
$busco = mysqli_query($cc, "SELECT max(id_usuario) as 'ultimo' FROM registros");
$nro = mysqli_fetch_assoc($busco);
$ultimo = $nro['ultimo'];
$id = $ultimo + 1;*/
mysqli_query($con, "INSERT INTO registros(id_usuario, nombre, telefono, correo, usuario, clave, pj) VALUE(null, '$nombre', '$telefono', '$correo', '$usuario', '$clave', $pjelegido)");
mysqli_close($con);
/*Insertas datos en la DB*/


/**/

/*Como enviar un e-mail */
$para = $correo;
$titulo = 'Boombang - registro';
$url = 'https://bomlup.000webhostapp.com/index.php';
$de = 'From: Creaciones.lucif@gmail.com';
$mensaje = "Hola, estos son tus datos de acceso:\nUsuario: " . $usuario . "\nContraseña: " . $clave . "\nPara ingresar " . $url;

mail($para, $titulo, $mensaje, $de);


?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Boombang</title>
</head>
<body>
<header>
        <div class = "logo">
            <a href="index.php"><img src="img/logo.png" alt="Boombang"></a>
        </div>

        <div>
            <?php
            
            //Si iniciaste sesion te muestra tu nombre de usuario, ahora si no iniciaste te muestra para iniciar
            if(isset($_SESSION['usuario'])){
                ?> 
                <button class="cursor"> <?php echo $_SESSION['usuario'] ?> </button>
                <?php
                ?> 
                <button> <a class="cursor" href="modelo/cerrar_session.php">Cerrar sesion</a> </button>
                <?php
                
            } else{
                ?> 
                <button class="cursor" id="loginBtn"> Iniciar Sesion </button>
                <button> <a class="cursor" href="registro.php"> Registrate </a> </button>
                <?php
            } 
            ?>
            
        </div>
    </header>

    <hr>
    <!--Esto solo se despliga cuando apretamos el boton LoginBtn-->
    <div id="loginPopup" class="popup">
        <form action="modelo/login.php" method="POST" class="form">
            <h2>Iniciar sesión</h2>
            <input type="text" name="usuario" id ='usuario' placeholder="Nombre de usuario" required>
            <input type="password" name="clave" id = 'clave' placeholder="Contraseña" required>
            <div class="buttons">
                <button class="cursor" type="submit" value="Iniciar sesión">Iniciar sesión</button>
                <button class="cursor" type="button" id="cancelBtn">Cancelar</button>
            </div>
        </form>
    </div>
    
    <!--Personaje creado-->
    <h2 class="titulo">Personaje creado con exito</h1>
    <div class="contenedor mb-2">
        <div class="row">
            <div class="col pj">
                <h3>Personaje elegido y sus datos</h3>
                <?php if ($pjelegido == 1){
                        ?> <img src="assets/img/india.png" alt="india"> <?php

                    } else if($pjelegido == 2){
                        ?> <img src="assets/img/dj.png" alt="dj"><?php

                    } else if($pjelegido == 3){
                        ?> <img src="assets/img/bruja.png" alt="bruja"><?php

                    } else if($pjelegido == 4){
                        ?> <img src="assets/img/sra.png" alt="Sra"><?php

                    } else if($pjelegido == 5){
                        ?> <img src="assets/img/boomer.png" alt="boomer"><?php

                    } else if($pjelegido == 6){
                        ?> <img src="assets/img/ninia.png" alt="Niña"><?php

                    } else if($pjelegido == 7){
                        ?> <img src="assets/img/gata.png" alt="gata"><?php

                    } else if($pjelegido == 8){
                        ?> <img src="assets/img/sr.png" alt="Sr"><?php

                    }?>
            </div>
            <div class="col imprimir_datos">
                <h4>Nombre: <?php echo $nombre ?></h4>
                <h4>Telefono: <?php echo $telefono ?></h4>
                <h4>Correo: <?php echo $correo ?></h4>
                <p>Su usuario y clave fueron enviados a su correo electronico. <br> Recorda verificarlos, para empezar a jugar.</p>
                <a href="index.php"><button> Volver al inicio </button></a>
            </div>
        </div>
    </div>
    <!--Footer-->
    <footer>
        <div class="cont-footer">
            <div class="logo-lb">
                <img src="assets/iconos/logo-lb.png" alt="">
                <h4>copyright</h4>
            </div>
            <div class="redes">
                <a target="_blank" href="https://api.whatsapp.com/send?phone=5492364652498"><img src="assets/iconos/whatsapp.png" alt=""></a>
                <a target="_blank" href="#"><img src="assets/iconos/instagram.png" alt=""></a>
                <a  target="_blank" href="#"><img src="assets/iconos/facebook.png" alt=""></a>
            </div>
        </div>
    </footer>
    
</body>
</html>

<script type="text/javascript" src="assets/js/funcionamiento.js"> </script>