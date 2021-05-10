<?php
$skor = $_SESSION['score'];
$nyawa = $_SESSION['nyawa'];
$nama = $_COOKIE['nama'];
require("header.html");
?>
<div class="content">
    <h1>Selamat <?= $nama?></h1>
    <h2>Jawaban Kamu Benar</h2>
    <p>Nyawa : <?= $nyawa;?> <br> Skor : <?= $skor;?></p>
    <a href="game.php" role="button">Game Selanjutnya</a>
    <p><a href="index.php">Berhenti Bermain</a></p>
</div>
<?php require("footer.html"); ?>