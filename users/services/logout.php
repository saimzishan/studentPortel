<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['stu_id']);
session_destroy();
header("Location: /studentPortel/users/login.php");
?>