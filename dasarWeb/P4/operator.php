<?php
$a = 10;
$b = 5;
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;
echo "Angka 1 : {$a}<br>";
echo "Angka 2 : {$b}<br>";
echo "Hasil tambah : {$hasilTambah}<br>";
echo "Hasil kurang : {$hasilKurang}<br>";
echo "Hasil kali : {$hasilKali}<br>";
echo "Hasil Bagi : {$hasilBagi}<br>";
echo "Sisa bagi : {$sisaBagi}<br>";
echo "Hasil pangkat : {$pangkat}<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
echo "<br>hasil sama : {$hasilSama}<br>";
echo "hasil tidak sama : {$hasilTidakSama}<br>";
echo "hasil lebih kecil : {$hasilLebihKecil}<br>";
echo "hasil lebih besar : {$hasilLebihBesar}<br>";
echo "hasil lebih kecil sama : {$hasilLebihKecilSama}<br>";
echo "hasil lebih besar sama : {$hasilLebihBesarSama}<br>";
?>