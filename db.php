<?php
// To connect to the database
// This code is called by other php-files to use the database
mysqli_connect("localhost","root","");
mysql_select_db("");
mysql_query('SET NAMES "UTF8"');

// Check connection
if (mysqli_connect_errno()) {
  print_r ("Không thể kết nối đến MySQL vì lỗi: " . mysqli_connect_error());
}
?>