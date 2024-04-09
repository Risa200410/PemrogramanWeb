<!DOCTYPE html>
<html>
    <head>
        <title>Contoh Form dengan PHP dan jQuery</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- agar dapat menggunakan fitur-fitur jQuery dalam kode -->
    </head>
    <body>
        <h2>Form Contoh</h2>
        <form id="myForm">
            <label for="buah">Pilih Buah: </label>
            <select name="buah" id="buah">
                <option value="apel">Apel</option>
                <option value="pisang">Pisang</option>
                <option value="mangga">Mangga</option>
                <option value="jeruk">Jeruk</option>
            </select>
            <!-- select digunakan untuk memilih buah -->

            <br>

            <label>Pilih Warna Favorit:</label><br>
            <input type="checbox" name="warna[]" value="merah">Merah<br>
            <input type="checbox" name="warna[]" value="biru">Biru<br>
            <input type="checbox" name="warna[]" value="hijau">Hijau<br>
            <!-- checkbox agar dpat memilih beberapa opsi warna dari daftar yang dibuat -->

            <br>

            <input type="submit" value="Submit">
        </form>
        <div id="hasil">
            <!-- hasil akan ditampilkan disini -->
        </div>

        <script>
            $(document).ready(function(){
                $("myForm").submit(function(e){
                    e.preventDefault(); // mencegah pengiriman form secara default
                    // mengumpulkan data form
                    var formData=$("#myForm").serialize();

                    // kirim data ke server PHP
                    $.ajax({
                        url: "proses_lanjut.php", // ganti dengan nama file php yang sesuai
                        type: "POST",
                        data: formData,
                        success: function (response){
                            // tampilkan hasil dari server di div "hasil"
                            $("#hasil").html(response);
                        }
                    });
                });
            });
        </script>
    </body>
</html>