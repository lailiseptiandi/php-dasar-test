<?php

// soal no 1
$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";

// menentukan nilai rata-rata
$convert_nilai = explode(" ", $nilai);
$array_nilai = array_sum($convert_nilai);
$average = $array_nilai / count($convert_nilai);
// print_r($average);
// $jumlah = $convert_nilai[0] + $convert_nilai[1];
// print_r($jumlah);

// menentukan nilai 7 tertinggi dan terendah
rsort($convert_nilai, SORT_NUMERIC);
$value = implode(',', $convert_nilai);
$replace = str_replace(",", " ", $value);

$getMaximum = array_slice($convert_nilai, 0, 7, true);
$getMinimum = array_slice($convert_nilai, -7, 7, true);

// panggil nilai rata-rata
echo " Nilai Rata-Rata adalah : " . $average . "<br>";

// panggil nilai tertinggi
$max = implode(" ", $getMaximum);
echo "7 Nilai tertinggi : " . $max . "<br>";
//  panggil nilai terendah
$min = implode(" ", $getMinimum);
echo "7 Nilai terendah : " . $min . "<br>";





// soal no 2

$kata = "TranSISI";
$count_char = preg_match_all("/[a-z]/", $kata);

echo "<br>";
echo "<br>";
echo "<br>";
echo " Ini Soal no 2!! <br>";
echo "$kata" . " mengandung " . $count_char . " buah huruf kecil";
