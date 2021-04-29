<?php
$users = array(
			array("username1", "Rosihan Ari Yuana", "123456"),
			array("username2", "Dwi Amalia Fitriani", "654321"),
			array("username3", "Faza Fauzan Khosyiyarrohman", "112233")
		 );
if (isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	foreach ($users as $profile_user) {
		if (($profile_user[0] == $username) && ($profile_user[2] == $password)){
			$_COOKIE['namauser'] = $profile_user[1];
			header("Location: page1C.php");
		}
	}
	echo "<h3>Login gagal</h3>";
	echo "<p>Silakan <a href='formC.html'>login kembali</a></p>";
}
?>