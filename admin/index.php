<html>
<head>
	
<style type="text/css">
            body {margin: 0; padding: 0;}
            #kayit_formu {padding: 10px; width: 500px; margin: 50px auto; background: #ddd; border-radius: 5px;}
            input {padding: 5px;border:1px solid #ccc; border-radius: 3px;}
            #button {background-color: red; cursor: pointer;}

        </style>
	
</head>
<body>


<?php
echo '
<form action="login.php" method="POST">
<table align="center">
<tr>
<td>Kullanici Adi</td>
<td>:</td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td>Sifre</td>
<td>:</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" value="Giris"></td>
</tr>
</table>
</form>
';
?>

</body>
</html>