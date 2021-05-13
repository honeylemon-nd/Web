<?php
$mysqli = @new mysqli("localhost","root","");
mysql_query('SET NAMES "UTF8"');

// Check connection
if ($mysqli -> connect_errno) {
  echo ("Không thể kết nối đến MySQL vì lỗi: " . $mysqli->connect_errno);
  exit();
}
?>