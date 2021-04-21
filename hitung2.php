<?php
// baca kedua bilangan
$bil1 = $_POST['bil1'];
$bil2 = $_POST['bil2'];
// proses perhitungan
if (isset($_POST['tambah'])){
    $hasil = $bil1 + $bil2;
    $op="+";
} else if (isset($_POST['kurang'])){
    $hasil = $bil1 - $bil2;
    $op="-";
} else if (isset($_POST['kali'])){
    $hasil = $bil1 * $bil2;
    $op="*";
} else if (isset($_POST['bagi'])){
    $hasil = $bil1 / $bil2;
    $op="/";
} else if (isset($_POST['pangkat'])){
    $hasil = $bil1 ** $bil2;
    $op="^";
}
// menampilkan hasil perhitungan
echo "<h2>".$bil1." ".$op." ".$bil2." = ".$hasil."</h2>";
?>