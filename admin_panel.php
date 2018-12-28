<html>
<head>
<?php
include("ayar.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
echo "Admin sayfasina hosgeldiniz..<br>";
echo "<a href=logout.php>Çıkış Yap</a>";
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ADMİN PANEL</title>

        <style type="text/css">
            body {margin: 0; padding: 0;}
            #kayit_formu {padding: 10px; width: 500px; margin: 50px auto; background: #ddd; border-radius: 5px;}
            input {padding: 10px;border:5px solid #ccc; border-radius: 3px;}
            #button {background-color: red; cursor: pointer;}

        </style>

</head>

<body>

 
    <form action="?" method="POST">
        <center>
        <table>
            
        <tr>
            <td> Kategori ID: </td>  <td> <input type="text" name="kategori"> </td>
        </tr>

        <tr>
            <td>Oyun Adı:</td> <td> <input type="text" name="ad"> </td>
        </tr>

        <tr>
            <td>Oyun Hikayesi:</td> <td><input type="text" name="hikaye"></td>
        </tr>
        <tr>
            <td>Oyun Link:</td> <td><input type="text" name="link"></td>
        </tr>

        <tr>
            <td></td> <td><input type="submit" id="button" value ="Oyun Ekranı"></td>
        </tr>

        </table>
        </center>

    </form>

</body>
</html>