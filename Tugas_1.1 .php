//Fernanda Pasa Eka P 20051397033 2020 D4 Manajemen Informatika

<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<h4> A. Positif Genap </h4> <br>
<h4> B. Negatif Genap </h4> <br>
<h4> C. Positif Ganjil </h4> <br>
<h4> D. Negatif Ganjil </h4>
<form method="post" action="">
    <input type="text" name="bilangan" placeholder="Masukkan Bilangan"> <input type="submit" name="submit" value="ENTER">
</form>
<br>
<?php
if(isset($_POST['submit']))
    {
        $bilangan = $_POST['bilangan'];
            if($bilangan > 0){
                echo $bilangan . " Merupakan Bilangan Positif ";
            } elseif ($bilangan < 0){
                echo $bilangan . " Merupakan Bilangan Negatif "; 
            }

            if ($bilangan % 2 == 0){
			    echo "dan Bilangan Genap"; //Kondisi true
		    }else {
			    echo "dan Bilangan Ganjil";
		    }
    }
    ?>
</body>
</html>
