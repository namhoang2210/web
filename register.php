<?php
    session_start();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Đăng kí</title>
</head>
<body>
    <h1> Đăng kí thành viên </h1>
    <p>
        <?php
            if(isset($_SESSION["thongbao"])){
                echo $_SESSION["thongbao"];
                // session_unset("thongbao");
            }    
        ?>         
    </p>
    <form action="register_submit.php" method = "POST">
    <table>
        <tr>
            <td>Tên đăng nhập</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Nhập lại mật khẩu</td>
            <td><input type="password" name="repassword"></td>
        </tr>
        <tr>
            <td colspan="2">
            <button type="submit" name="submit">Đăng kí</button>
            <button type="reset" >Làm mới</button>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>