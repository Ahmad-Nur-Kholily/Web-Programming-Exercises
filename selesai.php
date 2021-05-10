<?php
$skor = $_SESSION['score'];
$nama = $_COOKIE['nama'];
require("header.html");
?>
<div class="content">
    <h1>Hello <?= $nama?></h1>
    <h2>Sayang Permainan Sudah Selesai.</h2>
    <p>Score Kamu : <?= $skor;?></p>
    <?php include("mysqli.php"); ?>
    <a href="index.php" role="button">Main Lagi</a>
    <p><a href="login.php">Logout</a></p>
</div>
<?php
session_destroy();
require("footer.html");
?>