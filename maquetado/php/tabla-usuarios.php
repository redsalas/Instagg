<?php
session_start();
if($_SESSION['tipo'] != 'Admin'){
  header("Location:login.php?Admin=false");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>InstaGG-Usuarios</title>
    <script src="../js/prefix.js"></script>
    <link rel="stylesheet" href="../css/cuerpo.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/aside.css">
    <link rel="stylesheet" href="../css/mediaQuery.css">
    <link rel="stylesheet" href="../css/tablas.css">
    <?php
        include("config.php");
        $url = mysqli_connect($host,$user,$pass) or die(mysqli_error());
        mysqli_select_db($url,$sldb);
        $ssql = "SELECT * FROM usuarios";
    ?>
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
    <section class="main">
    <form class="formulario-registro" method="post" action="banear.php">
        <table class="usuarios">
            <thead>
            <tr>
                <th scope="col">Avatar</th>
                <th scope="col">Nickname</th>
                <th scope="col">Email</th>
                <th scope="col">Rol</th>
                <th scope="col">País</th>
                <th scope="col">Estado</th>
                <th scope="col">Banear</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($url,$ssql);
                if($result){
                  while ($dato = $result->fetch_array(MYSQLI_ASSOC)):
                ?>
                    <tr>
                        <td><img src="<?php echo $dato['avatar']; ?>" width="20" height="20"/></td>
                        <td><?php echo $dato['nickname']; ?></td>
                        <td><?php echo $dato['email']; ?></td>
                        <td><?php echo $dato['tipo']; ?></td>
                        <td><?php echo $dato['pais']; ?></td>
                        <td><?php echo $dato['estado']; ?></td>
                        <td><input type="radio" value=<?php echo $dato['nickname']; ?> name="Banear" /></td>
                    </tr>
                <?php endwhile; } ?>
            </tbody>
        </table>
        <button type="submit">Banear</button>
    </form>
    </section>
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
