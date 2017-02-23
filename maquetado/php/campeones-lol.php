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
    <link rel="stylesheet" href="../css/tablas.css">
</head>
<body>
<?php 
        //$json = file_get_contents("lore.json");
        $json = file_get_contents("https://global.api.pvp.net/api/lol/static-data/lan/v1.2/champion?champData=all&api_key=RGAPI-058a8994-2a08-4034-8c37-2be367358e4f");
        $array = json_decode($json, true);
        $campeones = array('Aatrox','Ahri','Akali','Alistar','Amumu','Anivia','Annie','Ashe','AurelionSol','Azir','Bard','Blitzcrank','Brand','Braum','Caitlyn','Camille','Cassiopeia','Chogath','Corki','Darius','Diana','DrMundo','Draven','Ekko','Elise','Evelynn','Ezreal','Fiddlesticks','Fiora','Fizz','Galio','Gangplank','Garen','Gnar','Gragas','Graves','Hecarim','Heimerdinger','Illaoi','Irelia','Ivern','Janna','JarvanIV','Jax','Jayce','Jhin','Jinx','Kalista','Karma','Karthus','Kassadin','Katarina','Kayle','Kennen','Khazix','Kindred','Kled','KogMaw','Leblanc','LeeSin','Leona','Lissandra','Lucian','Lulu','Lux','Malphite','Malzahar','Maokai','MasterYi','MissFortune','Mordekaiser','Morgana','Nami','Nasus','Nautilus','Nidalee','Nocturne','Nunu','Olaf','Orianna','Pantheon','Poppy','Quinn','Rammus','RekSai','Renekton','Rengar','Riven','Rumble','Ryze','Sejuani','Shaco','Shen','Shyvana','Singed','Sion','Sivir','Skarner','Sona','Soraka','Swain','Syndra','TahmKench','Taliyah','Talon','Taric','Teemo','Thresh','Tristana','Trundle','Tryndamere','TwistedFate','Twitch','Udyr','Urgot','Varus','Vayne','Veigar','Velkoz','Vi','Viktor','Vladimir','Volibear','Warwick','MonkeyKing','Xerath','XinZhao','Yasuo','Yorick','Zac','Zed','Ziggs','Zilean','Zyra');
        $totalcampeones = count($campeones);
    ?>
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
            <a href="#">Registro</a>
        </nav>
    </header>
    <section class="mainperfil">
    <?php $i = 0; while ($i < $totalcampeones): ?>
    <?php $url = "http://ddragon.leagueoflegends.com/cdn/7.2.1/img/champion/{$campeones[$i]}.png" ?>
        <div class="champdata">
            <article>
                <img src="<?= $url ?>">
                <h2 class="title"><?= $array['data'][$campeones[$i]]['name'] ?></h2>
                <P><?= $array['data'][$campeones[$i]]['title'] ?></P>
            </article>
        </div>
        <div class="champlore">
            <article>
                <p><?= $array['data'][$campeones[$i]]['lore'] ?></p>
            </article>
        </div>
    <?php $i = $i+1; ?>
    <?php endwhile; ?>
    </section>
    <!-- <aside>
        <table style="width:240px">
            <tbody>
                <?php $j = 0; while ($j < $totalcampeones): ?>
                <tr>
                    <?php $i = 0; while ($i < 4): ?>
                        <?php $url = "http://ddragon.leagueoflegends.com/cdn/7.2.1/img/champion/{$campeones[$j]}.png" ?>
                            <td><img src="<?= $url ?>" height="50" width="50"></td>
                        <?php $i = $i+1; ?>
                        <?php $j = $j+1; ?>
                        <?php if($j == $totalcampeones) {break;} ?>
                    <?php endwhile; ?>
                <?php endwhile; ?>
            </tbody>
        </table>
    </aside> -->
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