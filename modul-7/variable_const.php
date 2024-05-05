<?php
// Menampilkan Variabel dan Konstanta
$nama = "Andi";
define("GAJI", 50000000);
echo $nama;
echo "<br>";
echo GAJI;

// Memanggil variabel dalam string
$nama = "Andi";
echo "<p>Selamat pagi $nama</p>";

// Menghapus Variabel
$nama = "Andi";
echo $nama;
unset($nama);
echo $nama;
