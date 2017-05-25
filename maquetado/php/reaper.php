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
                    <img src="../../../../Downloads/Instagg/Instagg/img/InstaGG.png" alt="InstaGG">
                    <a href="../index.php">InstaGG</a>
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
            <section class="tracer">
                <article>
                    <h2 class="title">Historia De Reaper</h2>
                    <p1>
BIOGRAFÍA

Nombre real: Desconocido, Edad: Desconocida

Ocupación: Mercenario

Base de operaciones: Desconocida

Afiliación: Desconocida
</p1>
<p1>
 Frase Epica
 </p1>
<h4>
«La Muerte camina entre nosotros».
</h4>
<p1>
Corren rumores de la existencia de un terrorista vestido de negro conocido como "Reaper". Su verdadera identidad y sus objetivos son un misterio. Solo hay una cosa segura: donde él va, la muerte lo sigue.

Reaper es un mercenario extremadamente irascible, un asesino cruel y sin escrúpulos que ha perpetrado ataques terroristas por todo el mundo. Ha luchado en varios conflictos armados en las últimas décadas y no obedece a ninguna causa u organización.

Los supervivientes hablan de una sombra oscura que vaga indemne entre los horrores de los campos de batalla. Los pocos cadáveres de sus víctimas que han podido recuperarse son carcasas pálidas drenadas de vida, y sus células muestran signos de intensa degradación. Se dice que Reaper es el resultado de una alteración genética fallida que hace que sus células se degraden y se regeneren continuamente a gran velocidad.

Aquellos que intentan seguir sus movimientos han empezado a ver un patrón en los lugares en los que hace acto de presencia. Creen que Reaper está dando caza de forma sistemática a antiguos agentes de Overwatch con el objeto de eliminarlos.
                    </p1>
                </article>
            </section>
            <aside>
                <div class="personajes">
                    <div class="image"><img src="../img/reaper.png" alt="reaper"></div>
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