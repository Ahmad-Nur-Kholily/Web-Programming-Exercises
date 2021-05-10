<?php
if (!isset($_COOKIE['email'])){
    header("Location: login.php");
    exit();
} else if ($_SESSION['nyawa'] <= 0){
    header("Location: index.php");
    exit();
}
?>