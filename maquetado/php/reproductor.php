<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <link href='https://sites.google.com/site/scriptsbalcon/b/blJJbalconVidg.css' media='screen' rel='stylesheet' type='text/css'/>
    <title>InstaGG-Reproductor</title>
    <script src="../js/prefix.js"></script>
    <!-- <script src="../js/jquery-3.2.1.min.js"></script> -->
    <link rel="stylesheet" href="../css/cuerpo.css"/>
    <link rel="stylesheet" href="../css/header.css"/>
    <link rel="stylesheet" href="../css/main.css"/>
    <link rel="stylesheet" href="../css/footer.css"/>
    <link rel="stylesheet" href="../css/aside.css"/>
    <link rel="stylesheet" href="../css/mediaQuery.css"/>
    <link rel="stylesheet" href="../css/videos.css"/>
</head>
    <body>
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
      </script>
        <div class="container">
            <header>
                <div class="logo">
                    <img src="../img/InstaGG.png" alt="InstaGG">
                    <a href="../index.php">InstaGG</a>
                </div>
                <nav>
                  <a href="../index.php">Inicio</a>
                    <a href="tabla.php">Overwatch</a>
                    <a href="seleccion-lol.php">League of Legends</a>
                    <a href="videos.php">Videos</a>
                    <?php if($_SESSION['start'] == 'si') { ?>
                      <a href="<?php echo 'perfil.php?nickname='.$_SESSION['nickname']; ?>"><?php echo "<img src=".$_SESSION['avatar']." width=15 height=15/> ".$_SESSION['nickname']; ?></a>
                      <a href="logout.php">Cerrar sesion</a>
                      <a href="subida.php">Subir video</a>
                    <?php }else{ ?>
                      <a href="login.php">Log In</a>
                      <a href="registro.php">Registro</a>
                    <?php } ?>
                </nav>
            </header>
            <section class="main">
              <?php $id = $_GET['id']; ?>
              <div id="player" idVideo=<?php echo $id; ?>></div>
                <?php
                include("config.php");
                $url = mysqli_connect($host,$user,$pass) or die(mysqli_error());
                mysqli_select_db($url,$sldb);
                $result = mysqli_query($url, "SELECT titulo, tipo, descripcion, userid FROM videos WHERE videoid='$id'");
                while ($video = mysqli_fetch_array($result)){
                    $resultado = mysqli_query($url, "SELECT nickname FROM usuarios WHERE id='$video[3]'");
                    while ($selecuser = mysqli_fetch_array($resultado)){
                        $usernickname = $selecuser[0];
                    }?>
                <h1><?php echo $video[0]; ?></h1>
                <h3><?php echo $video[1]; ?> by<a href="perfil.php?nickname=<?php echo $usernickname; ?>"><?php echo $usernickname; ?></a></h3>
                <p><?php echo $video[2]; ?></p>
                <?php } ?>
              <script src="../js/load.js"></script>
              <div class="fb-comments" data-href="http://instagg.x10.mx/reproductor.php?id<?php echo $id; ?>" data-numposts="10"></div>
            </section>
            <footer>
                <section class="links">
                  <a href="../index.php">Inicio</a>
                    <a href="tabla.php">Overwatch</a>
                    <a href="seleccion-lol.php">League of Legends</a>
                    <a href="videos.php">Videos</a>
                    <?php if($_SESSION['start'] == 'si') { ?>
                      <a href="<?php echo 'perfil.php?nickname='.$_SESSION['nickname']; ?>"><?php echo "<img src=".$_SESSION['avatar']." width=15 height=15/> ".$_SESSION['nickname']; ?></a>
                      <a href="logout.php">Cerrar sesion</a>
                      <a href="subida.php">Subir video</a>
                    <?php }else{ ?>
                      <a href="login.php">Log In</a>
                      <a href="registro.php">Registro</a>
                    <?php } ?>
                </section>
                <div class="social">
                    <div class="fb-follow" data-href="https://www.facebook.com/Instagg-914178962055965/" data-layout="button_count" data-size="large" data-show-faces="true"></div>
                    <a href="https://twitter.com/Soporte_Instagg" class="twitter-follow-button" data-size="large" data-show-count="false">Follow @Soporte_Instagg</a>
                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </footer>
        </div>
    </body>
</html>
