<?php
$mysqli = mysqli_connect("localhost", "root", "", "web_register");
if (mysqli_connect_errno()) {
  echo ("Không thể kết nối đến MySQL vì lỗi: " . mysqli_connect_error());
  exit();
}
?>