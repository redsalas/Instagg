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
                    <h2 class="title">Historia De Tracer</h2>
                    <p1>
BIOGRAFÍA

Nombre real: Hana Song, Edad: 19

Ocupación: Pro-gamer (anteriormente) y piloto de mecas

Base de operaciones: Busan, Corea del Sur

Afiliación: División Móvil de Mecas del Ejército coreano
</p1>
<p1>
 Frase Epica
 </p1>
<h4>
«Juego para ganar».
</h4>
<p1>
D.Va era una jugadora profesional que ahora aprovecha sus habilidades para pilotar un meca de última generación al servicio de la defensa de su tierra.

Hace veinte años, Corea del Sur fue atacada por una monstruosidad ómnica colosal que surgió de las profundidades del Mar del Este de China. La enorme y pesada creación provocó una catástrofe en las ciudades costeras antes de que la devolviesen a las profundidades. Como respuesta, el gobierno surcoreano desarrolló una unidad robótica blindada mecanizada, llamada MEKA, para proteger los entornos urbanos en futuros enfrentamientos con la amenaza ómnica.

Un patrón de ataques preocupante probó que los temores del gobierno estaban fundados. Cada pocos años, la monstruosidad surgía del mar para atacar a Corea del Sur y a sus vecinos. La criatura ómnica fue aprendiendo de los encuentros, y se fue adaptando con nuevas formas, armas y habilidades. Los incidentes acababan en un punto muerto, con la monstruosidad derrotada pero no destruida.

Gracias a su adaptación, la criatura acabó por afectar a las redes de control de los MEKA, lo que obligó al ejército a utilizar pilotos en los mecas. Debido a las dificultades para encontrar candidatos adecuados, el gobierno decidió recurrir a los jugadores profesionales, que contaban con los reflejos y los instintos necesarios para manejar el armamento avanzado de los mecas. Reclutaron a las mayores estrellas, incluida la flamante campeona mundial Hana Song, también conocida como "D.Va". Famosa por sus habilidades de élite, D.Va era una competidora voraz que jugaba para ganar a cualquier precio, y tenía una reputación bien ganada de no mostrar compasión por sus oponentes.

D.Va, que ve su nueva misión como un juego, carga sin miedo por el campo de batalla junto a su unidad MEKA, lista para defender su nación en cuanto haga falta. Hace poco ha comenzado a retransmitir sus operaciones de combate para sus dedicados fans, y su creciente comunidad de seguidores la ha transformado en un icono global.
                    </p1>
                </article>
            </section>
            <aside>
                <div class="personajes">
                    <div class="image"><img src="../img/dva3.png" alt="dva"></div>
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
