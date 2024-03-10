<?php
$hargaAwal = 120000; // original price
$diskon = 20/100; // discount percentage

if ($hargaAwal > 100000) {
    $besarDiskon = $hargaAwal * $diskon;
    $totalHarga = $hargaAwal - $besarDiskon;
    echo "Total harga setelah diskon: Rp " . number_format($totalHarga, 0, '', '.');
} else {
    echo "Total harga dibawah Rp 100.000,00. Maka tidak ada diskon";
}
?>