<?php
$a = [
	['Nama' => 'Ujang','Kelas' => 'X RPL 2','Alamat' => 'Jl.Rcm'],
	['Nama' => 'Mahmud','Kelas' => 'X RPL 2','Alamat' => 'Jl.Rcm'],
	['Nama' => 'Ucok','Kelas' => 'X RPL 2','Alamat' => 'Jl.Rcm']
	];
echo "<pre>";
print_r($a);
echo "</pre>";

$mode = current($a[2]);
echo $mode."<br>";
$mode = current($a[1]);
echo $mode."<br>";
next($a);
$mode = key ($a);
echo $mode."<br>";
reset($a);
$mode = current($a[1]);
echo $mode."<br>";
?>