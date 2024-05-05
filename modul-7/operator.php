<?php
// Aritmatika 
$hasil1 = +11;
$hasil2 = -3;
$hasil3 = 3 + 5;
$hasil4 = 8 - 4.5;
$hasil5 = 2 * 5;
$hasil6 = 3 + 8 / 5 - 3;
$hasil7 = 10 % 4;
$hasil8 = 2 ** 4;
var_dump($hasil1);
echo "<br>";
var_dump($hasil2);
echo "<br>";
var_dump($hasil3);
echo "<br>";
var_dump($hasil4);
echo "<br>";
var_dump($hasil5);
echo "<br>";
var_dump($hasil6);
echo "<br>";
var_dump($hasil7);
echo "<br>";
var_dump($hasil8);

echo "<br/><br/>";

// Increment
$a = 5;
echo ++$a;
echo $a;
echo "<br>";
$b = 5;
echo $b++;
echo $b;
echo "<br>";
$a = 5;
echo --$a;
echo $a;
echo "<br>";
$b = 5;
echo $b--;
echo $b;

echo "<br/><br/>";

// Perbandingan
var_dump(12 < 14);
echo "<br />";
var_dump(14 < 14);
echo "<br />";
var_dump(14 <= 14);
echo "<br />";
var_dump(10 <> 14);
echo "<br />";
var_dump(15 == 10);
echo "<br />";
var_dump(10 === 10);
echo "<br />";
var_dump(150 == 1.5e2);

echo "<br/><br/>";

// String
$hasil = "Belajar" . "PHP";
echo $hasil;
echo "<br>";
$a = "Sstt!";
$b = " lagi";
$c = " serius";
$d = " belajar PHP";
$hasil = $a . $b . $c . $d;
echo $hasil;
echo "<br>";
$hasil = 9 . " ekor anak beruang";
echo $hasil;
echo "<br>";
$hasil = true . " adalah data boolean";
echo $hasil;

echo "<br/><br/>";

// Array
$kelasA = ["Andri", "Joko", "Sukma", "Rina", "Sari"];
$kelasB = ["Alex", "Rina", "Rico"];
$semua = $kelasA + $kelasB;
print_r($semua);
$semua= array_merge($kelasA, $kelasB);
echo "<br>";
print_r($semua);
echo "<br>";
var_dump($kelasA == $kelasB);
echo "<br>";
var_dump($kelasA === $kelasB);
echo "<br>";
var_dump($kelasA != $kelasB);
echo "<br>";
var_dump($kelasA <> $kelasB);
echo "<br>";
var_dump($kelasA !== $kelasB);
