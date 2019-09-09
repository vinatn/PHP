<?php
$sewamobil = 375000;
$a = 25000;
$denda = 25000 / 2;
$jam = 24;
$b= 625000;
$c = $b - $sewamobil;
$d = $c/$denda;
$e = $d + $jam;

echo "Harga sewa mobil 24 jam = ".($sewamobil);
echo "<br> Denda = ".($a);
echo "<br> Denda yang harus dibayar = ".($c);
echo "<br> Harga sewa mobil jerry = ".($b);
echo "<br> Jerry menyewa mobil dalam waktu = ".$e;

?>