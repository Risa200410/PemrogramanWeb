<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="fname">
            <input type="submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            // untuk mengumpulkan nilai yang diinputkan
            $name=$_POST['fname'];
            if (empty($name)){
                echo "name is empty";
            } else{
                echo $name;
            }
            // jika belum ada nama yang diinputkan, maka aka keluar output name is empty
        }
        ?>
    </body>
</html>