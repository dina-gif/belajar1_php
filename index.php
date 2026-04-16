<?php

$nama = "Dina";
$umur = 20;
$tinggi = 147.5;
$menikah = true;
$hobi = ["membaca", "berenang", "main game"];

echo "nama saya $nama, umur saya $umur, tinggi saya $tinggi, status saya $menikah, hobi saya $hobi[2]";

echo "<br><br>=============================================================<br><br>";

//operator
$nilai1 = 5;
$nilai2 = 8;
$nilai3 = 10;
$nilai4 = 20;
$nilai5 = 13;

$hasil = $nilai1 + $nilai2 - $nilai3 * $nilai4 / $nilai5;

echo "hasil dari $nilai1 + $nilai2 - $nilai3 * $nilai4 / $nilai5 adalah $hasil";

echo "<br><br>=============================================================<br><br>";

//percabangan
$nilai = 70;

if($nilai >= 85) {
    echo "grade A";
} else if($nilai >= 70){
    echo "grade B";
}else if($nilai >= 50){
    echo "grade C";
}else if($nilai >= 30){
    echo "grarde D";
}else{
    echo "grade E";
}

?>