<?php
$namaFile = "datamhs.dat";
$myfile = fopen($namaFile, "a+") or die("Tidak bisa buka file!");
$a = $_POST['nim'];
$b = $_POST['nama'];
$c = $_POST['tgllhr'];
$d = $_POST['tmptlhr'];
fwrite($myfile,"\n$a|$b|$c|$d");
fclose($myfile);
?>