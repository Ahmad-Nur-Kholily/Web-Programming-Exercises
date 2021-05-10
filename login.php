<?php
if (isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  setcookie("nama", $nama, time()+30*24*3600, "/");
  setcookie("email", $email, time()+30*24*3600, "/");
  header("Location: index.php");
  exit();
}
include("header.html");
?>
<form class="content" method="post" action="login.php">
  <h2>Login dulu sebelum main!</h2>
  <input type="text" class="form" placeholder="Nama Lengkap" name="nama" required>
  <br>
  <input type="email" class="form" placeholder="Email" name="email" required>  
  <br>
  <input type="submit" name="submit" value="Sign in">
</form>
<?php include("footer.html");?>