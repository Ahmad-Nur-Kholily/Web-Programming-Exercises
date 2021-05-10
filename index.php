<?php 
session_start();
$_SESSION['score'] = 0;
$_SESSION['nyawa'] = 5;
require("header.html");
include_once("cekemail.php");
?>
<div class="content">
  <h1>Halo <?php echo $_COOKIE['nama']?>!</h1>
  <h2>Selamat Datang Kembali</h2>
  <a href="game.php" role="button">Mulai main</a>
  <p>Apakah Kamu <?php echo $_COOKIE['nama']?>?<br> Jika bukan Klik 
  <a href="login.php" >Disini</a></p>
</div>
<?php require("footer.html"); ?>