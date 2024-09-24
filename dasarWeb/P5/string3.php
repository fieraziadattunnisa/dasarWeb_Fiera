<?php
//$pesan = "Saya arek malang";
//echo strrev($pesan) . "<br>";

$pesan = "saya arek malang";
// Ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
// Ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn ($pesan) => strrev($pesan), $pesanPerKata);
// Gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);
echo $pesan . "<br>";
?>
