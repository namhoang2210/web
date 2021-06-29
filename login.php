<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
</head>
<body>
<h1> Đăng nhập </h1>
    <form action="login_submit.php" method = "POST">
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
            <td>
            <button type="submit" name="submit">Đăng nhập</button>
            </td>
        </tr>
    </table>
    <h4><a href="register.php">Đăng kí tài khoản</a></h4>
    </form>
</body>
</html>