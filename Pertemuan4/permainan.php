<?php
$poin = 700; 

$hadiah_tambahan = ($poin > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: " . number_format($poin, 0, '', '.');
echo "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiah_tambahan;
?>