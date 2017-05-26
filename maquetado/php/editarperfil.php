<?php
session_start();
if($_SESSION['start'] != 'si'){
  header("Location:../index.php");
}
  include("config.php");
  $url = mysqli_connect($host,$user,$pass) or die(mysqli_error());
  mysqli_select_db($url,$sldb);
  $ssql = "SELECT * FROM usuarios WHERE nickname='".$_SESSION['nickname']."'";
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
      $nombre = $dato['nombre'];
      $apellido = $dato['apellido'];
    }
    if ($tipo == 'Admin') {
      $tipo = "Administrador de la página";
    }
  }
?>
<!DOCTYPE html>
<html lang="e">
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
    <link rel="stylesheet" href="../css/formularioModificarPerfil.css">
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
                      <a href="<?php echo 'perfil.php?nickname='.$_SESSION['nickname']; ?>"><?php echo "<img src=".$_SESSION['avatar']." width=15 height=15/> ".$_SESSION['nickname']; ?></a>
                    <?php }else{ ?>
                      <a href="#">Log In</a>
                    <?php } ?>
                    <a href="registro.php">Registro</a>
                </nav>
    </header>
    <section class="mainperfil">
        <!--Aquí va el perfil del usuario-->
        <div class="containerep">

              <form enctype="multipart/form-data" method="post" action="editarExitoso.php" onsubmit="return validaCheckbox(this)">
                <ul class="flex-outer">
                  <li>
                    <label for="first-name">Nombre</label>
                    <input type="text" id="first-name" name="first-name" placeholder="<?php echo $nombre; ?>" value="<?php echo $nombre; ?>">
                  </li>
                  <li>
                    <label for="last-name">Apellido</label>
                    <input type="text" name="last-name" id="last-name" value="<?php echo $apellido; ?>" placeholder="<?php echo $apellido; ?>">
                  </li>
                  <li>
                    <label for="nickname">Nickname</label>
                    <input value="<?php echo $_SESSION['nickname']; ?>" type="text" id="nickname" placeholder="<?php echo $_SESSION['nickname']; ?>" disabled>
                  </li>
                  <li>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="<?php echo $email; ?>" onblur="validarEmail()">
                  </li>
                  <li>
                    <label for="country">Nacionalidad</label>
                    <input type="text" id="country" name="nacion" value="<?php echo $pais; ?>" placeholder="<?php echo $pais; ?>">
                  </li>
                  <li>
                    <label for="message">Sobre tí</label>
                    <textarea rows="6" id="message" value="<?php echo $acerca; ?>" name="acerca" placeholder="<?php echo $acerca; ?>"></textarea>
                  </li>
                  <li>
                    <p>Plataformas Favoritas</p>
                    <ul class="flex-inner">
                      <li>
                        <input type="checkbox" id="pc" name="plataforma[]" value="PC"/>
                        <label for="pc">PC</label>
                      </li>
                      <li>
                        <input type="checkbox" id="ps" name="plataforma[]" value="PlayStation"/>
                        <label for="ps">PlayStation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="xbox" name="plataforma[]" value="Xbox"/>
                        <label for="xbox">Xbox</label>
                      </li>
                      <li>
                        <input type="checkbox" id="nintendo" name="plataforma[]" value="Nintendo"/>
                        <label for="nintendo">Nintendo</label>
                      </li>
                      <li>
                        <input type="checkbox" id="otro" name="plataforma[]" value="Otro"/>
                        <label for="otro">Otro</label>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <button type="submit">Aceptar</button>
                  </li>
                </ul>
              </form>

        </div>

    </section>
    <aside>
        <div class="infoperfil">
            <div class="fotousuario">
                <img src="<?php echo $avatar; ?>" alt="UserPicture" style="width:225px;height:225px; border-radius: 50%;">
            </div>
            <div class="infousuario">
                <article>
                    <h2 class="title"><?php echo $_SESSION['nickname']; ?></h2>
                    <p><?php echo $tipo; ?></p>
                </article>
            </div>
        </div>
    </aside>
    <footer>
        <section class="links">
            <a href="#">Inicio</a>
                    <a href="tabla.php">Overwatch</a>
                    <a href="seleccion-lol.php">League of Legends</a>
                    <a href="tabla-usuarios.php">Contacto</a>
                    <?php if($_SESSION['start'] == 'si') { ?>
                      <a href="<?php echo 'perfil.php?nickname='.$_SESSION['nickname']; ?>"><?php echo "<img src=".$_SESSION['avatar']." width=15 height=15/> ".$_SESSION['nickname']; ?></a>
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
<script type="text/javascript" src="../js/verificarModificarPerfil.js"></script>
</body>
</html>