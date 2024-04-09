<!DOCTYPE html>
<html>
    <head>
        <title>File Upload</title>
    </head>
    <body>
        <!-- digunakan untuk mengunggah 1 file ke server, yang akan ditentukan action utnuk memproses file tersebut -->
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload File" name="submit">
        </form>
    </body>
</html>