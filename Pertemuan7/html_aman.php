<?php
// cocokkan pola regex untuk mencari huruf kecil dalam teks
$pattern = '/[a-z]/';
$text = 'This is a sample text.';
if (preg_match($pattern, $text)) { 
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}

echo "<br>";
echo "<hr>";

// cocokkan pola regex untuk mencari angka dalam teks
$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) { 
    echo "Cocokan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

echo "<br>";
echo "<hr>";

// mengganti kata "apple" dengan "banana" dalam teks menggunakan preg_replace
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text); 
echo $new_text;

echo "<br>";
echo "<hr>";

// cocokkan "god", "good", "gooood", dll. 
$pattern = '/go*d/'; 
$text = 'god is good';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>