<?php
// $pesan = "Saya arek malang";
// echo strrev($pesan)."<br>";
//  // berisi string "Saya arek malang", kemudian mengembalikan string tersebut secara terbalik menggunakan fungsi strrev()

$pesan = "Saya arek malang";
$pesanPerKata=explode(" ", $pesan);
// memecah string $pesan menjadi array kata-kata dengan menggunakan spasi sebagai pemisah
$pesanPerKata=array_map(fn($pesan)=>strrev($pesan), $pesanPerKata);
// mengembalikan array yang berisi kata-kata dari string $pesan yang sudah dibalik
$pesan = implode(" ", $pesanPerKata);
// mnggabungkan setiap elemen array yang telah dibalik kembali menjadi sebuah string dengan spasi sebagai pemisah antar kata
echo $pesan."<br>";

?>