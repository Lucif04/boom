<?php
    //iniciamos session
    session_start();
    //destruimos la session
    session_destroy();
    //lo redirigimos 
    header("location: index.php");
?>