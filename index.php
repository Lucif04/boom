<?php
session_start();
    
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
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
                <button> <a class="cursor" href="cerrar_session.php">Cerrar sesion</a> </button>
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
        <form action="login.php" method="POST" class="form">
            <h2>Iniciar sesión</h2>
            <input type="text" name="usuario" id ='usuario' placeholder="Nombre de usuario" required>
            <input type="password" name="clave" id = 'clave' placeholder="Contraseña" required>
            <div class="buttons">
                <button class="cursor" type="submit" value="Iniciar sesión">Iniciar sesión</button>
                <button class="cursor" type="button" id="cancelBtn">Cancelar</button>
            </div>
        </form>
    </div>
    
    <div class="contenedor mb-2">
        <img style="width: 100%; height: auto;" src="img/inicio.png" alt="">
    </div>

    <!--Footer-->
    <footer>
        <div class="cont-footer">
            <div class="logo-lb">
                <img src="iconos/logo-lb.png" alt="">
                <h4>copyright</h4>
            </div>
            <div class="redes">
                <a target="_blank" href="https://api.whatsapp.com/send?phone=5492364652498"><img src="iconos/whatsapp.png" alt=""></a>
                <a target="_blank" href="#"><img src="iconos/instagram.png" alt=""></a>
                <a  target="_blank" href="#"><img src="iconos/facebook.png" alt=""></a>
            </div>
        </div>
    </footer>
</body>
</html>

<script type="text/javascript">

    //Ventana emergente para el inicio de sesion
    //toma el evento y lo pone a escuchar, y un segundo argumento para llamar cada vez que se desencadena el evento descrito
    document.getElementById("loginBtn").addEventListener("click", function() {
    document.getElementById("loginPopup").style.display = "block";
    });
    
    //Aca cerramos la ventana emergente
    document.getElementById("cancelBtn").addEventListener("click", function() {
    document.getElementById("loginPopup").style.display = "none";
    });
 </script>

