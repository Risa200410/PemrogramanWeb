<?php

// NOMOR 9
// function tampilkanHaloDunia(){
//     echo "Halo dunia!<br/>";
//     tampilkanHaloDunia();
// }
// tampilkanHaloDunia();

// NOMOR 10
for ($i=1; $i <=25;$i++){
    echo "Perulangan ke-{$i}<br>";
    // mencetak pesan yang berisi nomor iterasi saat ini
}

function tampilkanAngka (int $jumlah, int $indeks=1){
    echo "Perulangan ke-{$indeks}<br>";

    if ($indeks<$jumlah) {
        tampilkanAngka($jumlah, $indeks+1);
    }
}
// memeriksa apakah nomor iterasi saat ini masih kurang dari jumlah total iterasi yang diinginkan ($jumlah). Jika ya, ia akan memanggil kembali fungsi itu sendiri dengan nilai $indeks yang lebih besar sebanyak satu, sehingga membuat iterasi selanjutnya

tampilkanAngka(20);
 ?>