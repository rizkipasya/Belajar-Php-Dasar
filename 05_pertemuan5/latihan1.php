<?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// 

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
//Cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "Tulisan", false];

//Menampilkan array
// var_dump () atau print_r
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// Menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1]

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);
?>