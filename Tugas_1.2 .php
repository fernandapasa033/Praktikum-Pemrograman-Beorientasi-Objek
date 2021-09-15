// Fernanda Pasa Eka P 20051397033 2020A D4 Manajemen Informatika

<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<form method="post" action="">
    <input type="text" name="awal" placeholder="Masukkan nilai awal">
    <br>
    <input type="text" name="beda" placeholder="Masukkan nilai beda">
    <br>
    <input type="text" name="suku" placeholder="Masukkan nilai suku ke">
    <br>
    <input type="submit" name="submit" value="ENTER">
</form>
<br>
<?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $awal = $_POST['awal'];
         $beda = $_POST['beda'];
         $suku = $_POST['suku'];
$var = 0;

         for ($i=0; $i < $suku; $i++) {
            echo $awal += $var; 
echo " ";

      $var = $beda;    
         }
      }
   ?>
</body>
</html>
