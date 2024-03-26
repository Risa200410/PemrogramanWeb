<?php

// function perkenalan($nama, $salam="Assalamualaikum"){
//     echo $salam.", ";
//     echo "Perkenalan, nama saya ".$nama."<br/>";
//     echo " Senang berkenalan dengan Anda<br/>";
// }
// perkenalan("Hamdana", "Hallo");

// echo "<hr/>";

// $saya="Elok";
// $ucapanSalam="Selamat pagi";

// // perkenalan($saya, $ucapanSalam);
// perkenalan($saya);

function hitungUmur($thn_lahir, $thn_sekarang){
// fungsi ini menghitung umur seseorang berdasarkan tahun lahir dan tahun sekarang
    $umur=$thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum"){
// Fungsi ini untuk memperkenalkan seseorang dengan menggunakan nama dan salam
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    echo "Umur saya adalah ". hitungUmur(1988, 2023) ." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

perkenalan("Elok");

?>