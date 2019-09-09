<!DOCTYPE html>
<html>
<head>
	<title>Piramid Terbalik</title>
</head>
<body>
<form action="" method="POST" name="Input">
Masukan Bilangan : <input type="number" name="bilangan">
<input type="submit" name="Simpan" value="Simpan">
</body>
</html>

<?php
if(isset($_POST['Simpan'])){
	$bil = $_POST['bilangan'];
	echo"<br>";
for($i=1;$i<=$bil;$i++){
for($b=1;$b<=$i;$b++){
	echo "&nbsp;";
}
for($c=$bil;$c>=$i;$c--){
	echo "*";
}
	echo "<br>";
	}
	echo "<br>";
	echo "Total Bintang : $bil"; 
}