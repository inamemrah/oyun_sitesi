

    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ANASAYFA</title>

        <style type="text/css">
            body {margin: 0; padding: 0;}
            #kayit_formu {padding: 10px; width: 500px; margin: 50px auto; background: #ddd; border-radius: 5px;}
            input {padding: 5px;border:1px solid #ccc; border-radius: 3px;}
            #button {background-color: red; cursor: pointer;}

        </style>

       
    </head>

    <body>

    <a href="anasayfa.php"> ANA SAYFA </a>

    <div id="kayit_formu">

    
    <form action="?" method="POST">
        
        <table>
            
        <tr>
            <td> Kullanıcı Adı: </td>  <td> <input type="text" name="kadi"> </td>
        </tr>

        <tr>
            <td>Şifre:</td> <td> <input type="password" name="pass"> </td>
        </tr>

        <tr>
            <td>Mail Adresi:</td> <td><input type="text" name="mail"></td>
        </tr>

        <tr>
            <td></td> <td><input type="submit" id="button" value ="Kayıt Ol"></td>
        </tr>

        </table>

    </form>






    <?php

         if($_POST){

                $kadi = $_POST['kadi'];
                $sifre = $_POST['pass'];
                $mail =$_POST['mail'];
                

               if($kadi == "" || $sifre =="" || $mail =="" )
               {
                    echo "Lütfen boş alan bırakmayınız";
               }
               else{
                 error_reporting(0); 
                 $baglan=@mysql_connect("localhost","root");
                     mysql_select_db("oyun" ,$baglan) or die ("bağlanamadı");
                      
                    $kayit = mysql_query("INSERT INTO uyeler (kadi,pass,mail) VALUES ('$kadi','$sifre','$mail')");

                    if($kayit){
                        echo "Kayıt Başarılı";
                    }
                    else{
                        echo "Bir Hata Oluştu";
                    }
                    
                   }
         }

    ?>


       </div>
    </body>

    </html>