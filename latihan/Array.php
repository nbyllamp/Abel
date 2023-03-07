<?php
// Definisi array

// Membuat Array
$bulan = ["januari","februari","maret","april","mei"];
$hari = array("senin","selasa","rabu");
$arr = [123, "tulisan",false];

// Menampilkan Array
// var_dump() / print_r
// var_dump($hari);
// echo"<br>";
// print_r($bulan);

// Menampilkan Satu Elemen Pada Array
// echo $arr[0];
// echo "<br>";
// echo $bulan[4];

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "lum'at";
echo "<br>";
var_dump($hari);