<?php
// Get Type
$var1 = 12;
echo gettype($var1);
echo "<br>";
$var2 = 99.99;
echo gettype($var2);
echo "<br>";
$var3 = "Informatika";
echo gettype($var3);

echo "<br/><br/>";

// Var Dump
$var1 = 12;
var_dump($var1);
echo "<br/>";
$var2 = 99.99;
var_dump($var2);
echo "<br/>";
$var3 = "Informatika";
var_dump($var3);

echo "<br/><br/>";

// Integer
$umur = 21;
$harga = 15000;
var_dump($umur);
echo "<br />";
var_dump($harga);

echo "<br/><br/>";

// Float
$IPK  = 3.19;
$nilai_tukar = 13235.50;
var_dump($IPK);
echo "<br />";
var_dump($nilai_tukar);

echo "<br/><br/>";

// String
$huruf = 'A';
$nama = "Anto";
$situs = "https://bif-sby.telkomuniversity.ac.id/";
$kalimat = "Sedang serius belajar PHP";

var_dump($huruf);
echo "<br>";
var_dump($nama);
echo "<br>";
var_dump($situs);
echo "<br>";
var_dump($kalimat);

echo "<br/><br/>";

// String Double Quote Escaped
$kalimat = "Saya sedang belajar \"PHP\"";
echo $kalimat;

echo "<br/><br/>";

// String Double Quote
$prodi = "Informatika";
$belajar1 = 'Sedang belajar programming di $prodi';
echo $belajar1;
echo "<br>";
$belajar2 = "Sedang belajar programming di $prodi";
echo $belajar2;

echo "<br/><br/>";

// String Double Quote (Kurung Kurawal)
$kata = "Fakultas";
echo "{$kata} Informatika";

echo "<br/><br/>";

// Boolean
$benar = true;
$salah = false;
var_dump($benar);
echo "<br/>";
var_dump($salah);
echo "<br/>";
if ($benar) {
  echo "Anda Benar!";
}

echo "<br/><br/>";

// Array
$siswa = array("Andri", "Joko", "Sukma", "Rina", "Sari");
echo $siswa[1];

// Menambah Elemen Array
$macam2 = array(121, "Joko", 44.99, "Belajar PHP");
$macam2[4] = "Informatika";
$macam2[5] = 212;
$macam2[6] = 3.14;

echo "<pre>";
var_dump($macam2);
echo "</pre>";

// Menambah & Menghapus Elemen Array
$macam2 = array(121, "Joko", 44.99, "Belajar PHP");
$macam2[] = "Informatika";

unset($macam2[0]);
unset($macam2[2]);
unset($macam2[3]);

echo "<pre>";
var_dump($macam2);
echo "</pre>";

// Array Association
$siswa = array(
  "satu"  => "Andri",
  "dua"   => "Joko",
  "tiga"  => "Sukma",
  "empat" => "Rina"
);
echo $siswa["dua"];
echo "<br>";
echo $siswa["empat"];

echo "<br/><br/>";

// Array Association Short Syntax
$siswa = [
  "satu"  => "Andri",
  "dua"   => "Joko",
  "tiga"  => "Sukma",
  "empat" => "Rina"
];
echo $siswa["satu"];
echo "<br>";
echo $siswa["tiga"];

// Object
class Siswa
{
  public $nama;
  public $umur;
  public $tgl_lahir;

  public function get_nama()
  {
    return $this->nama;
  }
}
$andi = new Siswa;
$andi->nama = "Andi";
$andi->umur = 13;
$andi->tgl_lahir = "13 Des 1990";
echo "<pre>";
print_r($andi);
echo "</pre>";

// Null
$var3 = null;
var_dump($var3);
