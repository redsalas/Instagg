<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <link href='https://sites.google.com/site/scriptsbalcon/b/blJJbalconVidg.css' media='screen' rel='stylesheet' type='text/css'/>
    <title>InstaGG-Reproductor</title>
    <script src="../js/prefix.js"></script>
    <!-- <script src="../js/jquery-3.2.1.min.js"></script> -->
    <link rel="stylesheet" href="../css/cuerpo.css"/>
    <link rel="stylesheet" href="../css/header.css"/>
    <link rel="stylesheet" href="../css/main.css"/>
    <link rel="stylesheet" href="../css/footer.css"/>
    <link rel="stylesheet" href="../css/aside.css"/>
    <link rel="stylesheet" href="../css/mediaQuery.css"/>
    <link rel="stylesheet" href="../css/videos.css"/>
</head>
    <body>
        <div class="container">
            <header>
                <div class="logo">
                    <img src="../img/InstaGG.png" alt="InstaGG">
                    <a href="#">InstaGG</a>
                </div>
                <nav>
                    <a href="#">Inicio</a>
                    <a href="#">Overwatch</a>
                    <a href="#">League of Legends</a>
                    <a href="#">Contacto</a>
                    <a href="registro.html">Registro</a>
                </nav>
            </header>
            <section class="main">
              <?php $id = $_GET['id']; ?>
              <div id="player" idVideo=<?php echo $id; ?>></div>
              <script src="../js/load.js"></script>
            </section>
            <aside>
                <div class="info">
                    <div class="image"></div>
                </div>
                <div class="info">
                    <div class="image"></div>
                </div>
            </aside>
            <footer>
                <section class="links">
                    <a href="#">Inicio</a>
                    <a href="#">Overwatch</a>
                    <a href="#">League of Legends</a>
                    <a href="#">Contacto</a>
                    <a href="#">Registro</a>
                </section>
                <div class="social">
                    <a class="fb" href="#"></a>
                    <a class="tw" href="#"></a>
                </div>
            </footer>
        </div>
    </body>
</html>
