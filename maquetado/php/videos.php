<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
  <title>InstaGG-Videos</title>
  <script src="../js/prefix.js"></script>
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
        <a href="#">InstaGG</a>
      </div>
      <nav>
                    <a href="../index.php">Inicio</a>
                    <a href="tabla.php">Overwatch</a>
                    <a href="seleccion-lol.php">League of Legends</a>
                    <a href="tabla-usuarios.php">Contacto</a>
                    <?php if($_SESSION['start'] == 'si') { ?>
                      <a href="#"><?php echo "<img src=".$_SESSION['avatar']." width=15 height=15/> ".$_SESSION['nickname']; ?></a>
                    <?php }else{ ?>
                      <a href="#">Log In</a>
                    <?php } ?>
                    <a href="registro.php">Registro</a>
                </nav>
    </header>
    <section class="main">
      <div class="contenedor-principal">
        <div class="titulo-contenedor">
          <h2 class="titulo-inside">Jugadas destacadas</h2>
        </div>
        <div class="videos-contenedor">
          <div class="video-item">
            <a class="video-link" href="../reproductor.php?id=ejG_V3gSiYY"><img class="video-miniatura" src="http://img.youtube.com/vi/ejG_V3gSiYY/1.jpg" /></a>
            <h3 class="video-title">Mariscos Chuck</h3>
          </div>
          <div class="video-item">
            <a class="video-link" href="../reproductor.php?id=ejG_V3gSiYY"><img class="video-miniatura" src="http://img.youtube.com/vi/YDb5e1p2ALI/1.jpg" /></a>
            <h3 class="video-title">Mariscos Chuck</h3>
          </div>
          <div class="video-item">
            <a class="video-link" href="../reproductor.php?id=ejG_V3gSiYY"><img class="video-miniatura" src="http://img.youtube.com/vi/ojo8geMw2r0/1.jpg" /></a>
            <h3 class="video-title">Random Moments of the week</h3>
          </div>
          <div class="video-item">
            <a class="video-link" href="../reproductor.php?id=ejG_V3gSiYY"><img class="video-miniatura" src="http://img.youtube.com/vi/04HV0P6MZCA/1.jpg" /></a>
            <h3 class="video-title">Mariscos Chuck</h3>
          </div>
          <div class="video-item">
            <a class="video-link" href="../reproductor.php?id=ejG_V3gSiYY"><img class="video-miniatura" src="http://img.youtube.com/vi/q77BlZrcbC8/1.jpg" /></a>
            <h3 class="video-title">Mariscos Chuck</h3>
          </div>
          <div class="video-item">
            <a class="video-link" href="../reproductor.php?id=ejG_V3gSiYY"><img class="video-miniatura" src="http://img.youtube.com/vi/VTNjPAgnLU4/1.jpg" /></a>
            <h3 class="video-title">Mariscos Chuck</h3>
          </div>
          <div class="video-item">
            <a class="video-link" href="../reproductor.php?id=ejG_V3gSiYY"><img class="video-miniatura" src="http://img.youtube.com/vi/KamI6YyNHZE/1.jpg" /></a>
            <h3 class="video-title">Mariscos Chuck</h3>
          </div>
          <div class="video-item">
            <a class="video-link" href="../reproductor.php?id=ejG_V3gSiYY"><img class="video-miniatura" src="http://img.youtube.com/vi/G-ACb3xHYzo/1.jpg" /></a>
            <h3 class="video-title">Mariscos Chuck</h3>
          </div>
          <div class="video-item">
            <a class="video-link" href="../reproductor.php?id=iH46YARKYUo"><img class="video-miniatura" src="http://img.youtube.com/vi/iH46YARKYUo/1.jpg" /></a>
            <h3 class="video-title">Mariscos Chuck</h3>
          </div>
          <div class="video-item">
            <a class="video-link" href="../reproductor.php?id=yFokwfEHOlE"><img class="video-miniatura" src="http://img.youtube.com/vi/yFokwfEHOlE/1.jpg" /></a>
            <h3 class="video-title">Mariscos Chuck</h3>
          </div>
          <div class="video-item">
            <a class="video-link" href="../reproductor.php?id=GAA5am3G4VY"><img class="video-miniatura" src="http://img.youtube.com/vi/GAA5am3G4VY/1.jpg" /></a>
            <h3 class="video-title">Mariscos Chuck</h3>
          </div>
          <div class="video-item">
            <a class="video-link" href="../reproductor.php?id=1UB02Wmu6BU"><img class="video-miniatura" src="http://img.youtube.com/vi/1UB02Wmu6BU/1.jpg" /></a>
            <h3 class="video-title">Mariscos Chuck</h3>
          </div>
        </div>
        <div class="navegacion"></div>
      </div>
    </section>
    <aside>
      <div class="info">
        <div class="image"></div>
      </div>
      <div class="info">
        <div class="image"></div>
      </div>
    </aside>
    <footer>
      <section class="links">
        <a href="#">Inicio</a>
                    <a href="tabla.php">Overwatch</a>
                    <a href="seleccion-lol.php">League of Legends</a>
                    <a href="tabla-usuarios.php">Contacto</a>
                    <?php if($_SESSION['start'] == 'si') { ?>
                      <a href="#"><?php echo "<img src=".$_SESSION['avatar']." width=15 height=15/> ".$_SESSION['nickname']; ?></a>
                    <?php }else{ ?>
                      <a href="#">Log In</a>
                    <?php } ?>
                    <a href="registro.php">Registro</a>
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
