<DOCTYPE html>
<html>
    <head>
        <title> Data Ukuran Tabung </title>
    </head>
    <body>
        <?php
        $nf = "datab.dat";
        $fo = fopen($nf, "r") or die("Tidak bisa buka file!");
        $pecah = explode("\n", fread($fo, filesize($nf)));
        $hitung = count($pecah)-1;
        for($i=0; $i<$hitung; $i++){
            $pecah[$i] = explode(",", $pecah[$i]);
        }
        ?>
        <table border="1">
            <th>NAMA TABUNG</th>
            <th>DIAMETER</th>
            <th>TINGGI</th>
            <th>LUAS</th>
            <?php
            for ($baris=0; $baris<$hitung;$baris++) {
                echo "<tr>";
                for ($kolom=0; $kolom<count($pecah[$baris]); $kolom++) {
                    echo "<td>".$pecah[$baris][$kolom]."</td>";
                }
                $file = lutab.php;
                $n = $pecah[$baris][0];
                $d = $pecah[$baris][1];
                $t = $pecah[$baris][2];
                echo "<td><a href='$file?n=$n&d=$d&t=$t' >view</a></td>";
                echo "</tr>";
            }
            fclose($fo);
            ?>
        </table>
    </body>
</html>