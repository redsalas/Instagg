<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>InstaGG-Registro</title>
    <script src="../js/prefix.js"></script>
    <link rel="stylesheet" href="../css/cuerpo.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/aside.css">
    <link rel="stylesheet" href="../css/mediaQuery.css">
    <link rel="stylesheet" href="../css/formulario.css">
</head>
<body>
<div class="container">
    <header>
        <div class="logo">
            <img src="../img/InstaGG.png" alt="InstaGG">
            <a href="#">InstaGG</a>
        </div>
        <nav>
            <a href="../index.html">Inicio</a>
            <a href="#">Overwatch</a>
            <a href="#">League of Legends</a>
            <a href="#">Contacto</a>
            <a href="../html/registro.html">Registro</a>
        </nav>
    </header>
    <section class="main">
        <h1>Registro Exitoso!</h1>
        <a href="index.html">Haga click aqui para continuar</a>
    </section>
    <footer>
        <section class="links">
            <a href="index.html">Inicio</a>
            <a href="#">Overwatch</a>
            <a href="#">League of Legends</a>
            <a href="#">Contacto</a>
            <a href="#">Registro</a>
        </section>
        <div class="social">
            <a class="fb" href="#"></a>
            <a class="tw" href="#"></a>
        </div>
    </footer>
</div>
<?php
    /*
    $url = mysqli_connect("localhost","instaggx_admin","instagg123") or die (mysqli_error());
    mysqli_select_db($url,"instaggx_instaggDB");
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $name = $_POST['first-name'];
    $last = $_POST['last-name'];
    $pass = $_POST['password'];
    $country = $_POST['country'];
    //foreach ($_POST['plataforma'] as $plataforma)
        //echo $plataforma."<br>";
   if(!isset($_FILES['avatar']) || $_FILES['avatar']['error'] >0 )
        echo "Ha ocurrido un error";
    else{
        $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
        $limite_kb = 16384;
        if (in_array($_FILES['imagen']['type'], $permitidos) &&
            $_FILES['imagen']['size'] <= $limite_kb * 1024){
            $img_temp = $_FILES['imagen']['tmp_name'];
            $tipo = $_FILES['imagen']['type'];
            $fp = fopen($imagen_temporal, 'r+b');
            $data = fread($fp, filesize($imagen_temporal));
            fclose($fp);
            $data = mysqli_escape_string($data);
       }
    }
    $resultado = mysqli_query($url,"insert into USERS (avatar,name,lastname,nickname,email,password,country,plataformas) 
                              values ('$data','$name','$last','$nickname','$email','$pass','$country','$nickname')");
    if($resultado)
        echo "Se ha subido a la base de datos";
    else
        echo "Error al subir a la base de adtos";*/
?>