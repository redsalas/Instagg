<?php
session_start();
if(!isset($_GET['nickname'])){
  header("Location:index.php");
}
  include("config.php");
  $url = mysqli_connect($host,$user,$pass) or die(mysqli_error());
  mysqli_select_db($url,$sldb);
  $ssql = "SELECT * FROM usuarios WHERE nickname='".$_GET['nickname']."'";
  $result = mysqli_query($url,$ssql);
  if($result){
    if($result->num_rows != 0){
      $dato = $result->fetch_array(MYSQLI_ASSOC);
      $id = $dato['id'];
      $avatar = $dato['avatar'];
      $nickname = $dato['nickname'];
      $email = $dato['email'];
      $tipo = $dato['tipo'];
      $pais = $dato['pais'];
      $acerca = $dato['acerca'];
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>Perfil de Usuario</title>
    <script src="../js/prefix.js"></script>
    <link rel="stylesheet" href="../css/cuerpo.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/aside.css">
    <link rel="stylesheet" href="../css/mediaQuery.css">
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
    <section class="mainperfil">
        <!--Aquí va el perfil del usuario-->
        <div class="infoperfil">
            <div class="fotousuario">
            	<p>
            	<a href="editarperfil.php">
            	<img src="<?php echo $avatar; ?>" alt="UserPicture" style="width:225px;height:225px; border-radius: 50%;">
            	</a>
            	</p>
            </div>
            <div class="infousuario">
                <article>
                    <h2 class="title"><?php echo $nickname; ?></h2>
                    <p>
                        <?php echo $tipo.' de la página'; ?>
                    </p>
                </article>
            </div>
        </div>
        <div class="datosperfil">
            <article>
                <h2 class="title">Datos de Perfil</h2>
                <h3>Email</h3>
                <p><?php echo $email; ?></p>
                <h3>Pais</h3>
                <p><?php echo $pais; ?></p>
                <h3>Plataformas Favoritas</h3>
                <?php
                $result = mysqli_query($url,"SELECT plataforma FROM plataformas WHERE userid=".$id);
                if($result){
                  while($dato = $result->fetch_array(MYSQLI_ASSOC)){ ?>
                    <p><?php echo $dato['plataforma']; ?></p>
                  <?php }
                }
                ?>
                <h3>Acerca de mí...</h3>
                <p><?php echo $acerca; ?></p>
            </article>

        </div>
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
