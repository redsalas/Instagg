<?php
session_start();
?>
<?php
include("config.php");
$nombre = $_POST['first-name'];
$apellido = $_POST['last-name'];
$email = $_POST['email'];
$pais = $_POST['nacion'];
$acerca = $_POST['acerca'];
$nickname = $_SESSION['nickname'];
$url = mysqli_connect($host,$user,$pass) or die(mysqli_error());
mysqli_select_db($url,$sldb);
  $ssql = "UPDATE usuarios SET nombre = '".$nombre."', apellido = '".$apellido."', email = '".$email."', pais = '".$pais."', acerca = '".$acerca."' WHERE nickname = '".$nickname."'";
  $result = mysqli_query($url,$ssql);
  if($result){
    $result = mysqli_query($url,"SELECT id FROM usuarios WHERE nickname='".$nickname."'");
    $dato = $result->fetch_array(MYSQLI_NUM);
    mysqli_query($url, "DELETE FROM plataformas WHERE userid=$dato[0]");
    echo $dato[0];
    foreach ($_POST['plataforma'] as $plataforma){
      echo $plataforma;
      $result = mysqli_query($url,"INSERT INTO plataformas (userid,plataforma) VALUES (".$dato[0].",'".$plataforma."')");
    }
    header("Location:../index.php");
  }
  else {
    echo "Error al subir a bd";
  }
?>