<?php
    //ARCHIVO CONTROL
    //VALIDA LOS DATOS SI SON CORRECTOS CREA LA SESION 
    //SINO REGRESA UN ERROR AL USUARIO

    if($_POST["usuario_txt"]=="alejandro" && $_POST["password_txt"]=="ALEPH"){
        //inicio la sesion
        session_start();
        
        //declaro las variables de sesion

        //indica si la sesion sigue vigente
        $_SESSION["autentificado"] = true;
        $_SESSION["usuario"] = $_POST["usuario_txt"];

        //dirige el flujo a 
        header("Location: archivo-protegido.php");
    }else{
        //dirige a index.php le va mandar error si
        header("Location: index.php?error=si");

    }

    //ARCHIVO PROTEGIDO SON ARCHIVOS SEGUROS 
?>