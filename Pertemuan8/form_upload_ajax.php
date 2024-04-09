<!-- PRAKTIKUM 3 -->
<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Unggah File Dokumen</title>
    </head>

    <body>
        <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file" accept=".jpg, .jpeg, .png">
            <input type="submit" name="submit" value="Unggah">
        </form>
        <div id="status"></div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="upload.js"></script>
    </body>
</html> -->



<!-- PRAKTIKUM 4 -->
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="upload.css">
    <title>Unggah File Dokumen</title>
</head>
<body>
    <!-- container untuk form upload file -->
    <div class="upload-form-container">
        <h2>Unggah File Dokumen</h2>
        <!-- form untuk mengunggah file dengan action ke upload.php -->
        <form id="upload-form" action="upload.php" method="post" enctype="multipart/form-data">

            <div class="file-input-container">  <!-- container untuk input file -->
                <input type="file" name="file" id="file" class="file-input"> <!-- untuk memilih file yang akan diunggah -->
                <label for="file" class="file-label">Pilih File</label> <!-- label untuk input file -->
            </div>
            
            <!-- button/tombol untuk mengunggah file -->
            <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Unggah</button>
        </form>

        <!-- untuk menampilkan status unggah -->
        <div id="status" class="upload-status"></div>
    </div>

    <!-- mengimpor jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- mengimpor script untuk menangani unggah file -->
    <script src="upload.js"></script>
</body>
</html>