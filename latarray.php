<?php
$array = array ('judul','penulis');
$aso = [
[
'Judul' => '<h2>Belajar PHP & MySQL,untuk pemula</h2>',
'Penulis' => 'Admin SMK',
],
[
'Judul' => '<h1>Tutorial PHP dari nol hingga mahir</h1>',
'Penulis' => 'Admin SMK',
],
[
'Judul' => '<h1>Membuat aplikasi web dengan PHP</h1>',
'Penulis' => 'Admin SMK',
],
];

foreach ($aso as $key => $value) {
	echo ($key) . ':' . $value ['Judul'];
	echo ($key) . ':' . $value ['Penulis'];
    echo "<hr>";
}