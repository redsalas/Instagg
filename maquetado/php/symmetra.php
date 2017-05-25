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
                    <h2 class="title">Historia De Symmetra</h2>
                    <p1>
BIOGRAFÍA

Nombre real: Satya Vaswani, Edad: 28

Ocupación: Arquitécnica

Base de operaciones: Utopaea, India

Afiliación: Vishkar Corporation
</p1>
<p1>
 Frase Epica
 </p1>
<h4>
«El verdadero enemigo de la humanidad es el desorden».
</h4>
<p1>
Symmetra modela la realidad, literalmente. Mediante sus creaciones de luz sólida, es capaz de manipular el mundo de acuerdo con su visión de una sociedad perfecta.

Tras la Crisis Ómnica, la corporación Vishkar, del sur de la India, inició la tarea titánica de crear ciudades nuevas y autosuficientes que albergaran a la población desplazada de la nación. Utopaea, una de estas ciudades, fue creada utilizando una tecnología rompedora de luz sólida que permitió a sus arquitécnicos construir las calles, infraestructuras y domicilios de la urbe en un abrir y cerrar de ojos.

Cuando la identificaron como una de las pocas personas capaces de convertirse en una arquitécnica de luz, la joven Satya Vaswani abandonó una vida de pobreza extrema y se incorporó a la Academia de Arquitectura de Vishkar. Jamás volvería a su hogar. Satya, aislada y solitaria en su nueva vida, se entregó a su educación y a la instrucción. Dominó la aplicación de la tecnología rápidamente y se convirtió en una de las mejores estudiantes de su clase. Veía la manipulación de la luz sólida de una forma distinta a sus compañeros. Ellos ideaban construcciones mecánicas y utilitarias; ella hilaba sus creaciones con los movimientos del baile tradicional de su tierra.

Aunque Satya era una de las arquitectécnicas más ilustres de Utopaea, la corporación Vishkar veía aún más potencial en sus habilidades. Le asignaron el nombre en clave "Symmetra" y empezaron a enviarla en misiones clandestinas por todo el mundo para proteger sus intereses corporativos y expandir su influencia en otros países.

Symmetra cree que sus actos contribuyen a un bien mayor para la sociedad, pero a veces se pregunta si el control y el orden que tanto desea son de verdad lo mejor para la humanidad.
                    </p1>
                </article>
            </section>
            <aside>
                <div class="personajes">
                    <div class="image"><img src="../img/symmetra.png" alt="symmetra"></div>
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