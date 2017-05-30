<?php
session_start();
if($_SESSION['start'] == 'si')
  header("Location:../index.php");
?>
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
              <?php if($_GET['ban'] == true){ ?>
                <h2 class="title">Esta cuenta se encuentra baneada, comuniquese con el soporte de InstaGG via soporte@instagg.x10.mx</h2>
              <?php }else if($_GET['res'] == 'true'){ ?>
              	<h2 class="title">Se ha enviado un correo ha su cuenta con las instrucciones para restablecer su contrasena</h2>
              <?php }else if($_GET['res'] == 'false'){ ?>
              	<h2 class="title">No existe una cuenta asociada a ese correo.<h2>
              <?php }else if($_GET['res'] == 'si'){ ?>
              	<h2 class="title">Se ha cambiado la contrasena exitosamente.<h2>
              <?php }else if($_GET['res'] == 'no'){ ?>
              	<h2 class="title">No se pudo restablecer la contrasena, intente de nuevo mas tarde.<h2>
              <?php }else if($_GET['res'] == 'token'){ ?>
              	<h2 class="title">El token es incorrecto.<h2>
              <?php } ?>
                <form class="formulario-registro" method="post" action="sesion.php">
                    <ul class="registro-datos">
                        <li>
                          <label for="nickname">Nickname</label>
                          <input type="text" name="nickname" id="nickname" placeholder="Ingrese su Nickname" onblur="validaCampos()"/>
                        </li>
                        <li>
                          <label for="password">Constrasena</label>
                          <input type="password" name="password" id="password" placeholder="Ingrese su contrasena" onblur="validaCampoPass()"/>
                        <li>
                            <button type="submit">Iniciar Sesion</button>
                        </li>
                    </ul>
                </form>
                <a href="../html/reestablece.html">Olvide mi contrasena</a>
                <script type="text/javascript" src="../js/verificarFormulario.js"></script>
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
