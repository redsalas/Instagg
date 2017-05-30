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
                    <h2 class="title">Historia De WidowMaker</h2>
                    <p1>
BIOGRAFÍA

Nombre real: Amélie Lacroix, Edad: 33

Ocupación: Asesina

Base de operaciones: Annecy, Francia

Afiliación: Talon
</p1>
<p1>
 Frase Epica
 </p1>
<h4>
«Una bala, un muerto».
</h4>
<p1>
Widowmaker es la asesina perfecta: una depredadora paciente, eficiente e inmisericorde que no muestra ni emoción ni arrepentimiento.

Se cree que Widowmaker, en su vida anterior, estuvo casada con Gérard Lacroix, un agente de Overwatch que dirigía las operaciones contra la organización terrorista conocida como Talon. Después de varios intentos infructuosos de asesinar a Gérard, Talon centró su atención en su mujer, Amélie. Los operativos de Talon la secuestraron y la sometieron a un intenso programa de condicionamiento neural. Doblegaron su voluntad, reprimieron su personalidad y la convirtieron en una agente encubierta. Los efectivos de Overwatch acabaron por encontrarla, aparentemente en buen estado de salud, y Amélie volvió a su vida normal.

Dos semanas más tarde, mató a Gérard mientras este dormía.

Habiendo cumplido su misión, Amélie volvió a Talon, donde completaron el proceso para convertirla en un arma viviente. Recibió un entrenamiento exhaustivo en el arte del subterfugio y su fisiología se alteró para que su corazón latiera de forma mucho más lenta, lo que volvió su piel fría y azulada y redujo su capacidad para sentir emociones humanas. Amélie dejó de existir.
Ahora, Widowmaker es la asesina más efectiva de Talon y apenas siente nada que no sea la satisfacción de un trabajo bien hecho.
                    </p1>
                </article>
            </section>
            <aside>
                <div class="personajes">
                    <div class="image"><img src="../img/widowmaker.png" alt="widowmaker"></div>
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
