<?php
require('../db.php');
// Kiểm tra xem có bất kỳ tham số rỗng hay không
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    if ((empty($_POST['username'])) == false && (empty($_POST['email'])) == false && (empty($_POST['password'])) == false) {
    $username = mysqli_real_escape_string($mysqli, ($_POST['username']));
    $email = mysqli_real_escape_string($mysqli, ($_POST['email']));
        // Kiểm tra xem email có hợp lệ không
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_check = mysqli_query($mysqli, "SELECT `Email` FROM `users` WHERE Email = '$email'");
            if (mysqli_num_rows($email_check) > 0) {
                $msg_err = "Email này đã được đăng ký!";
            } else {
                $mahoa_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                // Đưa thông tin lên database
                $insert = mysqli_query($mysqli, "INSERT INTO `user` (`Username`, `Email`, `Password`) VALUES ('$username', '$email', '$mahoa_password')");
                if($insert === TRUE) {
                    $msg_success = "Bạn đã đăng ký thành công";
                } else {
                    $msg_err = "Đã có lỗi xảy ra!";
                }
            }
        } else {
            // Email không hợp lệ
            $msg_err = "Email không hợp lệ.";
        }
    } else {
        // Có bất kỳ input nào bị bỏ trống
        $msg_err = "Xin bạn hãy nhập tất cả các ô trống.";
    }
}
?>
