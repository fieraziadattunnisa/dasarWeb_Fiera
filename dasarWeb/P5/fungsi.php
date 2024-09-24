<?php
// function perkenalan() {
   // echo "Assalamualaikum, ";
   // echo "<br>Perkenalkan, nama saya Fiera<br>"; //Tulis sesuai nama kalian
   // echo "Senang berkenalan dengan anda <br>";
//}
// memanggil fungsi yang sudah dibuat
//perkenalan();
//perkenalan();

//membuat fungsi
function perkenalan($nama, $salam) {
    echo $salam.", ";
    echo "<br>Perkenalkan, nama saya ".$nama." <br>";
    echo "Senang berkenalan dengan anda <br>";
}
//memanggil fungsi yang sudah dibuat
perkenalan("Hamdana","hallo");
echo "<hr>";
$saya = "Fiera";
$ucapanSalam = "Selamat Pagi";

//memanggil lagi
perkenalan($saya,$ucapanSalam);
?>