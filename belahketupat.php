<!DOCTYPE html>
<html>
<head>
	<title>Belah Ketupat</title>
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
for($i=0;$i<=$bil;$i++){
for($b=1;$b<=$bil-$i;$b++){
	echo "&nbsp;&nbsp";
}
for($c=1;$c<=$i;$c++){
	echo "*&nbsp;&nbsp;";
}
echo "<br>";
}
for($i=1;$i<=$bil;$i++){
for($b=1;$b<=$i;$b++){
	echo "&nbsp;&nbsp;";
}
for($c=1;$i<=$bil-$i;$c++){
	echo "&nbsp;&nbsp;";
}
	echo "<br>";
	echo "<br>Total Bintang : $bil<br>";
	}
}
?>