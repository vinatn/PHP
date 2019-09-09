<!DOCTYPE html>
<html>
<head>
	<title>PIRAMID</title>
</head>
<body>
<form action="" method="POST" name="input">
Masukan Bilangan : <input type="number" name="bil">
<input type="submit" name="Simpan" value="Simpan">
</form>
</body>
</html>

<?php
if(isset($_POST['Simpan'])){
	$bilangan = $_POST['bil'];
for($i=1;$i<=$bilangan;$i--){
for($b=1;$b<=$bilangan+$i;$b--){
	echo "&nbsp;&nbsp";
}
for($c=1;$c<=$i;$c++){
	echo "*&nbsp;&nbsp";
}
	echo "<br>";
	}
	echo "<br>";
	echo "Total Bintang : $bilangan"; 
}
?>