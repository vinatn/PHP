<?php
$arrNama = array ("Ajeng" => 90, "Mamat" => 70, "Ucup" => 85, "Aang" => 95, "Syahrul" => 75);
foreach ($arrNama as $nama => $nilai) {
	echo "<pre>";
	if ($nilai > 85){
		echo "Nama : $nama = Nilai $nilai, Grade A";
	}
	elseif($nilai > 75){
		echo "Nama : $nama = Nilai $nilai, Grade B";
	}
	elseif($nilai > 65){
		echo "Nama : $nama = Nilai $nilai, Grade C";
	}
	echo "</pre>";
}
?> 