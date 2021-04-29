<?php
include('cekC.php');
echo "<h1>Page 2</h1>";
// menampilkan nama lengkap usernya
echo "<p>Selamat datang ".$_COOKIE['namauser']."</p>";
echo "<h2>Menu Utama</h2>";
echo "<p><a href='page1C.php'>Page 1</a> | <a href='page2C.php'>Page 2</a> | <a href='page3C.php'>Page 3</a> | <a href='logoutC.php'>Logout</a></p>";
?>