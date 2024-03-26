<?php

$loremIpsum="Lorem ipsum dolor sit amet consectetur adipisicing elit.
Voluptatem reprehenderit nobis veritatis commodi fugiat molestias
impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum
quisquam? Quos impedit eum nulla optio.";

echo "<p>{$loremIpsum}</p>";
// mencetak teks Lorem Ipsum yang disimpan dalam variabel $loremIpsum ke dalam sebuah paragraf HTML
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
// untuk menghitung jumlah karakter dalam teks dan mencetak hasilnya
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
//  untuk menghitung jumlah kata dalam teks dan mencetak hasilnya
echo "<p>" . strtoupper($loremIpsum)."</p>";
// untuk mengubah semua karakter dalam teks menjadi huruf kapital dan kemudian mencetaknya dalam sebuah paragraf HTML
echo "<p>" . strtolower ($loremIpsum)."</p>";
//  untuk mengubah semua karakter dalam teks menjadi huruf kecil dan kemudian mencetaknya dalam sebuah paragraf HTML
?>