	<?php
	session_start();
	
	 if(!isset($_SESSION['email']))
	 {
	 	header("Location: login.php");
	 }
    require_once("services/config.php");

    ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student| Dashboard</title>
  <body class="hold-transition skin-blue sidebar-mini">

	<?php include('tamplates/header.php'); ?>


	<?php include('dashBoard.php'); ?>


	 <?php include('tamplates/end.php'); ?>

	 </body>
</html>