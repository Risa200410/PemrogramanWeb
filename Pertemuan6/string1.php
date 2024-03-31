<?php

$loremIpsum="Lorem ipsum dolor sit amet consectetur adipisicing elit.
Voluptatem reprehenderit nobis veritatis commodi fugiat molestias
impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum
quisquam? Quos impedit eum nulla optio.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum)."</p>";
echo "<p>" . strtolower ($loremIpsum)."</p>";
// kode class ini menghasilkan output teks lorem ipsum dalam berbagai bentuk, termasuk aslinya, panjang karakternya, jumlah kata, dalam huruf besar, dan dalam huruf kecil, semuanya ditampilkan di halaman web

?>