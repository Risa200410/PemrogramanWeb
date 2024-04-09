<!DOCTYPE html>
<html>
    <head>
        <title>Contoh Form dengan PHP</title>
    </head>
    <body>
        <h2>Form Contoh</h2>
        <form method="POST" action="proses_lanjut.php">
            <label for="buah">Pilih Buah:</label>
            <select name="buah" id="buah">
                <option value="apel">Apel</option>
                <option value="pisang">Pisang</option>
                <option value="mangga">Mangga</option>
                <option value="jeruk">Jeruk</option>
            </select>
            <!-- select digunakan untuk memilih buah -->

            <br>

            <label>Pilih Warna Favorit:</label><br>
            <input type="checkbox" name="warna[]" value="merah"> Merah <br>
            <input type="checkbox" name="warna[]" value="biru"> Biru <br>
            <input type="checkbox" name="warna[]" value="hijau"> Hijau <br>
            <!-- elemen checkbox, membuat user dapat memilih beberapa warna favorit -->

            <br>

            <label>Pilih Jenis Kelamin:</label><br>
            <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki<br>
            <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan<br>
            <!-- elemen radio memungkinkan user memilih satu dari beberapa pilihan, namun pada kasus diatas hanya memperbolehkan user memilih salah satu, antara perempuan atau laki-laki -->

            <br>

            <input type="submit" value="Submit">
            <!--  membuat tombol submit di dalam formulir -->
        </form>
    </body>
    <!--form ini membuat user untuk memilih buah favorit, warna favorit, dan jenis kelamin mereka, dan kemudian mengirimkan informasi tersebut ke server  -->
</html>