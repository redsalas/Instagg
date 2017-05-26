<?php
	$nickname=$_POST['Banear'];
	include("config.php");
        $url = mysqli_connect($host,$user,$pass) or die(mysqli_error());
        mysqli_select_db($url,$sldb);
	$sql = "UPDATE usuarios SET estado = 'BANEADO' WHERE nickname = '".$nickname."'";
	$result = mysqli_query($url,$sql);
	if($result)
		header('Location: tabla-usuarios.php?ban=true');
?>