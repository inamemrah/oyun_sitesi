<?php 
 
include("db.php");



ob_start();
session_start();
 
$kadi = $_POST['kadi'];
$pass = $_POST['pass'];
 
$sql_check = mysql_query("select * from uyeler where kadi='".$kadi."' and pass='".$pass."' ") or die(mysql_error());
 
if(($yaz = mysql_fetch_array($sql_check)))
{
    $_SESSION["login"] = "true";
    $_SESSION["kadi"] = $kadi;
    $_SESSION["k_id"] = $yaz['k_id'];
    header("Location:anasayfa.php");
}
else {
    if($kadi=="" or $pass=="") {
	header("Location: anasayfa.php?k_s_bos");
       
    }
    else {
	header("Location: anasayfa.php?k_s_yanlis");
       
    }
}
 
ob_end_flush();
?>