<!DOCTYPE html>
<html>
    <head>
        <title>Multiupload Gambar</title>
    </head>
    <body>
        <h2>Unggah Gambar</h2>
        <!-- form dengan action dari file proses_upload.php, dengan metode POST, dan encoding tipe multipart/form-data(mengirimkan form yang mengandung file) -->
        <form action="proses_soal2.php" method="post" enctype="multipart/form-data">
            <!-- accept untuk mengunggah file dengan jenis yang diizinkan seperti jpg, jpeg, atau png. dan multiple untuk memungkinkan pengguna memilih lebih dari 1 file-->
            <input type="file" name="files[]" multiple="multiple" accept=".jpg, .jpeg, .png"/>
            <input type="submit" value="Unggah"/>
        </form>
    </body>
</html>