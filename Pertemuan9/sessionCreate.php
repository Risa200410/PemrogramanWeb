<?php
    session_start();
    // untuk memulai session
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        // session dapat digunakan untuk menyimpan variabel
            $_SESSION["favcolor"] = "green";
            $_SESSION["favanimal"] = "cat";

            echo "Session variables are set.";
         ?>
    </body>
</html>