<?php
$totalKursi = 45;
$kursiTerisi = 28; 
$kursiKosong = $totalKursi - $kursiTerisi;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;
echo "Total kursi di restoran: {$totalKursi}<br>";
echo "Kursi yang telah ditempati: {$kursiTerisi}<br>";
echo "Kursi yang masih kosong: {$kursiKosong}<br>";
echo "Persentase kursi kosong: {$persentaseKosong}<br>";
?>