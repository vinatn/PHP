<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1><center><b>TUGAS</b></center></h1>
<form action="prosestugas.php" method="post" name="input"><b> Nama : <input type="text" name="nama"></b><br><br>
<b>Nisn : <input type="number" name="nisn"></b><br><br>
<b>Alamat : <textarea name="alamat" cols="35"
rows="5"></textarea></b><br><br>
<b>Jenis Kelamin : </b><input type="radio" name="jk" value="perempuan" checked>
Perempuan
<input type="radio" name="jk" value="pr" checked>
Laki-laki<br><br>
<b>Agama : <select name="agama"></b>
 <option value="islam">Islam</option>
 <option value="kristen">Kristen</option>
 <option value="hindu">Hindu</option>
 <option value="budha">Budha</option></select><br><br>
<b>Asal sekolah : <input type="text" name="assek"></b><br><br>
<b>Nama Orangtua/Wali : <input type="text" name="namaortu"></b><br><br>
<b>Mata Pelajaran Yang Disukai : <br>
<input type="checkbox" name="mtk" value="MTK" checked> Matematika <br></b>
<input type="checkbox" name="ipa" value="IPA" checked> Ilmu Pengetahuan Alam <br>
<input type="checkbox" name="ips" value="IPS" checked> Ulmu Pengetahuan Sosial <br>
<input type="checkbox" name="pai" value="PAI" checked> Pendidikan Agama Islam <br>
<input type="checkbox" name="indo" value="B.INDO" checked> B. Indonesia <br><br>
<b>Total Nilai Ijazah SMK : <input type="number" name="total"></b><br><br>
<b>Email : <input type="email" name="email"></b><br><br><br>
<input type="submit" name="simpan" value="Simpan">
</html>