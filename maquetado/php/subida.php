<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>InstaGG-Subida-De-Jugadas</title>
    <script src="../js/prefix.js"></script>
    <link rel="stylesheet" href="../css/cuerpo.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/aside.css">
    <link rel="stylesheet" href="../css/mediaQuery.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <link rel="stylesheet" href="../css/personajes_ow.css">

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
        <article>
            <h1 class="title">InstaGG Subida De Jugadas</h1>
            <p1>
- Si usted está interesado en la presentación a la serie, este es el lugar para enviar sus mejores clips!
            </p1>
        </article>
        <article>
            <h3 class="title">Importante</h3>
            <p1>
- Por favor, evite agregar o tener música en sus clips. InstaGG es muy estricto sobre los derechos de autor para la música.

- No elimine su video ni lo haga PRIVADO después de enviar su clip. Si el video se elimina o lo vuelve PRIVADO no podemos ver el clip para ver si queremos usarlo.

- Le daremos crédito a su nombre de YouTube y / o Gamer en la descripción.

- ¡Calidad! Intenta que tu clip tenga por lo menos 720p de resolución o mejor (más alto).
            </p1>
        </article>
        </section>
    <section class="main">
        <form class="formulario-registro" method="post" action="subidaExitosa.php">
            <ul class="registro-datos">

                <li>
                    <label for="titulo">Título del Clip</label>
                    <input type="text" id="titulo" name="titulo" placeholder="Ingrese título del clip"/>
                </li>
                <li>
                    <label for="descripcion">Breve descripción de su Jugada(¿Qué sucede o sucede en el clip?)</label>
                    <input type="text" id="descripcion" name="descripcion" placeholder="Descripción del clip"/>
                </li>
                <li>
                    <label for="elemento">Tipo de Jugada</label>
                    <select  id="elemento" name="elemento">
                    <option value="Mejores Jugadas">Mejores Jugadas</option>
                    <option value="Peores Jugadas">Peores Jugadas</option>
                    <option value="Video Blog">Video Blog</option>
                    <option value="Tutoriales">Tutoriales</option>
                </select>
                </li>
                <li>
                    <label for="servidor">SERVIDOR</label>
                    <select  id="servidor" name="servidor">
                    <option value="Latino América Norte">Latino América Norte</option>
                    <option value="Latino América Sur">Latino América Sur</option>
                    <option value="Norte América">Norte América</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Japón">Japón</option>
                    <option value="EU Oeste">EU Oeste</option>
                    <option value="EU Nordica y Este">EU Nordica y Este</option>
                    </select>
                </li>
                <li>
                    <label for="Nombre-Juego">Nombre Del VideoJuego</label>
                    <select id="Nombre-Juego" name="Nombre-Juego">
                    <option value="League of Legends">League of Legends</option>
                    <option value="Overwatch">Overwatch</option>
                    </select>
                </li>
                <li>
                      <label for="video">URL Youtube del video</label>
                      <input type="text" name="video" id="video" placeholder="https://www.youtube.com/watch?v=YOURVIDEOID" onblur="validaURL()"/>
                 </li>
                <li>
                    <button type="submit">Registro</button>
                </li>

            </ul>
        </form>
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
