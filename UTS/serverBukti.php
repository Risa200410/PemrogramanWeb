<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bukti.css">
</head>
<body>
    <?php
        if (isset($_POST['submit'])) {
            $targetDirectory="uploads/"; 
            $targetFile=$targetDirectory . basename($_FILES["fileToUpload"]["name"]);
        
            $documentType= strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $allowedExtensions=array("jpg", "jpeg", "png", "gif"); 
        
            $maxFileSize = 10*1024*1024; 
            
            if (in_array($documentType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                    echo '<div class="success-message">Dokumen berhasil diunggah.</div>';
                } else {
                    echo '<div class="error-message">Gagal mengunggah dokumen.</div>';
                }
            } else {
                echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
            }            
        }

        if (isset($_FILES['file'])) {
            $errors=array();
            $file_name=$_FILES['file']['name']; 
            $file_size=$_FILES['file']['size']; 
            $file_tmp=$_FILES['file']['tmp_name']; 
            $file_type=$_FILES['file']['type']; 
            @$file_ext=strtolower("". end(explode('.', $_FILES['file']['name'])). "");

            $extensions = array("jpg", "jpeg", "png", "gif"); 

            if (in_array($file_ext, $extensions)==false) {
                $errors[] = '<span class="error-message">Eksistensi file yang diinginkan adalah JPG, JPEG, PNG, atau GIF.</span>';

            }

            if ($file_size > 2097152) {
                $errors[] = '<span class="error-message">Ukuran file tidak boleh lebih dari 2 MB</span>';
            }
            
            // if (empty($errors)==true) {
            //     move_uploaded_file($file_tmp, "bukti/" . $file_name);
            //     echo '<span class="success-message">File berhasil diunggah</span>';
            //     echo "<a href='cetak.php' class='btn'>Cetak Tiket</a>"; 
            //     // echo "<style>.btn { padding: 10px 20px; background-color: #3498db; color: white; text-decoration: none; border-radius: 5px; display: inline-block; margin-left: 10px; }</style>";
            // } else{
            //     echo "<span class='error-message'>" . implode("", $errors) . "</span>";
            // }

            if (empty($errors)) {
                move_uploaded_file($file_tmp, "bukti/" . $file_name);
                echo '<span class="success-message">File berhasil diunggah</span>';
                echo "<a href='cetak.php' class='btn'>Cetak Tiket</a>";
            } else {
                echo "<span class='error-message'>" . implode("", $errors) . "</span>";
            }
            
        }
    ?>