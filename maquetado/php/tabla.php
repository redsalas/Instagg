<?php
session_start();
?>
<html lang="e">
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
    <section class="main">
    <table class="heroes">
    <h2 class="h2ov">Personajes OverWatch</h2>
    <tbody>
       <tr>
        <th><a href="tracer.php"><img src="../img/icon1.png" alt="tracer">Tracer</a></th>
        <th><a href="mei.php"><img src="../img/icon2.png" alt="mei">Mei</a></th>
        <th><a href="mccree.php"><img src="../img/icon3.png" alt="mc">Mccree</a></th>
        </tr>
        <tr>
        <th><a href="hanzo.php"><img src="../img/icon4.png" alt="hanzo">Hanzo</a></th>
        <th><a href="mercy.php"><img src="../img/icon5.png" alt="Mercy">Mercy</a></th>
        <th><a href="dva.php"><img src="../img/icon6.png" alt="Dva">Dva</a></th>
        </tr>
        <tr>
        <th><a href="widowmaker.php"><img src="../img/icon7.png" alt="widow">WidowMaker</a></th>
        <th><a href="symmetra.php"><img src="../img/icon8.png" alt="symmetra">Symmetra</a></th>
        <th><a href="phara.php"><img src="../img/icon9.png" alt="pharah">Pharah</a></th>
        </tr>
        <tr>
        <th><a href="reaper.php"><img src="../img/icon10.png" alt="reaper">Reaper</a></th>
        </tr>  
    </tbody>
   </table>
    <footer>
        <section class="links">
            <a href="#">Inicio</a>
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
