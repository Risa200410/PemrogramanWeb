<?php
$pattern = '/[a-z]/'; //cocokkan huruf kecil
$text='This is a Sample Text.';
if(preg_match($pattern, $text)){
    echo "Huruf kecil ditemukan!<br>";
}else{
    echo "Tidak ada huruf kecil!<br>";
}

$pattern = '/[0-9]+/'; //cocokkan satu atau lebih degit
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] ;
    echo "<br>";
} else {
    echo "Tidak ada yang cocok!<br>";
}

// mengganti kata apple dengan banana
$pattern ='/apple/';
$replacement='/banana/';
$text='I like apple pie.';
$new_text=preg_replace($pattern, $replacement, $text);
echo $new_text; //Output: "I like banana pie"
echo "<br>";

$pattern = '/go*d/'; //Cocokkan "god", "good", "gooood", dll.
$text='god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: ". $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

?>

