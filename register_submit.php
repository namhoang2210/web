<?php
    session_start();
    include 'connect.php';
    if (isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != ''){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        if( $password != $repassword){
            $_SESSION["thongbao"]="Mật khẩu không khớp";
            header("location:register.php");
        }
        $sql = "SELECT * FROM user WHERE username='$username' ";
        $old = mysqli_query($conn, $sql);
        $password = md5($password);
        if(mysqli_num_rows($old)>0 ){
            $_SESSION["thongbao"]="Tài khoản đã tồn tại";
            header("location:register.php");
        }    
        $sql= "INSERT INTO user (username,password) VALUE ('$username','$password')";
        mysqli_query($conn,$sql);
            $_SESSION["thongbao"]=" Đăng kí thành công";
            header("location:login.php");
        
    }else{
        header("location:register.php");
        
    }
?>