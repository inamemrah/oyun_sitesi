<?php
    include ('db.php');
?>

    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ANASAYFA</title>
        <link href="css/anasayfa.css" rel="stylesheet" type="text/css" />


        <style type="text/css">
            body {margin: 0; padding: 0;}
            #kayit_formu {padding: 10px; width: 500px; margin: 50px auto; background: #ddd; border-radius: 5px;}
            input {padding: 5px;border:1px solid #ccc; border-radius: 3px;}
            

        </style>

    </head>

    <body>

        <div id="genel">
            <div id="header">
                <a href="anasayfa.php">
                    <div id="logo"><img src="as.png" width="230" height="100" /></div>
                </a>
                <div id="menu">

                    <div id="menu1">
                        <ul>
                            <li><a href="yenioyunlar.php">Yeni Oyunlar</a></li>
                        </ul>
                    </div>
                    <div id="menu1">
                        <ul>
                            <li><a href="populerler.php">Popülerler</a></li>
                        </ul>
                    </div>
                    <div id="menu1">
                        <ul>
                            <li><a href="uyekayit.php">ÜYE OL</a></li>
                        </ul>
                    </div>
                    <div id="menu2">
                       
                      <form action="ara.php" method="post">
                      <input type="text" name="arama"/>
                      <input type="submit" value="ARA"/>
                    </div>
                    <div id="menu2">
                        

                        <form action="giris.php" method="POST">
        <?php

       if(isset($_SESSION["login"])){

          echo'

        <table>
            
        <tr>
            <td><h3> Kullanıcı Adı:    '. $_SESSION["kadi"].'</a></td>
            
        </tr>
        <tr>
            
            <td><a href="cikis.php"><h3>Çıkış Yap</h3> </td>
        </tr>



     

        </table>  ';

       }
       else{

        echo'

        <table>
            
        <tr>
            <td> Kullanıcı Adı: </td>  <td> <input type="text" name="kadi"> </td>
        </tr>

        <tr>
            <td>Şifre:</td> <td> <input type="password" name="pass"> </td>
            <td></td> <td><input type="submit" id="button" value ="Giriş Yap"></td>
        </tr>

       

       

        </table>  ';
      }

        ?>

    </form>


<?php
if(isset($_GET['k_s_bos'])){
echo "<h4>'Lutfen kullanici adi ya da sifreyi bos birakmayiniz'</h4>";
}
?>
<?php
if(isset($_GET['k_s_yanlis'])){
echo "<h4>'Kullanici Adi/Sifre Yanlis'</h4>";
}
?>


                    </div>

                </div>
            </div>
            <div id="clear-header"></div>

            <div id="bos">

            </div>

            <div id="ortamenu">

                <div id="solortamenu">

                    <?php
                    $baglanti=@mysqli_connect("localhost","root","","oyun");
                     $cek=mysqli_query( $baglanti,"select * from kategoriler where kategori_id=".@$_GET['id']."");
                     while($kategori=mysqli_fetch_array($cek))
                     {
                   echo '

                
                    <ul>
                         <li><a href="kategori.php?id='.$kategori['kategori_id'].'"<header>'.$kategori["kategori_ad"].'</header></a></li>

                    </ul>
                    
                </div>
                <div id="begenilenoyunlar">

                    <h2> <center> '.$kategori["kategori_ad"].' </center></h2>';
            }
                ?>
                    <?php
                    $baglanti=@mysqli_connect("localhost","root","","oyun");
                     $cek=mysqli_query( $baglanti,"select * from oyun_ozellik where kategori_id =".@$_GET['id']."  ");
                     while($yaz=mysqli_fetch_array($cek))
                     {
                   echo '<div id="oyun">

                        <div id="resim">
                          <a href="oyunekranii.php?id='.$yaz['oyun_id'].'">  <img src='.$yaz["oyun_resim"].' width="178" height="150" /> </a>

                        </div>

                        <h4><center>
                                    '.$yaz["oyun_adi"].'
                                    </center>
                                </h4>

                    </div>';
                     }
                    ?>

                </div>
                
                <div id="yenioyunlar">

                    <h4> <center>YENİ OYUNLAR </center></h4>
<?php
                    $baglanti=@mysqli_connect("localhost","root","","oyun");
                     $cek=mysqli_query( $baglanti,"select * from oyun_ozellik  LIMIT 0,5");
                     while($yaz=mysqli_fetch_array($cek))
                     {
                   echo '
                    <div id="oyn">

                        <div id="rsm">
                            <a href="oyunekranii.php?id='.$yaz['oyun_id'].'"> <img src='.$yaz["oyun_resim"].' width="160" height="120" /> </a>
                        </div>

                        <h4>
                        <center>
                          '.$yaz["oyun_adi"].'
                         </center>
                         </h4>

                    </div>';
                }
                    ?>
                </div>
            </div>
            <div id="clear-ortamenu"></div>

            <div style="clear:both"></div>

            <div class="footer">
                <p>
                    OYUN KOLU HAKKINDA 2008 yılından günümüze kadar kesintisiz hizmet veren Oyunkolu.com kalite anlayışını bozmadan her geçen gün genişleyen oyun skalası ile yayın hayatına devam ediyor. Flash oyunların yanı sıra günümüzün en çok oynanan oyun türleri arasında olan 3D oyunlara da yar verdiğimiz Oyunkolu.com'da Unity 3D ve Shockwave tabanlı oyunlar da oynayabilirsiniz. Ayrıca Friv, Araba Oyunları, Kız Oyunları ve 3D Oyunlar gibi kategori sayfalarımızı da takip edebilirsiniz. Oyunkolu.com'daki oyunlardan yapımcıları sorumludurlar.
                </p>
            </div>
        </div>
    </body>

    </html>