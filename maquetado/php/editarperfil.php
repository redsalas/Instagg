<?php
session_start();
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
                      <a href="#"><?php echo "<img src=".$_SESSION['avatar']." width=15 height=15/> ".$_SESSION['nickname']; ?></a>
                    <?php }else{ ?>
                      <a href="#">Log In</a>
                    <?php } ?>
                    <a href="registro.php">Registro</a>
                </nav>
    </header>
    <section class="mainperfil">
        <!--Aquí va el perfil del usuario-->
        <div class="containerep">
        
              <form onsubmit="return validaCheckbox(this)">
                <ul class="flex-outer">
                  <li>
                    <label for="first-name">Nombre</label>
                    <input type="text" id="first-name" placeholder="Daniel">
                  </li>
                  <li>
                    <label for="last-name">Apellido</label>
                    <input type="text" id="last-name" placeholder="Zapata">
                  </li>
                  <li>
                    <label for="nickname">Nickname</label>
                    <input type="text" id="nickname" placeholder="xDannyxmx">
                  </li>
                  <li>
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Animex_004@hotmail.com" onblur="validarEmail()">
                  </li>
                  <li>
                    <label for="country">Nacionalidad</label>
                    <input type="text" id="country" placeholder="México">
                  </li>
                  <li>
                    <label for="message">Sobre tí</label>
                    <textarea rows="6" id="message" placeholder="Acerca de mí..."></textarea>
                  </li>
                  <li>
                    <p>Plataformas Favoritas</p>
                    <ul class="flex-inner">
                      <li>
                        <input type="checkbox" id="pc">
                        <label for="pc">PC</label>
                      </li>
                      <li>
                        <input type="checkbox" id="ps">
                        <label for="ps">PlayStation</label>
                      </li>
                      <li>
                        <input type="checkbox" id="xbox">
                        <label for="xbox">Xbox</label>
                      </li>
                      <li>
                        <input type="checkbox" id="nintendo">
                        <label for="nintendo">Nintendo</label>
                      </li>
                      <li>
                        <input type="checkbox" id="other">
                        <label for="other">Otro</label>
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
                <img src="../img/pruebauser.png" alt="UserPicture" style="width:225px;height:225px; border-radius: 50%;">
            </div>
            <div class="infousuario">
                <article>
                    <h2 class="title">xDannyxmx</h2>
                    <p>
                        Administrador de la página
                    </p>
                    <button type="submit">Cambiar foto de perfil</button>
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
<script type="text/javascript" src="../js/verificarModificarPerfil.js"></script>
</body>
</html>