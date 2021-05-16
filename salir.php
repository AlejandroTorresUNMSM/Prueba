<?php 
    //se destruye la sesion 

    session_start();
    session_destroy();

    header("Location: index.php");


?>