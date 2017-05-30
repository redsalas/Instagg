<?php
	include("config.php");
	function generarLinkTemporal($idusuario, $username){

		$cadena = $idusuario.$username.rand(1,9999999).date('Y-m-d');
		$token = sha1($cadena);
		
		$conexion = mysqli_connect('localhost', 'instaggx_admin', 'instagg123');
   		mysqli_select_db($conexion,'instaggx_instaggDB');

		$sql = "INSERT INTO tblreseteopass (idusuario, nickname, token, creado) VALUES(".$idusuario.",'".$username."','".$token."',NOW());";

		$resultado = mysqli_query($conexion,$sql);
		if($resultado){
			$enlace = $_SERVER["SERVER_NAME"].'/php/restablece.php?idusuario='.$idusuario.'&token='.$token;
			return $enlace;
		}
		else
			return FALSE;
	}

	function enviarEmail( $email, $link ){

		$mensaje = '<html>
		<head>
 			<title>Restablece tu contrasena</title>
		</head>
		<body>
 			<p>Hemos recibido una peticion para restablecer la contrasena de tu cuenta.</p>
 			<p>Si hiciste esta peticion, haz clic en el siguiente enlace, si no hiciste esta peticion puedes ignorar este correo.</p>
 			<p>
 				<strong>Enlace para restablecer tu contrasena</strong><br>
 				<a href="'.$link.'"> Restablecer contrasena </a>
 			</p>
		</body>
		</html>';

		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$cabeceras .= 'From: Codedrinks <soporte@instagg.x10.mx>' . "\r\n";
		
		mail($email, "Recuperar contrasena", $mensaje, $cabeceras);
	}
	
	$email = $_POST['email'];
	$respuesta = new stdClass();

	if( $email != "" ){   
   		$conexion = mysqli_connect('localhost', 'instaggx_admin', 'instagg123');
   		mysqli_select_db($conexion,'instaggx_instaggDB');

   		$sql = "SELECT * FROM usuarios WHERE email='".$email."'";
   		$resultado = mysqli_query($conexion,$sql);  		   		
   		
   		if($resultado->num_rows != 0){
      		$usuario = $resultado->fetch_assoc();
			$linkTemporal = generarLinkTemporal( $usuario['id'], $usuario['nickname'] );
      		if($linkTemporal){
        		enviarEmail( $email, $linkTemporal );
        		//$respuesta->mensaje = '<div class="alert alert-info"> Un correo ha sido enviado a su cuenta de email con las instrucciones para restablecer la contrasena </div>';
        		header("Location:login.php?res=true");
      		}
   		}
   		else
   			//$respuesta->mensaje = '<div class="alert alert-warning"> No existe una cuenta asociada a ese correo. </div>';
   			header("Location:login.php?res=false");
	}
	else
   		//$respuesta->mensaje= "Debes introducir el email de la cuenta";
   		header("Location:login.php?res=false");
 	echo json_encode( $respuesta );