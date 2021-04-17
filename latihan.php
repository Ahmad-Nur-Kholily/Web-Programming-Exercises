<!DOCTYPE html>
<html>
    <head>
        <title> DATA MAHASISWA </title>
    </head>
    <body>
        <p><center><b> DATA MAHASISWA </b></center></p>
        <center>
        <table border="1">
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mhs</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Usia (Thn)</th>
            <?php  
            $fo = fopen("datamhs.dat", "rb");
            function usia($tgl1, $tgl2){
                $pecah1 = explode("-", $tgl1);
                $dd1 = $pecah1[2];
                $mm1 = $pecah1[1];
                $yy1 = $pecah1[0];
                $pecah2 = explode("-", $tgl2);
                $dd2 = $pecah2[2];
                $mm2 = $pecah2[1];
                $yy2 =  $pecah2[0];
                $jd1 = GregorianToJD($mm1, $dd1, $yy1);
                $jd2 = GregorianToJD($mm2, $dd2, $yy2);
                $usia = ceil(($jd2 - $jd1) / 365);
                return $usia;
            }
            $data=0;
            while (!feof($fo) ) {
                $data++;
                $fg = fgets($fo);
                $pecah3 = explode('|', $fg);
                echo "<tr><td>".$data."</td>
                <td>$pecah3[0]</td>
                <td>$pecah3[1]</td>
                <td>$pecah3[2]</td>
                <td>$pecah3[3]</td>
                <td>".usia($pecah3[2], date("Y-m-d"));"</td>
                </tr>";
            }
            fclose($fo);
            ?>  
        </table>
        <?php
        echo "<br>";
        echo "Jumlah Data : " .$data;
        ?>
        </center>
    </body>
</html>