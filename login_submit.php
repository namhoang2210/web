<?php
    session_start();
    include 'connect.php';
    if(isset($_POST['submit']) && $_POST["username"]!= '' && $_POST ["password"] != ''){
        $username = $_POST["username"];
        $password = $_POST ["password"];
        $password = md5($password);
        $sql = " SELECT * FROM user WHERE username='$username' AND password= '$password' ";
        $old = mysqli_query($conn, $sql);
        $_SESSION["id"]=$row['id'];
        if( mysqli_num_rows($old)>0){
            echo ("Đăng nhập thành công");
            $_SESSION["user"] = $username;
            header("location:index.php");
        }else{
                echo ("Sai thông tin đăng nhập");
            }
        }
?>