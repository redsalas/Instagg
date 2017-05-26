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

Nombre real: Hanzo Shimada, Edad: 38

Ocupación: Mercenario, asesino

Base de operaciones: Hanamura, Japón (anteriormente)

Afiliación: Clan Shimada
</p1>
<p1>
 Frase Epica
 </p1>
<h4>
«Hay honor en cada muerte, y el honor lleva a la redención».
</h4>
<p1>
Hanzo Shimada no deja de poner a prueba sus habilidades como arquero y asesino para convertirse en un guerrero sin par.

El linaje de la familia Shimada se remonta a varios siglos: un clan de asesinos cuyo poder creció a lo largo de los años, lo que les permitió levantar un inmenso imperio del crimen cuya principal fuente de ingresos era el tráfico de armas y substancias ilegales. Al ser el hijo mayor del líder de la familia, Hanzo debía suceder a su padre y gobernar el imperio Shimada. Desde su más tierna infancia fue entrenado para cumplir con esa responsabilidad y demostró tener aptitudes naturales para el liderazgo, así como un profundo entendimiento sobre estrategia y tácticas. También sobresalía en áreas más prácticas: era un verdadero prodigio en artes marciales, esgrima y tiro con arco.

Al morir su padre, los ancianos del clan ordenaron a Hanzo que hiciera entrar en razón a su obstinado hermano pequeño para que él también ayudara a controlar el Imperio Shimada. Cuando su hermano se negó, Hanzo se vio obligado a matarlo. Este acto le rompió el corazón e hizo que renegara del legado de su padre: abandonó el clan y todo aquello por lo que tanto había luchado.
Ahora Hanzo viaja por el mundo perfeccionando sus habilidades como guerrero, a la vez que intenta restaurar su honor y conseguir que los fantasmas del pasado descansen en paz.
                    </p1>
                </article>
            </section>
            <aside>
                <div class="personajes">
                    <div class="image"><img src="../img/hanzo.png" alt="hanzo"></div>
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
