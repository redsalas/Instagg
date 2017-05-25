<?php
session_start();
?>
<!DOCTYPE html>
<html lang="e">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>Perfil de Usuario</title>
    <script src="../js/prefix.js"></script>
    <link rel="stylesheet" href="../css/cuerpo.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/aside.css">
    <link rel="stylesheet" href="../css/mediaQuery.css">
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
    <section class="mainperfil">
        <!--Aquí va el perfil del usuario-->
        <div class="infoperfil">
            <div class="fotousuario">
                <img src="../img/pruebauser.png" alt="UserPicture" style="width:225px;height:225px; border-radius: 50%;">
            </div>
            <div class="infousuario">
                <article>
                    <h2 class="title">xDannyxmx</h2>
                    <p>
                        Administrador de la página
                    </p>
                </article>
            </div>
        </div>
        <div class="datosperfil">
            <article>
                <h2 class="title">Datos de Perfil</h2>
                <!--
                <table>
                    <tr>
                        <th>Email</th>
                        <td>Animex_004@hotmail.com</td>
                    </tr>
                    <tr>
                        <th>Juegos Favoritos</th>
                        <td>League of Legends</td>
                    </tr>
                    <tr>
                        <th>Plataformas Favoritas</th>
                        <td>PC</td>
                    </tr>
                    <tr>
                        <th>Sobre mí</th>
                        <td>Nu c k decirte bro disculpa</td>
                    </tr>
                </table>
                -->
                <h3>Email</h3>
                <p>Animex_004@hotmail.com</p>
                <h3>Juegos Favoritos</h3>
                <p>League of Legends</p>
                <p>Overwatch</p>
                <h3>Plataformas Favoritas</h3>
                <p>PC</p>
                <h3>Sobre mí</h3>
                <p>Nu c k decirte bro disculpa</p>
            </article>
            
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