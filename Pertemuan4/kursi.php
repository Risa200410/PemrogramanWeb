<?php
$totalKursi=45;
$kursiTerisi=28;

$kursiKosong= $totalKursi-$kursiTerisi;

$persenKursiKosong= $kursiKosong/$totalKursi*100;

echo "Total Kursi : {$totalKursi} <br>";
echo "Kursi Sudah Terisi: {$kursiKosong} <br>";
echo "Kursi Kosong: {$kursiKosong} <br>";
echo "Persen Kursi Kosong dari Total Kursi: {$persenKursiKosong} <br>";

?>