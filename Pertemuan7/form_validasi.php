<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Input dengan Validasi</title>
    <!-- menambahkan jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <!-- untuk input nama -->
        <label for="nama">Nama :</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <!-- untuk input email -->
        <label for="email">Email :</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <!-- untuk input password -->
        <label for="password">Password :</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function(){
            $("#myForm").submit(function(event){
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // memvalidasi nama
                if (nama === ""){
                    $("#nama-error").text("Nama harus diisi");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                // memvalidasi email
                if (email === ""){
                    $("#email-error").text("Email harus diisi");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                // memvalidasi password
                if (password === ""){
                    $("#password-error").text("Password harus diisi");
                    valid = false;
                } else if (password.length < 8) {
                    $("#password-error").text("Password minimal 8 karakter");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                // jika ada kesalahan validasi, akan diberhentikan
                if (!valid){
                    event.preventDefault();
                }

                 // memakai AJAX untuk mengirim data ke server
                 $.ajax({
                    url: "proses_validasi.php",
                    method: "POST",
                    data: {
                        nama: nama,
                        email: email,
                        password: password
                    },
                    success: function(response){
                        $("#result").html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>