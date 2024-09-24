<?php
//function tampilkanHaloDunia() {
   // echo "Hallo Dunia!! <br>";
   // tampilkanHaloDunia();
//}
//tampilkanHaloDunia();

//for ($i=1; $i <=25; $i++) {
   // echo "perulangan ke-{$i} <br>";
//}

function tampilkanAngka (int $jumlah, int $indeks = 1) {
    echo "perulangan ke -{$indeks}<br>";
    //panggil diri sendiri selama $indeks <= $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}
tampilkanAngka(20);
?>