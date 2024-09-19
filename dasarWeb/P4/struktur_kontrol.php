<?php
$nilaiNumerik = 92;
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf : A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik <90) {
    echo "Nilai huruf : B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf : C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf : D";
}

$jaraksaatini = 0;
$jarakTarget = 500;
$peningkatanharian = 30;
$hari = 0;
while ($jaraksaatini < $jarakTarget) {
    $jaraksaatini += $peningkatanharian;
    $hari++;
}
echo "<br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

$jumlahlahan = 10;
$tanamanperlahan = 5;
$buahpertanaman = 10;
$jumlahbuah = 0;
for ($i = 1; $i <= $jumlahlahan; $i++) {
    $jumlahbuah += ($tanamanperlahan * $buahpertanaman);
}
echo "<br>Jumlah buah yang akan dipanen adalah : $jumlahbuah";

$skorujian = [85, 92, 78, 96, 88];
$totalskor = 0;
foreach ($skorujian as $skor) {
    $totalskor += $skor;
}
echo "<br>Total skor ujian adalah : $totalskor";

$nilaisiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaisiswa as $nilai) {
    if ($nilai < 60) {
        echo "<br> Nilai : $nilai (tidak lulus) <br>";
        continue;
    }
    echo "Nilai : $nilai (lulus) <br>";
}

$nilai_siswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilai_siswa);
$nilai_yang_dipilih = array_slice($nilai_siswa, 2, -2);
$total_nilai = array_sum($nilai_yang_dipilih);
echo "<br> total nilai setelah mengabaikan dua nilai tertinggi dan terendah adalah $total_nilai.";
?>