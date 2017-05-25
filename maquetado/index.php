<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>InstaGG</title>
    <script src="js/prefix.js"></script>
    <link rel="stylesheet" href="css/cuerpo.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/aside.css">
    <link rel="stylesheet" href="css/mediaQuery.css">
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
                    <img src="img/InstaGG.png" alt="InstaGG">
                    <a href="#">InstaGG</a>
                </div>
                <nav>
                    <a href="#">Inicio</a>
                    <a href="html/tabla.html">Overwatch</a>
                    <a href="php/seleccion-lol.php">League of Legends</a>
                    <a href="php/tabla-usuarios.php">Contacto</a>
                    <?php if($_SESSION['start'] == 'si') { ?>
                      <a href="#"><?php echo "<img src=".$_SESSION['avatar']." width=15 height=15/> ".$_SESSION['nickname']; ?></a>
                    <?php }else{ ?>
                      <a href="#">Log In</a>
                    <?php } ?>
                    <a href="html/registro.html">Registro</a>
                </nav>
            </header>
            <section class="main">
                <article>
                    <h2 class="title">InstaGG! Nueva Network Gamer</h2>
                    <p>
                        InstaGG es una nueva network hecha por y para gamers, aqui podras compartir tus
                        jugadas y presumir con los amigos.
                    </p>
                </article>
                <article>
                    <h2 class="title">Explicacion final de Evangelion</h2>
                    <p>
                        Neon Genesis Evangelion es un anime creado por Hideaki Anno en 1995 y considerado
                        como una de las mejores obras dentro del género mecha, y por qué no, del anime en general. A
                        diferencia de otros productos de la industria, Evangelion no está basado en un manga sino que
                        éste fue creado a priori con la intención de promocionar la serie. De hecho, la publicación
                        del manga continuó hasta el 2013, ya totalmente alejado de la idea original.
                    </p>
                </article>
            </section>
            <aside>
                <div class="info">
                    <a class="twitter-timeline" data-width="650" data-height="300" data-theme="dark" data-link-color="#E81C4F" href="https://twitter.com/Soporte_Instagg">Tweets by Instagg</a>
                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="info">
                    <div class="fb-page" data-href="https://www.facebook.com/onlyekko" data-tabs="timeline" data-width="440" data-height="300" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/onlyekko" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/onlyekko">Instagg</a></blockquote></div>
                </div>
            </aside>
            <footer>
                <section class="links">
                    <a href="#">Inicio</a>
                    <a href="html/tabla.html">Overwatch</a>
                    <a href="php/campeones-lol.php">League of Legends</a>
                    <a href="php/tabla-usuarios.php">Contacto</a>
                    <a href="html/registro.html">Registro</a>
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
