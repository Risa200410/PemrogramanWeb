<?php
if (isset($_FILES['file'])) {
    $errors=array();
    $file_name=$_FILES['file']['name']; // nama file yang di upload
    $file_size=$_FILES['file']['size']; // ukuran file yang di upload
    $file_tmp=$_FILES['file']['tmp_name']; // lokasi file yang di upload
    $file_type=$_FILES['file']['type']; // jenis file yang di upload
    @$file_ext=strtolower("". end(explode('.', $_FILES['file']['name'])). ""); //ekstensi file

    // format array ekstensi yang diperbolehkan
    // $extensions=array("pdf", "doc", "docx", "txt"); // array ekstensi yang hanya memperbolehkan format untuk dokumen
    $extensions = array("jpg", "jpeg", "png", "gif"); // TUGAS 3.2

    // memeriksa apakah ekstensi file sesuai
    if (in_array($file_ext, $extensions)==false) {
        // $errors[]="Eksistensi file yang diinginkan adalah PDF, DOC, DOCX, atau TXT."; // kode ini untuk file dokumen
        $errors[]="Eksistensi file yang diinginkan adalah JPG, JPEG, PNG, atau GIF."; // TUGAS 3.2 
    }

    //memeriksa apakah ukuran file tidak melebihi batas yang dibuat
    if ($file_size>2097152) {
        $errors[]='Ukuran file tidak boleh lebih dari 2 MB';
    }

    // jika tidak ada error maka file akan di upload ke direktori yang dituju
    if (empty($errors)==true) {
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "File berhasil diunggah";
    } else{
        echo implode("", $errors); // jika error maka akan ditampilkan salah satu pesan eror 
    }
}
?>