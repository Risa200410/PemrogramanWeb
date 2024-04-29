<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        session_unset();
        // menghapus semua variabel sesi
        session_destroy();
        // menghancurkan sesi yang sedang berlangsung

        echo "All session variables are now removed, and the session is destroyed."
        ?>
    </body>
</html>