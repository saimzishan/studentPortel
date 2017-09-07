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

              <h3 class="box-title">Update Student Results</h3>
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
      							 $q = "SELECT * FROM subjects WHERE samester_id = '$samister_id' ";
	                          $r = mysqli_query($dbc,$q);
	                          if (mysqli_num_rows($r) <= 0){
	                          		echo "<p>Record Empty</p>";
	                      		}
                          		else { 
                                ?>
                              <form action="services/results/addResult.php" method="POST">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                          <th>Name</th>
                                          <th>Number</th>
                                        </tr>
                                      </thead>
                                    <?php } ?>  
                                     <tbody>
                                      <?php  $i = 1;          
                                        while( $row = $r->fetch_assoc() ) { ?>
                                          
                                                <tr>
                                                  <td id="stu_name"><?php echo $row['name'];?></td>
                                                  <td id="stu_fname"><input type="number" required name="<?= 'textBox'.$i++ ?>"></td>
                                                </tr>
                                             
                                      <?php } #End of while
                                      ?>
                                      <input type="hidden" name="stu_id" value="<?= $stu_id?>">
                                      </tbody>
                              </table>
                               <center><button class="btn btn-info">Update</button> </center>
                            </form>
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