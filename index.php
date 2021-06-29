<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("location: login.php");
    }
?>
<h1>............... </h1>
<a href="editprofile.php"> Sửa thông tin</a><br>
<a href="logout.php">Đăng xuất</a>