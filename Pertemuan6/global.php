<?php
$x=75;
$y=25;

function addition(){
    $GLOBALS['z']=$GLOBALS['x'] + $GLOBALS['y'];
    // variabel global $x dan $y ditambahkan, dan hasilnya disimpan dalam variabel global $z menggunakan array $GLOBALS
}

addition();
// pemanggilan fungsi addition
echo $z;
// mencetak nilai variabel global $z
?>