<?php
$myArray=array();

// memeriksa apakah $myArray kosong
if (empty($myArray)) {
    echo "Array tidak terdefinisi atau kosong.";
    // dicetak jika $myArray adalah array kosong
} else{
    echo "Array terdefinisi dan tidak kosong.";
}

// memeriksa apakah $nonExistentVar tidak terdefinisi atau kosong
if (empty($nonExistentVar)) {
    echo " Variabel tidak terdefinisi atau kosong.";
    // dicetak jika $nonExistentVar kosong
} else{
    echo " Variabel terdefinisi dan tidak kosong.";
}

?>