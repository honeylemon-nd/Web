<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);

   session_destroy();
   echo 'Đang đăng xuất';
   header('Refresh: 2; Location = login.php');
?>
