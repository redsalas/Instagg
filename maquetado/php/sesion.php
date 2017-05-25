<?php
session_start();
include("config.php");
$nickname = $_POST['nickname'];
$passusr = sha1(md5(trim($_POST['password'])));

$url = mysqli_connect($host,$user,$pass) or die(mysqli_error());
mysqli_select_db($url,$sldb);

$ssql = "SELECT * FROM usuarios WHERE nickname='".$nickname."' AND pass='".$passusr."'";
$result = mysqli_query($url,$ssql);
if($result){
  if($result->num_rows != 0){
    $dato = $result->fetch_array(MYSQLI_ASSOC);
    $_SESSION['id'] = $dato['id'];
    $_SESSION['nickname'] = $dato['nickname'];
    $_SESSION['avatar'] = $dato['avatar'];
    $_SESSION['tipo'] = $dato['tipo'];
    $_SESSION['start'] = 'si';
    header("Location:../index.php?login=true");
  }
}
?>
