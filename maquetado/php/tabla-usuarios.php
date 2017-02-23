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
        $json = file_get_contents("../json/usuarios.json");
        $data = json_decode($json,true);
    ?>
</head>
<body>
<div class="container">
    <header>
        <div class="logo">
            <img src="../img/InstaGG.png" alt="InstaGG">
            <a href="../html/index.html">InstaGG</a>
        </div>
        <nav>
            <a href="../html/index.html">Inicio</a>
            <a href="#">Overwatch</a>
            <a href="#">League of Legends</a>
            <a href="#">Contacto</a>
            <a href="../html/registro.html">Registro</a> 7
        </nav>
    </header>
    <section class="main">
        <table class="usuarios">
            <thead>
            <tr>
                <th scope="col">Avatar</th>
                <th scope="col">Nickname</th>
                <th scope="col">Email</th>
                <th scope="col">Rol</th>
                <th scope="col">País</th>
            </tr>
            </thead>
            <tbody>
                <?php $i = 0; while ($i <= 100): ?>
                    <tr>
                        <td><?= $data['entries'][$i]['playerOrTeamId'] ?></td>
                        <td><?= $data['entries'][$i]['playerOrTeamName'] ?></td>
                        <td><?= $data['entries'][$i]['division'] ?></td>
                        <td><?= $data['entries'][$i]['leaguePoints'] ?></td>
                        <td><?= $data['entries'][$i]['wins'] ?></td>
                    </tr>
                    <?php $i = $i+1; ?>
                <?php endwhile; ?>
            </tbody>
        </table>
    </section>
    <footer>
        <section class="links">
            <a href="../html/index.html">Inicio</a>
            <a href="#">Overwatch</a>
            <a href="#">League of Legends</a>
            <a href="#">Contacto</a>
            <a href="../html/registro.html">Registro</a>
        </section>
        <div class="social">
            <a class="fb" href="#"></a>
            <a class="tw" href="#"></a>
        </div>
    </footer>
</div>
</body>
</html>