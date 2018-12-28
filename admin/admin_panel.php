<html>
<head>
<?php
include("ayar.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
header("Location:index.php");
}else{
echo "Admin sayfasina hosgeldiniz..<br>";
echo "<a href=logout.php>Çıkış Yap</a>";
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ADMİN PANEL</title>

        <style type="text/css">
            body {margin: 0; padding: 0; background-color: white;}
            #kayit_formu {padding: 10px; width: 500px; margin: 50px auto; background: #ddd; border-radius: 5px;}
            input {padding: 10px;border:1px solid #ccc; border-radius: 3px;}
            #button {background-color: red; cursor: pointer;}
            #genel{margin-top: 50px;}
            #oyunekle{background-color: #cbeaff;
                        margin-left: 10px;
                        width: 450px;
                        height: 300px;
                        float: left}
            #oyunlar{background-color:#cbeaff;
                        margin-left: 10px;
                        width: 400px;
                        float: left;
                        height: 550px;
                        overflow-y: scroll;}
            #uyeler{background-color: #cbeaff;
                        margin-left: 10px;
                        margin-bottom: 10px;
                        width: 400px;
                        height: 550px;
                        float: left;
                        overflow-y: scroll;}
            #uye1{    background-color: white;
                        width: 350px;
                        height: 170px;
                        margin-bottom: 10px;
                        margin-top: 10px;
                        margin-left: 25px;}
            #oyun1{    background-color: white;
                        width: 350px;
                        height: auto;
                        padding-bottom: 10px;
                        margin-bottom: 10px;
                        margin-top: 10px;
                        margin-left: 25px;}

        </style>

</head>

<body>
<div id="genel">

<div id="oyunekle">

<center><h2>OYUN EKLE</h2></center>
 
    <form action="?" method="POST">
        <center>
        <table>
            
        <tr>
            <td> Kategori : </td>  

            <td> 
            <select name="kategori_id"/>
                <option value="1">3D OYUNLAR</option>
                <option value="2">2 KISILIK</option>
                <option value="3">ONLINE</option>
                <option value="4">ARABA</option>
                <option value="5">BARBIE</option> 
                <option value="6">BECERI</option>
                <option value="7">BOYAMA</option>
                <option value="8">CIZGI FILM</option>
                <option value="9">COCUK</option>
                <option value="10">DOVUS</option> 
                <option value="11">FUTBOL</option>
                <option value="12">GIYDIRME</option>
                <option value="13">KARISIK</option>
                <option value="14">KIZ</option>
                <option value="15">KOMIK</option> 
                <option value="16">MACERA</option>
                <option value="17">MAKYAJ</option>
                <option value="18">MARIO</option>
                <option value="19">MOTOR</option>
                <option value="20">NISAN</option> 
                <option value="21">SAVAS</option>
                <option value="22">SPOR</option>
                <option value="23">STRATEJI</option>
                <option value="24">YARIS</option>
                <option value="25">YETENEK</option> 
            </td>
        </tr>

        <tr>
            <td>Oyun Adı:</td> <td> <input type="text" name="oyun_adi"> </td>
        </tr>

        <tr>
            <td>Oyun Hikayesi:</td> <td><input type="text" name="oyun_hikayesi"></td>
        </tr>
         <tr>
            <td>Oyun Video:</td> <td><input type="text" name="oyun_video"></td>
        </tr>
        <tr>
            <td>Oyun Link:</td> <td><input type="text" name="oyun_link"></td>
        </tr>

         <tr>
            <td>Oyun Resmi:</td> <td><input type="file" name="oyun_resim"/></td>
        </tr>

        <tr>
            <td></td> <td><input type="submit" id="button" value ="Oyun Ekle"></td>
        </tr>

        </table>
        </center>

    </form>
