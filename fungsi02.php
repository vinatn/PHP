<?php
function cetak_ganjil ($awal, $akhir) {
 for ($i=$awal; $i<$akhir; $i++) {
 if ($i%2 == 1) {
 echo "$i ";
 }
 }
 }
//pemanggilan fungsi
$a = 10;
$b = 50;
echo "<b>Bilangan ganjil dari $a sampai $b : </b><br>";
cetak_ganjil($a, $b); 

//optional parameter
function perkenalan($nama,$kelas)
{
	echo "Nama : $nama<br>";
	echo "Kelas: $kelas<br>";
}
$a = "Vinatn";
$b = "X RPL 2";
function perkenalan2($nama = "Vinatn")
{
	echo "Nama Saya : $nama";
}
echo "<br>";
$c="Vinatn";
perkenalan($c);
?>