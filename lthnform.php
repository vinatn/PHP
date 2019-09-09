<!DOCTYPE html>
<html>
<head>
	<title>Tugas Form</title>
</head>
<body>
<form action ="" method="POST" name="input">
<center><h3>Masukan Bintang</h3></center>
Masukan Bilangan : <input type="number" name="bintang" required="">
<input type="submit" name="Input" value="Input">
</body>
</html>

<?php
if(isset($_POST['Input'])){
	$bintang = $_POST['bintang']; 
	echo "<br>Total Bintang : $bintang<br>";
	for($i=0; $r<$bintang; $r++){
	for($i=0; $b<$r; $b++){
		echo "<b>*</b>";
	}
	echo "<br>";
	}
}
?>