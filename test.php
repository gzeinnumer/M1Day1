<?php

//intejer
//String
//char
//boolean
//double, float

//"1"+"5" = "15"
//"hello"+"world" = "helloworld"
//1+5 = 6

// $dataInteger = 1;
// echo $dataInteger . "<br>";

// $dataString = "1Nama";
// echo $dataString . "<br>";

// $dataChar = "z";
// echo $dataChar . "<br>";

// $dataBoolean = true; //false
// echo $dataBoolean . "<br>";

// $dataDouble = 1.5;
// echo $dataDouble . "<br>";


$angka1 = 10;
$angka2 = 70;

$totalTambah = $angka1 + $angka2;

//10+75=85
//85=10+75

echo "Total Tambah : " . $totalTambah . "<br>";

$totalKurang = $angka2 - $angka1;

echo "Total Kurang : " . $totalKurang . "<br>";

$totalKali = $angka1 * $angka2;
//750=10*75 

echo "Total Kali : " . $totalKali . "<br>";

$totalBagi = $angka2 / $angka1;

echo "Total Bagi : " . $totalBagi . "<br><br>";

if ($totalTambah > 80) { //81
    echo "besar dari 80" . "<br>";
} else {
    echo "kecil dari 80" . "<br>";
}

$dataBool = true;

if ($dataBool == true) {
    echo "true" . "<br>";
} else {
    echo "false";
}

$nilai = 50;

if ($nilai < 75) { //0-75
    echo "dibawah kkn" . "<br>";
} else if ($nilai >= 75 && $nilai < 80) { //75 - 80
    echo "cukup kkn" . "<br>";
} else { //80 - 100
    echo "sangat bagus" . "<br>";
}

for ($i = 0; $i < 10; $i++) { //0-9 
    if ($i % 2 == 0)
        echo "data $i" . "<br>";
    else if ($i == 0)
        echo "data $i" . "<br>";
    else
        echo "data ganjil" . "<br>";
}

echo "<br>";

for ($i = 9; $i >= 0; $i--) { //9-0 
    if ($i % 2 == 0)
        echo "data $i" . "<br>";
    else if ($i == 0)
        echo "data $i" . "<br>";
    else
        echo "data ganjil" . "<br>";
}

echo "<br>";

$dataBaru = 10;
switch ($dataBaru) {
    case 0:
        echo "0" . "<br>";
        break;
    case 1:
        echo "1" . "<br>";
        break;
    case 2:
        echo "2" . "<br>";
        break;
    case 3:
        echo "4" . "<br>";
        break;
    case 4:
        echo "4" . "<br>";
        break;
    default:
        echo "Tidak terdaftar" . "<br>";
        break;
}
