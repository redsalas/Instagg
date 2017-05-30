<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>InstaGG</title>
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
            <section class="tracer">
                <article>
                    <h2 class="title">Historia De Tracer</h2>
                    <p1>
        BIOGRAFÍA

Nombre real: Lena Oxton, Edad: 26

Ocupación: Aventurera

Base de operaciones: Londres, Reino Unido

Afiliación: Overwatch (anteriormente)
</p1>
<p1>
 Frase Epica
 </p1>
<h4>
«¡Eh, chicos! ¡Llego la caballería!».
</h4>
<p1>
La ex agente de Overwatch conocida como Tracer es una aventurera del espacio y el tiempo y una fuerza irrefrenable del bien.
Lena Oxton (nombre en clave: "Tracer") fue la persona más joven en ser aceptada en el programa de vuelos experimentales de Overwatch. Era conocida por su pericia como piloto, por lo que la eligieron personalmente para probar el prototipo de un caza capaz de teletransportarse, el Slipstream. Sin embargo, durante su primer vuelo, la matriz de teletransporte falló y el caza desapareció. Lena fue dada por muerta.

Reapareció meses después, pero la experiencia la había cambiado por completo: sus moléculas ya no estaban sincronizadas con el paso del tiempo. Padecía de "disociación cronal"; era un fantasma viviente que desaparecía durante horas o días, y, cuando estaba presente, ni siquiera era capaz de mantener una forma física.

Los médicos y científicos de Overwatch estaban perplejos. El caso de Tracer parecía no tener solución hasta que un científico llamado Winston diseñó el "acelerador cronal", un dispositivo capaz de anclar a Tracer en el presente. También le permitía controlar el tiempo, de forma que pudiera acelerarlo o ralentizarlo a voluntad. Gracias a sus nuevas habilidades, se convirtió en una de las agentes más efectivas de Overwatch.

Desde la disolución de Overwatch, Tracer ha seguido ayudando al inocente y haciendo justicia allá donde se presenta la oportunidad.
                    </p1>
                </article>
            </section>
            <aside>
                <div class="personajes">
                    <div class="image"><img src="../img/tracer.png" alt="tracer"></div>
                </div>
            </aside>
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
