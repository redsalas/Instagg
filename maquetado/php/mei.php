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
                    <a href="#">InstaGG</a>
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
                    <h2 class="title">Historia De Mei</h2>
                    <p1>
BIOGRAFÍA
Nombre real: Mei-Ling Zhou, Edad: 31

Ocupación: Climatóloga, aventurera

Base de operaciones: Xi'an, China (anteriormente)

Afiliación: Overwatch (anteriormente)
</p1>
<p1>
 Frase Epica
 </p1>
<h4>
«Merece la pena luchar por nuestro mundo».
</h4>
<p1>
Mei es una científica que ha decidido convertir la protección de la naturaleza en su lucha personal.

Aunque muchos echaron la culpa del inexplicable incremento del fenómeno climático del planeta a la llegada de las nuevas tecnologías, el rápido crecimiento de la población ómnica y el drástico aumento en el consumo de recursos, la verdadera razón sigue siendo desconocida. Para encontrar una solución, Overwatch estableció una serie de observatorios ecológicos en ubicaciones remotas y de importancia crítica de todo el mundo.

Mei-Ling Zhou, que formaba parte de esta iniciativa plurianual, es una climatóloga sin par que ha introducido las innovaciones más vanguardistas en el campo de la manipulación climática. Estas innovaciones protegían zonas en riesgo tanto en Asia como en otros lugares. Mei estaba asignada a la estación de control del programa en el Observatorio: Antártida cuando ocurrió la desgracia: una catastrófica tormenta polar golpeó la instalación y la aisló del mundo exterior, por lo que los científicos quedaron incomunicados en el centro dañado. Cuando comenzaron a quedarse sin recursos, los científicos decidieron recurrir a la criopreservación en un último intento de sobrevivir hasta el rescate.

Pero ese rescate nunca llegó. No fue hasta años después que la cámara criogénica del equipo fue descubierta. Mei, todavía en hibernación, era la única superviviente. Al despertar, se dio cuenta de que el mundo en el que se encontraba había sufrido cambios considerables: Overwatch ya no existía, los problemas climáticos se habían agravado y no quedaba ningún observatorio ecológico activo. Todas aquellas pistas que habían descubierto se habían perdido.

Mei ha decidido continuar el trabajo por su cuenta. Equipada con una versión portátil de su tecnología de control climático, ahora viaja por todo el mundo esperando restablecer la red de trabajo ecológico e identificar las causas que amenazan el ecosistema del planeta.
                    </p1>
                </article>
            </section>
            <aside>
                <div class="personajes">
                    <div class="image"><img src="../img/mei.png" alt="mei"></div>
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
                <div class="social">
                    <div class="fb-follow" data-href="https://www.facebook.com/Instagg-914178962055965/" data-layout="button_count" data-size="large" data-show-faces="true"></div>
                    <a href="https://twitter.com/Soporte_Instagg" class="twitter-follow-button" data-size="large" data-show-count="false">Follow @Soporte_Instagg</a>
                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </footer>
        </div>
    </body>
</html>
