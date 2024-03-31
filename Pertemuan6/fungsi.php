<?php

// NOMOR 4
// function perkenalan(){
//     echo "Assalamualaikum ";
//     echo "Perkenalan, nama saya Risa <br/>";
//     echo " Senang berkenalan dengan Anda<br/>";
// }
// perkenalan();


//NOMOR 5
// function perkenalan($nama, $salam){
//     echo $salam.", ";
//     echo "Perkenalan, nama saya ".$nama."<br/>";
//     echo " Senang berkenalan dengan Anda<br/>";
// }
// perkenalan("Hamdana", "Hallo");

// echo "<hr/>";

// $saya="Elok";
// $ucapanSalam="Selamat pagi";

// perkenalan($saya, $ucapanSalam);


//NOMOR 6
// function perkenalan($nama, $salam="Assalamualaikum"){
//     echo $salam.", ";
//     echo "Perkenalan, nama saya ".$nama."<br/>";
//     echo " Senang berkenalan dengan Anda<br/>";
// }

// // memanggil fungsi yang sudah dibuat
// perkenalan("Hamdana", "Hallo");

// echo "<hr/>";

// $saya="Elok";
// $ucapanSalam="Selamat pagi";

// // memanggil tanpa parameter salam
// perkenalan($saya);


// NOMOR 7
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur=$thn_sekarang - $thn_lahir;
    return $umur;
}
// fungsi ini menghitung umur seseorang berdasarkan tahun lahir dan tahun sekarang


function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    echo "Umur saya adalah ". hitungUmur(1988, 2023) ." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}
// Fungsi ini untuk memperkenalkan seseorang dengan menggunakan nama dan salam


perkenalan("Elok");

?>