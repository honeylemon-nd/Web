<?php
session_start();
require ('../db.php');
require ('../insert.php');
if (isset($_REQUEST['username'])) {
    // stripslashes dùng để loại bỏ dấu "\"
    $username = stripslashes($_REQUEST['username']);
    // mysqli_real_escape_string dùng để loại bỏ ký tự đặc biệt
    $username = mysqli_real_escape_string($mysqli, $username);
    $email = stripslashes($_REQUEST['email']);
    $email =  mysqli_real_escape_string($mysqli, $email);
    // hàm password_hash để mã hóa mật khẩu
    $password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
    $password = mysqli_real_escape_string($mysqli, $password);
    $insert = "INSERT INTO `user` (Username, Password, Email)
    VALUES ('$username', '$password', '$email')";
    $final = mysqli_real_escape_string($mysqli, $insert);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css" />
    <title>Đăng ký tài khoản</title>
</head>
<body>
<center>
    <form name="registerform" method="post" action="">
        <div class="container">
            <h3 class="container-h3">Đăng ký tài khoản</h3>
            <label for="username">Tên người dùng*</label><br />
            <input type="text" name="username" placeholder="Nhâp tên người dùng" required><br />
            <label for="email">Email*</label><br />
            <input type="email" name="email" placeholder="Nhâp địa chỉ email" required><br />
            <label for="password">Mật khẩu*</label><br />
            <input type="password" name="password" placeholder="Nhâp mật khẩu" required><br /><br />
            <button type="submit">Đăng ký</button><br />
            <p> * Bắt buộc </p>
        </div>
    </form>
</center>
<?php
    if (isset($final)) {
        echo ($msg_success);
        header("Location: login.php");
    } else if (isset($final)) {
        echo ("Đăng ký không thành công vì lỗi" . $msg_error);
    }
?>
</body>
</html>