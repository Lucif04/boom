<?php
session_start();
    
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
            <a href="index.php"><img src="assets/img/logo.png" alt="Boombang"></a>
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

    <section class="mb-2">
        <h2 class="titulo">Crea tu personaje</h2>
        <div class="contenedor">
            <form action="personaje_creado.php" method="POST">
                <div class="row ">
                    <div class="col datos">
                        <h3>Completar datos de tu personaje</h3>
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                        <input type="tel" name="telefono" id="telefono" placeholder="Telefono" required>
                        <input type="email" name="correo" id="correo" placeholder="correo" required onkeyup="validarCorreo()" >
                        <div name="msjc" id="msjc" class="msjc"></div>
                        <input type="text" name="usuario" id="usuario" placeholder="Usuario" required>
                        <input type="password" name="clavee" id="clavee" placeholder="Contraseña" required onkeyup="validar();">
                        <div type="text" name="msj" id="msj" class="msjc"></div>
                    </div>

                    <div class="col pj">
                        <h3>Eleji tu personaje</h3>
                        <img class="img" src="assets/img/personajes1.png" alt="personajes">
                        <img class="img" src="assets/img/personajes2.png" alt="personajes">
                        <select required aria-required="true" name="pjelegido">
                            <option value="">Seleccionar personaje</option>
                            <option value="1">India</option>
                            <option value="2">DJ</option>
                            <option value="3">Bruja</option>
                            <option value="4">Sra</option>
                            <option value="5">Boomerang</option>
                            <option value="6">Niña</option>
                            <option value="7">gata</option>
                            <option value="8">Sr</option>
                        </select>
                        <button name="boton" id="btn-crear">Crear</button>
                    </div>
                </div>

            </form>
        </div>

    </section>

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

<script type="text/javascript" src="assets/js/funcionamiento.js"> </script>
