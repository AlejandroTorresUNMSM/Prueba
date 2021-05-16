<!DOCTYPE html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESION EN PHP</title>
    <style>
        h2{
            text-align: center;
            color: blue;
            border-bottom: solid red  5px;
        }

        p{
            text-align: center;
            color: white;
        }

        body{
            background-color: grey;
            background-image: url("espacio.jpg");
            
        }

        
        span{
            color: #F00;
            font-size: 2em;
        }
        a{
            text-align: center;
            font-size: 20px;
            color: red;
            padding-top: 10px;
            padding-bottom: 5px;
            border-bottom: solid red  5px;
        }

        label{
            color: white;
        }

        div{
            margin: auto;
            text-align: center;
        }

        img{
            display:block;
            margin:auto;
            width: 200px;
            height: 200px;
        }
    </style>
</head>
<body>
    <?php //validamos la sesion
    include("sesion.php");
    ?>

    <h2>BIENVENIDO</h2>

    <p><?php echo $_SESSION['usuario'];?></p>

    <br/><br/>
    <P>Estas en OTRA pagina seguro en php </P>
    <br/><br/>

    <img src="nimu.jpg" >

    <div>
        <a href="archivo-protegido.php">IR A PAGINA PRINCIPAL</a>
        <br/><br/>
        <a href="salir.php">SALIR</a>
    </div>
    
</body>
</html>