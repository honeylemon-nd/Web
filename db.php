<?php
$mysqli = new mysqli("localhost", "root", "", "");
$mysqli -> query('SET NAMES "UTF8"');
if ($mysqli -> connect_errno) {
  echo ("Không thể kết nối đến MySQL vì lỗi: " . $mysqli -> connect_errno);
  exit();
}
?>