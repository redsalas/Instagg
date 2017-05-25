<?php
session_start();
?>
<!DOCTYPE html>
<html lang="e">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Campeones LoL</title>
    <script src="../js/prefix.js"></script>
    <link rel="stylesheet" href="../css/cuerpo.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/aside.css">
    <link rel="stylesheet" href="../css/mediaQuery.css">
    <link rel="stylesheet" href="../css/tablas.css">
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
<?php 
        //$json = file_get_contents("lore.json");
        $json = file_get_contents("https://global.api.pvp.net/api/lol/static-data/lan/v1.2/champion?champData=all&api_key=RGAPI-058a8994-2a08-4034-8c37-2be367358e4f");
        $array = json_decode($json, true);
        $campeones = array('Aatrox','Ahri','Akali','Alistar','Amumu','Anivia','Annie','Ashe','AurelionSol','Azir','Bard','Blitzcrank','Brand','Braum','Caitlyn','Camille','Cassiopeia','Chogath','Corki','Darius','Diana','DrMundo','Draven','Ekko','Elise','Evelynn','Ezreal','Fiddlesticks','Fiora','Fizz','Galio','Gangplank','Garen','Gnar','Gragas','Graves','Hecarim','Heimerdinger','Illaoi','Irelia','Ivern','Janna','JarvanIV','Jax','Jayce','Jhin','Jinx','Kalista','Karma','Karthus','Kassadin','Katarina','Kayle','Kennen','Khazix','Kindred','Kled','KogMaw','Leblanc','LeeSin','Leona','Lissandra','Lucian','Lulu','Lux','Malphite','Malzahar','Maokai','MasterYi','MissFortune','Mordekaiser','Morgana','Nami','Nasus','Nautilus','Nidalee','Nocturne','Nunu','Olaf','Orianna','Pantheon','Poppy','Quinn','Rammus','RekSai','Renekton','Rengar','Riven','Rumble','Ryze','Sejuani','Shaco','Shen','Shyvana','Singed','Sion','Sivir','Skarner','Sona','Soraka','Swain','Syndra','TahmKench','Taliyah','Talon','Taric','Teemo','Thresh','Tristana','Trundle','Tryndamere','TwistedFate','Twitch','Udyr','Urgot','Varus','Vayne','Veigar','Velkoz','Vi','Viktor','Vladimir','Volibear','Warwick','MonkeyKing','Xerath','XinZhao','Yasuo','Yorick','Zac','Zed','Ziggs','Zilean','Zyra');
        $totalcampeones = count($campeones);
    ?>
<div class="containerv2">
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
        <div class="selecamp">
            <section id="cajas">
              <div class="contenedor">
                <?php $i = 0; while ($i < $totalcampeones):
                  if($campeones[$i] == 'Fiddlesticks') {
                  $url = 'http://ddragon.leagueoflegends.com/cdn/7.2.1/img/champion/FiddleSticks.png';
                  } else { $url = "http://ddragon.leagueoflegends.com/cdn/7.2.1/img/champion/{$campeones[$i]}.png"; } ?>
                <div class="caja">
                    <p>
                    <a href="campeones-lol.php?campeon=<?php echo $campeones[$i]; ?>">
                    <img src="<?= $url ?>">
                    <h2 class="title"><?= $array['data'][$campeones[$i]]['name'] ?></h2>
                    <?= $array['data'][$campeones[$i]]['title'] ?>
                    </p>
                </div>
                <?php $i = $i+1; ?>
                <?php endwhile; ?>
              </div>
            </section>
        </div>
    </section>
    
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