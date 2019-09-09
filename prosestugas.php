<?php
if(isset($_POST['simpan'])){
	$nama = $_POST['nama'];
	$nisn = $_POST['nisn'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jk'];
	$agama = $_POST['agama'];
	$assek = $_POST['assek'];
	$namaortu = $_POST['namaortu'];
	$total = $_POST['total'];
	$email = $_POST['email'];
	echo "<b>Nama : $nama<br></b>";
	echo "<b>Nisn : $nisn<br></b>";
	echo "<b>Alamat : $alamat<br></b>";
	echo "<b>Jenis Kelamin : $jk<br></b>";
	echo "<b>Agama : $agama<br></b>";
	echo "<b>Asal Sekolah : $assek<br></b>";
	echo "<b>Nama Orangtua/Wali : $namaortu<br></b>";
	echo "<b>Mata Pelajaran yang Disukai : <br>";
	if (isset($_POST['mtk'])) {
    echo "- " . $_POST['mtk'] . "<br>";
	}
	if (isset($_POST['ipa'])) {
	echo "- " . $_POST['ipa'] . "<br>";
	}
	if (isset($_POST['ips'])) {
	echo "- " . $_POST['ips'] . "<br>";
	}
	if (isset($_POST['pai'])) {
	echo "- " . $_POST['pai'] . "<br>";
	}
	if (isset($_POST['indo'])) {
	echo "- " . $_POST['indo'] . "<br>"; 
	}
	echo "<b>Total Nilai Ijazah SMK : $total<br></b>";
	echo "<b>Email : <b>$email<br></b>";
	if($total > 25){
		echo "<h3>Selamat! Anda Diterima Karena Nilai Anda $total</h3>";
	}else{
		echo "<h3>MAafa Anda Tidak Diterima Karena Nilai Anda $total</h3>";
	}


}
?>