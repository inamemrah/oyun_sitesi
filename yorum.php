<?php
include("db.php");
session_start();
?>
<?php

$yorum = $_POST['yorumyap'];
$icerik_id = $_POST['icerik_id'];
  $baglanti=@mysqli_connect("localhost","root","","oyun");
if(isset($_SESSION["login"])){
$mesajekle = mysqli_query($baglanti,"insert into yorumlar (yorum,oyun_id,k_id) values ('".$yorum."' , ".$icerik_id." , ".$_SESSION["k_id"].")");

}

if($mesajekle){
header("Location: oyunbasla.php?y_eklendi&id=".$icerik_id);
}else{
echo "Mesaj eklenemedi";
}
?>