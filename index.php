<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESIONES EN PHP</title>
    <style>
        body{
            background-color: grey;
            background-image: url("espacio.jpg");
            
        }

        form{
            /*margin 0 arriba y abajo , auto izq derecha */
            margin: 0 auto;
            text-align: center;
        }
        span{
            color: #F00;
            font-size: 2em;
        }
        #texto{
            font-size: 30px;
            color: blue;
            padding-top: 10px;
            padding-bottom: 5px;
            border-bottom: solid red  5px;
        }

        #texto.error{
            color: red;
        }

        label{
            color: white;
        }
    </style>
</head>
<body>

    <!--SESIONES SON METODOS DE SEGURIDAD QUE QUEDAN ALOJADAS EN EL SERVIDOR -->

    <form id="auntetificacion_frm" action="control.php" method="post" enctype="application/x-www-form-urlencoded">

        <?php 
            //NO MOSTRAR MENSAJES NOTICE,ERROR,ETC
            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

            //VERIFICACION CONTROL.PHP

            if($_GET["error"]=="si"){
                echo "<p id='texto'class='error'>VERIFICA TUS DATOS</p>";
            }else{
                echo "<p id='texto' >INTRODUCE TUS DATOS<p>";
            }
        

        ?>
        
        <br/><br/>
        <label>Usuario: </label>
        <input type="text" name="usuario_txt"><br/><br/>
        <label>Password: </label>
        <input type="password" name="password_txt"><br/><br/>
        <input type="submit" name="entrar_btn" value="ENTRARXPOST">
    </form>

</body>
</html>