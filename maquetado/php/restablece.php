<?php 
	$token = $_GET['token'];
	$idusuario = $_GET['idusuario'];
	
	include("config.php");
	$conexion = mysqli_connect('localhost', 'instaggx_admin', 'instagg123');
   	mysqli_select_db($conexion,'instaggx_instaggDB');

	$sql = "SELECT * FROM tblreseteopass WHERE token = '".$token."'";
	$resultado = mysqli_query($conexion,$sql);
	
	if( $resultado->num_rows > 0 ){
		$usuario = $resultado->fetch_assoc();

		if($usuario['idusuario'] == $idusuario ){
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title> Restablecer contrasena </title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
    <div class="container">
    <header>
       <div class="logo">
           <img src="../img/InstaGG.png" alt="InstaGG">
           <a href="#">InstaGG</a>
       </div>     
    </header>
    <section class="main">
        <form class="formulario-registro" action="cambiarpassword.php" method="post">
        <ul class="registro-datos">
             <li>  
                <label for="password"> Nueva contrasena </label>
                <input type="password" class="form-control" name="password1" required>
             </li>
             <li>   
                <label for="password2"> Confirmar contrasena </label>
                <input type="password" class="form-control" name="password2" required>
             </li>
             <li>
                <input type="hidden" name="token" value="<?php echo $token ?>">
                <input type="hidden" name="idusuario" value="<?php echo $idusuario ?>">
             </li>
             <li>
                <button type="submit" class="btn btn-primary">Recuperar contrasena</button>
             </li>
        </ul>
        </form>  
    </section>
    </div> <!-- /container -->

    <script src="js/jquery-1.11.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php
		}
		else{
			header('Location:../index.php');
		}
	}
	else{
		header('Location:../index.php');
	}
?>