</div>

    <?php

         if($_POST){
            if (isset($_POST["oyunsil"])) {
                $oyun_id=$_POST["oyunsil_id"];
                 $baglan=@mysql_connect("localhost","root");
                     mysql_select_db("oyun" ,$baglan) or die ("bağlanamadı");
                    $oyunsil = mysql_query("DELETE FROM oyun_ozellik WHERE oyun_id=$oyun_id");
                    if($oyunsil){
                        echo "Silme Başarılı";
                    }
                    else{
                        echo "Bir Hata Oluştu";
                    }

            }

            else if (isset($_POST["uyesil"])) {


                 
                $k_id=$_POST["uyesil_id"];
                 $baglan=@mysql_connect("localhost","root");
                     mysql_select_db("oyun" ,$baglan) or die ("bağlanamadı");
                    $uyesil = mysql_query("DELETE FROM uyeler WHERE k_id=$k_id");
                    if($uyesil){
                        echo "Silme Başarılı";
                    }
                    else{
                        echo "Bir Hata Oluştu";
                    }

            


            }
            else{

                $kategori_id = $_POST['kategori_id'];
                $oyun_adi = $_POST['oyun_adi'];
                $oyun_hikayesi =$_POST['oyun_hikayesi'];
                $oyun_video=$_POST['oyun_video'];
                $oyun_link =$_POST['oyun_link'];
                $oyun_resim=$_POST['oyun_resim'];
                $a="resimler/";
                

               if($kategori_id == "" || $oyun_adi =="" || $oyun_hikayesi =="" || $oyun_link =="" || $oyun_resim ==""   )
               {
                    echo "Lütfen boş alan bırakmayınız";
               }
               else{
                 error_reporting(0); 
                 $baglan=@mysql_connect("localhost","root");
                     mysql_select_db("oyun" ,$baglan) or die ("bağlanamadı");
                      
                    $oyunkayit = mysql_query("INSERT INTO oyun_ozellik (kategori_id,oyun_adi,oyun_hikayesi,oyun_link,oyun_resim,oyun_video) VALUES 
                        ('$kategori_id','$oyun_adi','$oyun_hikayesi','$oyun_link','$a$oyun_resim' , '$oyun_video')");

                    if($oyunkayit){
                        echo "Kayıt Başarılı";
                    }
                    else{
                        echo "Bir Hata Oluştu";
                    }
                    
                   }
               }
         }

    ?>


<div id="oyunlar">
    
<center><h2>OYUNLAR</h2></center>



         <?php
                    $baglanti=@mysqli_connect("localhost","root","","oyun");
                     $cek=mysqli_query( $baglanti,"select * from oyun_ozellik  ");
                     while($yaz=mysqli_fetch_array($cek))
                     {
                   echo '

                         <div id="oyun1">
                          

                          <h5>   OYUN ID :'.$yaz['oyun_id'].'         </h5>
                          <h5>   OYUN  ADI : '.$yaz['oyun_adi'].' </h5> 
                          <h5>   OYUN  HİKAYESİ :'.$yaz['oyun_hikayesi'].'       </h5>
                         <form method="post">
                         <input type="hidden" name="oyunsil_id" value="'.$yaz['oyun_id'].'"/>
                         <input type="submit" name="oyunsil" value="Oyunu Sil"/>
                         </form>
                         </div>
                         ';
                            }
  ?>



</div>




<div id="uyeler">

<center><h2>ÜYELER</h2></center>

 <?php
                    $baglanti=@mysqli_connect("localhost","root","","oyun");
                     $cek=mysqli_query( $baglanti,"select * from uyeler ");
                     while($yaz=mysqli_fetch_array($cek))
                     {
                   echo '

                         <div id="uye1">
        
                          <h5>      ÜYE  ADI : '.$yaz['kadi'].' </h5> 
                          <h5>   ÜYE ŞİFRE :'.$yaz['pass'].'         </h5>
                          <h5>   ÜYE MAİL :'.$yaz['mail'].'         </h5>
                            <form method="post">
                         <input type="hidden" name="uyesil_id" value="'.$yaz['k_id'].'"/>
                         <input type="submit" name="uyesil" value="Üye Sil"/>
                         </form>

                         </div>';
                            }
  ?>

</div>

</div>

</body>
</html>