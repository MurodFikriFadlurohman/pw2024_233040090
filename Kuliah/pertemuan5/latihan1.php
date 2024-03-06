<?php
// 1. Membuat Array 
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$mahasiswa = ["Murod", 2.5, true];

// 2. Mencetak isi Array
// Mencetak satu elemen pada Array, menggunakan index
echo $hari[2];
echo "<br>";
echo $bulan[0];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";

// Mencetak seluruh isi Array 
// digunakan khusus untuk debugging
// var_dump() atau print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mahasiswa);
echo "<br>";
print_r($mahasiswa);
echo "<hr>";

// 3. Memanipulasi isi Array
// Menambah isi Array
// di akhir Array: [] atau array_push()
$hari[] = "Kamis";
$hari[] = "Jum'at";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);
echo "<br>";

// Di awal Array: array_unshift()
array_unshift($mahasiswa, "233040090");
print_r($mahasiswa);
echo "<hr>";

// Menghapus isi Array
// di akhir: array_pop()
// di awal: array_shift()
array_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan);