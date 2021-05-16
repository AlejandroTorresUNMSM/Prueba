<?php 
    //VALIDAMOS LA SESION.PHP
    //validamos que la sesion continue verificando una de las variables creadas en control.php
    //cuando esta ya no coincida con si valor inicial se redirige al archivo salir.php

    //comenzamos la sesion
    session_start();
    if(!$_SESSION["autentificado"]){
        header("Location: salir.php");
    }

?>