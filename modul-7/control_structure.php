
<?php
// IF
$user = "admin";
if ($user == "admin") {
  echo "Selamat datang Admin!";
}

echo "<br/><br/>";

// IF (One Line)
$user = "admin";
if ($user == "admin")
  echo "Selamat datang Admin!";

echo "<br/><br/>";

// IF ELSE
$user = "guest";
if ($user == "admin") {
  echo "Selamat datang Admin!";
} else {
  echo "Maaf, anda bukan Admin";
}

echo "<br/><br/>";

// IF ELSE
$username = "admin";
$password = "qwerty";
if ($username == "admin" and $password == "qwerty") {
  echo "Username dan password sesuai, hak akses diberikan";
} else {
  echo "Username atau password tidak sesuai!";
}

echo "<br/><br/>";

// SWITCH
$hari = 4;
switch ($hari) {
  case 1:
    echo "Hari Senin";
    break;
  case 2:
    echo "Hari Selasa";
    break;
  case 3:
    echo "Hari Rabu";
    break;
  case 4:
    echo "Hari Kamis";
    break;
  case 5:
    echo "Hari Jum'at";
    break;
  case 6:
    echo "Hari Sabtu";
    break;
  case 7:
    echo "Hari Minggu";
    break;
  default:
    echo "Nama hari cuma ada 7!";
    break;
}

echo "<br/><br/>";

// FOR
for ($i = 1; $i <= 10; $i++) {
  echo "Saya sedang belajar PHP <br>";
}

echo "<br/><br/>";

// WHILE
$i = 1;
while ($i <= 10) {
  echo "Saya sedang belajar PHP <br>";
  $i++;
}

echo "<br/><br/>";

// DO WHILE
$i = 1000;
do {
  echo "$i ";
  echo "Akan tampil di browser<br>";
  $i = $i + 1;
} while ($i <= 10);

echo "<br/>";

// ARRAY FOR
$nama = array("Andri", "Joko", "Sukma", "Rina", "Sari");
for ($i = 0; $i < 5; $i++) {
  echo "$nama[$i] <br>";
}

echo "<br/>";

// ARRAY FOREACH
$nama = array("Andri", "Joko", "Sukma", "Rina", "Sari");
foreach ($nama as $val) {
  echo "$val <br>";
}

echo "<br/>";

// ASSOCIATION ARRAY FOREACH
$nama = array(
  1  => "Andri",
  6  => "Joko",
  12 => "Sukma",
  45 => "Rina",
  55 => "Sari"
);
foreach ($nama as $kunci => $isi) {
  echo "Urutan ke-$kunci adalah $isi <br>";
}
