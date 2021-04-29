<?php
    session_start();
    $angka = $_SESSION['rand'];
    if (isset($_POST['submit'])){
        $tebak = (int)$_POST['tebakan'];
        if ($tebak > $angka){
?>
            <p>Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
			<br>
            <p>Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi.</p>
            <br>
            <form action="latihan.php" method="post">
                Bilangan tebakan Anda <input type="text" name="tebakan">
                <input type="submit" name="submit" value="Submit">
            </form>
<?php
        } else if ($tebak < $angka){
?>
			<p>Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
			<br>
            <p>Waaah… masih salah ya, bilangan tebakan Anda terlalu rendah.</p>
            <br>
            <form action="latihan.php" method="post">
                Bilangan tebakan Anda <input type="text" name="tebakan">
                <input type="submit" name="submit" value="Submit">
            </form>
<?php
        } else {
            echo "<p>Selamat ya… Anda benar, saya telah memilih bilangan ".$angka."</p>";
            echo "<a href='latihanC.php'>ulangi lagi</a>";
        }
    }
?>