<?php
if(isset($_POST['Simpan'])){
	$nama = $_POST['nama'];
	$mapel1 = $_POST['mapel1'];
	$mapel2 = $_POST['mapel2'];
	echo "Nama : <b>$nama<br></b>";
	echo "Mapel1 : <b>$mapel1<br></b>";
	echo "Mapel2 : <b>$mapel2<br></b>";
	$nilai = ($mapel1+$mapel2)/2;
	echo "Rata - rata : ".$nilai."<br>";
}if ($nilai >= 75) {
    echo " Status : Lulus";
 } else {
    echo " Status : Tidak Lulus";
 }
?>