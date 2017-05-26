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
                    <h2 class="title">Historia De Mercy</h2>
                    <p1>
        BIOGRAFÍA

Nombre real: Angela Ziegler, Edad: 37

Ocupación: Médica de campo, especialista en urgencias

Base de operaciones: Zürich, Suiza

Afiliación: Overwatch (anteriormente)
</p1>
<p1>
 Frase Epica
 </p1>
<h4>
«Los héroes nunca mueren».
</h4>
<p1>
Además de una sanadora sin par y un auténtico ángel de la guarda para sus pacientes, la doctora Angela Ziegler es una científica brillante y una defensora acérrima de la paz.

Ziegler llegó a ser la jefa de cirugía de un importante hospital suizo antes de encabezar grandes avances en el campo de la nanobiología aplicada que mejoraron de forma radical los tratamientos de enfermedades y heridas mortales. Fue su pericia en este ámbito lo que llamó la atención de Overwatch.

Ziegler había perdido a sus padres en la guerra, así que era contraria a adoptar el enfoque militar de la organización para mantener la paz. Finalmente, llegó a la conclusión de que Overwatch le ofrecía la oportunidad de salvar vidas a mayor escala. Como jefa de investigación médica de Overwatch, Angela procuró usar su trabajo para curar en situaciones de crisis en el frente. El resultado fue la armadura de respuesta rápida Valkyrie, que ella misma pilotó en varias misiones de Overwatch.

A pesar de sus contribuciones a Overwatch, solía estar en desacuerdo con sus superiores y con los objetivos dominantes de la organización. Cuando se desmanteló Overwatch, Ziegler se dedicó a ayudar a las víctimas de la guerra.

Aunque pasa gran parte de su tiempo cuidando de los heridos y de los desvalidos en zonas en conflicto por todo el mundo, siempre se puede contar con la doctora Ziegler y con su armadura Valkyrie allí donde los inocentes estén en peligro.
                    </p1>
                </article>
            </section>
            <aside>
                <div class="personajes">
                    <div class="image"><img src="../img/mercy1.png" alt="mercy"></div>
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
