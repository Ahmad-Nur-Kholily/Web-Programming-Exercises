<?php
$nama = $_COOKIE['nama'];
$nyawa = $_SESSION['nyawa'];
$skor = $_SESSION['score'];
require("header.html");
?>
<div class="content">
    <h1>Sayang sekali <?= $nama?></h1>
    <h2>Jawaban Kamu Salah</h2>
    <p>Nyawa : <?= $nyawa;?> <br> Skor : <?= $skor;?></p>
    <a href="game.php" role="button">Game Selanjutnya</a>
    <p><a href="index.php">Berhenti Bermain</a></p>
</div>
<?php require("footer.html"); ?>