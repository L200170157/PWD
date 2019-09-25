<html>
    <head>
        <title>Program Penjualan</title>
    </head>
    <body>
        <form method='post' action='tugas1.php'>
            <p>Nilai A adalah <input type='text' name='nilai1' size='3'></p>
            <p>Nilai B adalah <input type='text' name='nilai2' size='3'></p>
            <p><input type='submit' value='Jumlahkan' name='submit'></p>
        </form>

        <?php
            error_reporting (E_ALL ^ E_NOTICE);
            $nilai1 = $_POST['nilai1'];
            $nilai2 = $_POST['nilai2'];
            $submit = $_POST['submit'];
            $jumlah = $nilai1+$nilai2;
            if ($submit) {
                echo"</br>Nilai A adalah : $nilai1";
                echo"</br>Nilai B adalah : $nilai2";
                echo"</br>Nilai A ditambah Nilai B adalah : $jumlah";
            }
        ?>
    </body>
</html>