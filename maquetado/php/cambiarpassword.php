<?php 

$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$idusuario = $_POST['idusuario'];
$token = $_POST['token'];

if( $password1 != "" && $password2 != "" && $idusuario != "" && $token != "" ){
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
    <div class="container" role="main">
      <div class="col-md-2"></div>
      <div class="col-md-8">
<?php

	include("config.php");
	$conexion = mysqli_connect('localhost', 'instaggx_admin', 'instagg123');
   	mysqli_select_db($conexion,'instaggx_instaggDB');
   	
	$sql = " SELECT * FROM tblreseteopass WHERE token = '".$token."'";

	$resultado = mysqli_query($conexion,$sql);
	if( $resultado->num_rows > 0 ){
		$usuario = $resultado->fetch_assoc();
		if($usuario['idusuario'] === $idusuario){
			if( $password1 === $password2 ){
				$passmd = sha1(md5($password1));
				$sql = "UPDATE usuarios SET pass='".$passmd."' WHERE id =".$usuario['idusuario'];
				$resultado = mysqli_query($conexion,$sql);
				if($resultado){
					$sql = "DELETE FROM tblreseteopass WHERE token = '".$token."'";
					$resultado = mysqli_query($conexion,$sql );
				?>
					header("Location:login.php?res=si");
				<?php
				}
				else{
				?>
					header("Location:login.php?res=no");
				<?php
				}
			}
			else{
			?>
			<p> Las contrasenas no coinciden </p>
			<?php
			}

		}
		else{
?>
header("Location:login.php?res=token");
<?php
		}	
	}
	else{
?>
header("Location:login.php?res=token");
<?php
	}
	?>
	</div>
<div class="col-md-2"></div>
	</div> <!-- /container -->
<script src="js/jquery-1.11.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php
}
else{
	header('Location:login.php');
}
?>