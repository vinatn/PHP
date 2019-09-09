<?php
$harga = 15000;
$dus = 6;
$jambu = 5;
$dusbekas = 2000 * 6;
echo "Hasil dari seluruh penjualan jambu = Rp.".($dus*$jambu*$harga);
echo "<br> Hasil penjualan dus bekas = Rp.".($dusbekas);
echo "<br> Hasil dari seluruh penjualan pedagang tersebut = Rp.".($dus*$jambu*$harga+$dusbekas);

?>