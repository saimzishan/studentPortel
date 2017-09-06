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
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 col-md-12">

          <!-- Chat box -->
          	<div class="box box-success">
            	<div class="box-header">
    	          <i class="fa fa-tachometer"></i>

 	             	<h2 class="box-title">Admin Dash Board</h2>
            	</div>

                <div class="box-body chat" id="chat-box">
                  <!-- chat item -->  
                  <div class="item">  
                    <h3>Necessary details</h3>
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Dash Board</a></li>
                        <li><a data-toggle="tab" href="#menu1">Stuents</a></li>
                        <li><a data-toggle="tab" href="#menu2">Teachers</a></li>
                        <li><a data-toggle="tab" href="#menu3">Samister</a></li>
                        <li><a data-toggle="tab" href="#menu4">Subjects</a></li>
                        <li><a data-toggle="tab" href="#menu5">Fee Details</a></li>
                        <li><a data-toggle="tab" href="#menu6">Result Details</a></li>
                      </ul>

                      <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                          <h3>Dash Board</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                          <h3>Stuents</h3>
                          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                          <h3>Teachers</h3>
                          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                          <h3>Samister</h3>
                          <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                        <div id="menu4" class="tab-pane fade">
                          <h3>Subjects</h3>
                          <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                        <div id="menu5" class="tab-pane fade">
                          <h3>Fee Details</h3>
                          <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                        <div id="menu6" class="tab-pane fade">
                          <h3>Result Details</h3>
                          <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                      </div>
                  </div>
                   <!-- /.chat -->
                  <div class="box-footer">
                  
                  </div>
                </div>
        	</div>
        </section>
      </div>
    </section>
  </div>      		

            


<?php include('end.php');?>

</body>
</html>