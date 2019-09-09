<?php
$array = array ('saya <br>', 10);
$aso = [
[
'Nama' => 'Vinatn',
'Kelas' => 'Informatika 11',
],
[
'Nama' => 'Vinateen',
'Kelas' => 'Informatika',
],
];
foreach ($aso as $value) {
	echo $value['Nama'] . "<br>";
	echo $value['Kelas'] . "<br>";
}
echo "<hr>";
$countaso = count($aso);
for ($i=0;$i < $countaso; $i++){
	echo $aso[$i]["Nama"] . "<br>";
	echo $aso[$i]["Kelas"] . "<br>";
}