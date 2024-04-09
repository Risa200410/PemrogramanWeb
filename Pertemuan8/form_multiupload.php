<!DOCTYPE html>
<html>
    <head>
        <title>Multiupload Dokumen</title>
    </head>
    <body>
        <h2>Unggah Dokumen</h2>
        <!-- form dengan action dari file proses_upload.php, dengan metode POST, dan encoding tipe multipart/form-data(mengirimkan form yang mengandung file) -->
        <form action="proses_upload.php" method="post" enctype="multipart/form-data">
            <!-- accept untuk mengunggah file dengan jenis yang diizinkan, multiple untuk memungkinkan pengguna memilik lebih dari 1 file-->
            <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx"/>
            <input type="submit" value="Unggah"/>
        </form>
    </body>
</html>