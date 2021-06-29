<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa hồ sơ</title>
</head>
<body>
    <h1> Nhập thông tin </h1>
    <form action="editprofile_submit.php" method = "POST">
    <table>
        <tr>
            <td>Họ và tên</td>
            <td><input type="text" name="fullname"></td>
        </tr>
        <tr>
            <td>Giới tính</td>
            <td><input type="text" name="gender"></td>
        </tr>
        <tr>
            <td>Tuổi</td>
            <td><input type="number" name="age"></td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td><input type="text" name="address"></td>
        </tr>
        <tr>
            <td>Ảnh</td>
            <td><input type="file" name="image" /></td>
        </tr>
        <tr>
            <td >
            <button type="submit" name="submit">Cập nhập</button>
            </td>
        </tr>
    </table>
    </form>
   
</body>
</html>