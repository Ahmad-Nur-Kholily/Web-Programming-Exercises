<?php
    session_start();
    $_SESSION['rand'] = mt_rand(0,100);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Latihan 6</title>
    </head>
    <body>
        <h1>Aplikasi Random Angka antara 0 sampai 100</h1>
        <p>Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
        <form action="latihan.php" method="post">
            Bilangan tebakan Anda <input type="text" name="tebakan">
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>