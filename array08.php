<?php
$arrNilai = array("ani" => 80,"Otim" => 90,"Sri" => 75,"Budi" => 85);
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

ksort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan ksort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

ksort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan krsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>