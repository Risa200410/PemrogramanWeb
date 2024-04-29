<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            // memanggil warna favorite dan hewan favorite yang tersimpan di session
            echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
            echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
        ?>
    </body>
</html>