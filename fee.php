<?php
	session_start();
	// get database connection 
	require_once("services/config.php");
	 if(!isset($_SESSION['name'])) 
	 {
	 	header("Location: /studentPortel/login.php");
	 }
?>

  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Students portel| Fee</title>
  <?php include('header.php');?>
<body class="hold-transition skin-blue sidebar-mini">
<?php include('fee/index.php');?>
<!-- ./wrapper -->
<?php include('end.php');?>

</body>
</html>