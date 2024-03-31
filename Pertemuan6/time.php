<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h3>Date</h3>
        <?php
        // mengatur agar waktu default nya asia/jakarta
        date_default_timezone_set("asia/jakarta");
        echo date("h:i:sa");
        ?>
    </body>
</html>