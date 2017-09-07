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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
    </section>

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
              <i class="fa fa-files-o"></i>

              <h3 class="box-title">Students Results Details</h3>
              <center>
              	<h4>Student Name: <?php  echo $_GET['name']."  "?></h4> Registration #: <?php echo $_GET['rNumber']."  "?>  
              </center>
              <div class="box-body chat" id="chat-box">
              <!-- chat item -->
              <hr>
	              <div class="item">
	              	<?php 
	              		if( isset($_GET['stu_id']) ) {
							$stu_id = $_GET['stu_id'];
							$samister_id = $_GET['samister_id'];
							echo $userId;						
							 $q = "SELECT * FROM result1 WHERE stu_id = '$stu_id' ";
	                          $r = mysqli_query($dbc,$q);
	                          if (mysqli_num_rows($r) <= 0){
	                          		echo "<p>Record Empty</p>";
	                      		}
                          		else { 
                                ?>
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                          <th>English</th>
                                          <th>Algo</th>
                                          <th>c</th>
                                          <th>Fundamental of computer</th>
                                          <th>dld</th>
                                          <th>Discrete Math</th>
                                        </tr>
                                      </thead>
                                    <?php } ?>  
                                     <tbody>
                                  <?php           
                                    while( $row = $r->fetch_assoc() ) { ?>
                                      
                                            <tr>
                                              <td id="stu_name"><?php echo $row['eng'];?></td>
                                              <td id="stu_fname"><?php echo $row['algorithem'];?></td>
                                              
                                              <td id="stu_fname"><?php echo $row['c'];?></td>
                                              <td id="stu_fname"><?php echo $row['foc'];?></td>
                                              <td id="stu_fname"><?php echo $row['dld'];?></td>
                                              <td id="stu_fname"><?php echo $row['discrete'];?></td>

                                            </tr>
                                         
                                  <?php } #End of while
                                  ?>
                                   </tbody>
                              </table>
                       <?php }       
	              	?>
	              </div>
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