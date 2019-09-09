<?php
//Rumus segitiga
function segitiga($alas,$tinggi){
	echo "Alasnya : ".$alas."<br>";
	echo "Tingginya : ".$tinggi."<br>";
	$luas = ($alas*$tinggi)/2;
	echo "Jadi luas segitiga tersebut adalah : ".$alas*$tinggi/2;
}
segitiga(5,10);

//Rumus lingkaran
function lingkaran($jari) 
{
	echo "Jari-jari lingkaran : $jari<br>";
	$luas = 3.14*($jari*$jari);
	$kel = 2*(3.14*$jari);
	echo "Luas lingkaran : $luas<br>";
	echo "Kel lingkaran : $kel<br>";
}
$a=10;
lingkaran($a);

?>