<?php 
session_start();
include_once("cekemail.php");
$nyawa = $_SESSION['nyawa'];
$score = $_SESSION['score'];
if (isset($_POST['submit'])){
  $hasil = $_SESSION['hasil'];
  $jawaban = $_POST['jawaban'];
  if ($jawaban == $hasil){
    $_SESSION['score'] += 10;
    include_once("benar.php");
    exit();
  } else {
    $_SESSION['nyawa'] -= 1; 
    $_SESSION['score'] -= 2;
    if ($_SESSION['nyawa'] > 0){
      include_once("salah.php");
      exit();
    } else {
      include_once("selesai.php");
      exit();
    }
  }
}
$x = random_int(0, 20);
$y = random_int(0, 20);
$_SESSION['hasil'] = $x + $y;
require("header.html");
?>
<form class="content" method="post" action="game.php">
  <h1>Semangat <?= $_COOKIE['nama'];?></h1>
  <h2>Kamu pasti bisa</h2>
  <p>Nyawa : <?= $nyawa;?> <br> Skor : <?= $score;?></p>
  <h3><?= $x ;?> + <?= $y;?> = ... </h3>
  <input type="text" placeholder="Jawaban Kamu" name="jawaban">
  <input type="submit" name="submit" value="Jawab">
</form>
<?php require("footer.html"); ?>