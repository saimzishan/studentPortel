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
  <title>Admin| Dashboard</title>
  
  <?php include('header.php');?>
<body class="hold-transition skin-blue sidebar-mini">


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 col-md-12">

          <!-- Chat box -->
          	<div class="box box-success">
            	<div class="box-header">
    	          <i class="fa fa-tachometer"></i>

 	             	<h3 class="box-title">Admin Dash Board</h3>
            	</div>
        	</div>
        </section>
      </div>
    </section>
  </div>      		

            


<?php include('end.php');?>

</body>
</html>