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
                    <h2 class="title">Historia De Pharah</h2>
                    <p1>
BIOGRAFÍA

Nombre real: Fareeha Amari, Edad: 32

Ocupación: Jefa de seguridad

Base de operaciones: Guiza, Egipto

Afiliación: Helix Security International
</p1>
<p1>
 Frase Epica
 </p1>
<h4>
«Protegeré a los inocentes».
</h4>
<p1>
Fareeha Amari lleva la llamada del deber en la sangre. Procede de un largo linaje de soldados condecorados y su mayor afán es servir con honor.

De niña, Fareeha soñaba con seguir los pasos de su madre y unirse a Overwatch, la organización global para mantener la paz. Se alistó en el ejército egipcio, donde su perseverancia y habilidad táctica la hicieron ascender hasta el rango de oficial. Era una líder valiente y se ganó la lealtad de todos los que estuvieron bajo su mando. Semejante historial bien le hubiera valido a Fareeha un puesto en las filas de Overwatch, pero antes de que se presentara la oportunidad, la organización fue disuelta.

Tras dejar el ejército con una mención de honor por sus servicios, le ofrecieron un empleo en Helix Security International: una empresa de seguridad privada contratada para defender unas instalaciones de investigación sobre inteligencia artificial situadas bajo la explanada de Guiza. Se decía que la base secreta era vital para la seguridad de la región y de varios países de todo el mundo. Fareeha aceptó encantada el puesto y fue entrenada para usar el traje de combate experimental Raptora Mark VI, especialmente diseñado para moverse con rapidez y que cuenta con una capacidad de ofensiva devastadora.

Ahora, bajo el nombre en clave “Pharah”, se encarga de la seguridad en la instalación de IA. Aunque lamenta la desaparición de Overwatch, todavía sueña con luchar por la justicia y marcar la diferencia a escala global.
                    </p1>
                </article>
            </section>
            <aside>
                <div class="personajes">
                    <div class="image"><img src="../img/pharah.png" alt="pharah"></div>
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
