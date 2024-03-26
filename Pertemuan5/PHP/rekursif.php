<?php
// function tampilkanHaloDunia(){
// // digunakan untuk menampilkan pesan "Halo dunia!" berulang kali secara rekursif.
//     echo "Halo dunia!<br/>";
//     tampilkanHaloDunia();
// }
// tampilkanHaloDunia();

// for ($i=1; $i <=25;$i++){
//     echo "Perulangan ke-{$i}<br>";
// }

function tampilkanAngka (int $jumlah, int $indeks=1){
// untuk mencetak perulangan sejumlah tertentu berdasarkan parameter jumlah yang diberikan
    echo "Perulangan ke-{$indeks}<br>";

    if ($indeks<$jumlah) {
        tampilkanAngka($jumlah, $indeks+1);
    }
}
tampilkanAngka(20);
// untuk menentukan parameter jumlah perulangan
?>