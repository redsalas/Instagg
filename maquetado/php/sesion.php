<?php
session_start();
include("config.php");
$nickname = $_POST['nickname'];
$passusr = sha1(md5(trim($_POST['password'])));

$url = mysqli_connect('localhost','instaggx_admin','instagg123') or die(mysqli_error());
mysqli_select_db($url,'instaggx_instaggDB');

$ssql = "SELECT * FROM usuarios WHERE nickname='".$nickname."' AND pass='".$passusr."'";
$result = mysqli_query($url,$ssql);
if($result){
  if($result->num_rows != 0){
    $dato = $result->fetch_array(MYSQLI_ASSOC);
    if($dato['estado'] == 'BANEADO'){
      header("Location:login.php?ban=true");
    }else{
      $_SESSION['id'] = $dato['id'];
      $_SESSION['nickname'] = $dato['nickname'];
      $_SESSION['avatar'] = $dato['avatar'];
      $_SESSION['tipo'] = $dato['tipo'];
      $_SESSION['start'] = 'si';
      header("Location:../index.php?login=true");
    }
  }else{
      header("Location:login.php?login=false");
  }
}header("Location:login.php?ban=true");
?>
