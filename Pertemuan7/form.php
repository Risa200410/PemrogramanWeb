<!DOCTYPE html>
<html>
    <head>
        <title>Form Input PHP</title>
    </head>
    <body>
        <h2>Form Input PHP</h2>
        <!-- menunjukkan method yang dipakai untuk mengirimkan data ke server adalah POST, dan file proses_form.php yang memproses data yang dikirimkan -->
        <form method="post" action="proses_form.php">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required><br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br><br>

            <input type="submit" name="submit" value="Submit" required>
        </form>
    </body>
</html>