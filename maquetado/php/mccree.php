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
                    <h2 class="title">Historia De Tracer</h2>
                    <p1>
BIOGRAFÍA
Nombre real: Jesse McCree, Edad: 37

Ocupación: Cazarrecompensas

Base de operaciones: Santa Fe, Nuevo México, EE. UU.

Afiliación: Overwatch (anteriormente)
</p1>
<p1>
 Frase Epica
 </p1>
<h4>
«La justicia no se va a impartir sola».
</h4>
<p1>
Armado con su revólver pacificador, el forajido Jesse McCree imparte justicia a su manera.

McCree era bastante conocido como miembro de la banda criminal Deadlock, que traficaba con armas y materiales militares en el suroeste de los EE. UU. cuando sus socios y él fueron detenidos en una operación de Overwatch. Debido a su habilidad e ingenio, le permitieron elegir entre pudrirse en una prisión de máxima seguridad o unirse a Blackwatch, la división de operaciones encubiertas de Overwatch. Escogió lo segundo.

A pesar de las dudas iniciales, acabó por creer que podía purgar los pecados de su pasado corrigiendo las injusticias del mundo. McCree apreciaba la flexibilidad de Blackwatch, ajena a la burocracia y las formalidades. Sin embargo, al ir desapareciendo la influencia de Overwatch, ciertos elementos de Blackwatch intentaron acabar con la organización y usarla para sus propios fines. McCree, que no quería tener relación con la lucha interna, partió y desapareció entre las sombras.

Resurgió años después como revólver a sueldo. Aunque todo tipo de grupos buscan contar con sus talentos, McCree solo lucha por causas que considera justas.
                    </p1>
                </article>
            </section>
            <aside>
                <div class="personajes">
                    <div class="image"><img src="../img/mccree.png" alt="mccree"></div>
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