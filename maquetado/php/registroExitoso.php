<?php
session_start();
?>
<?php
include("config.php");

$nombre = $_POST['first-name'];
$apellido = $_POST['last-name'];
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$passusr = trim($_POST['password']);
$passusr = sha1(md5($passusr));
$pais = $_POST['country'];

$url = mysqli_connect($host,$user,$pass) or die(mysqli_error());
mysqli_select_db($url,$sldb);

$path = "../avatar/";
$direccion = $path.basename($_FILES['avatar']['name']);
if(move_uploaded_file($_FILES['avatar']['tmp_name'],$direccion)){
  echo "Se subio\n";
  if($_FILES['avatar']['type']=="image/jpeg" or $_FILES['avatar']['type']=="image/jpg")
    $extencion = ".jpg";
  else if($_FILES['avatar']['type']=="image/png")
    $extencion = ".png";
  $file = $path.$nickname.$extencion;
  rename("$direccion",$file);
  $ssql = "INSERT INTO usuarios (nombre,apellido,nickname,email,pass,pais,avatar)".
      "VALUES ('".$nombre."','".$apellido."','".$nickname."','".$email."','".$passusr."','".$pais."','".$file."')";
  $result = mysqli_query($url,$ssql);
  if($result){
    $result = mysqli_query($url,"SELECT id FROM usuarios WHERE nickname='".$nickname."'");
    $dato = $result->fetch_array(MYSQLI_NUM);
    echo $dato[0];
    foreach ($_POST['plataforma'] as $plataforma){
      echo $plataforma;
      $result = mysqli_query($url,"INSERT INTO plataformas (userid,plataforma) VALUES (".$dato[0].",'".$plataforma."')");
    }
    header("Location:login.php");
  }
  else {
    echo "Error al subir a bd";
  }
}else{
  echo 'Error al subir imagen';
}

?>
