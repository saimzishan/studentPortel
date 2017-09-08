<?php
  session_start();
?>
  <!-- Content Wrapper. Contains page content -->
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

              <h3 class="box-title">Students Result</h3>
               <div class="col-sm-12">
                     <!-- Message to save records -->
                    <div id="mesg" style="  color:#478C61; float:right; width:50%;">
                       <p> 
                         <?php  
                            if(isset($_SESSION['msg'])) 
                            {
                              echo $_SESSION['msg'];
                              unset($_SESSION['msg']);
                            }
                          ?>                         
                        </p>
                      </div> <!-- message end   -->
                       <div id="mesg" style="  color:red; float:right; width:50%;">
                        <?php  
                          if(isset($_SESSION['error'])) 
                          {
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                          }
                        ?>
                      </div> <!-- message end   -->
                  </div>
            </div>
            <div class="box-body chat" id="chat-box">
              <!-- chat item -->
              <div class="item">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-th">
                                </span>First samister</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <?php
                                if( isset($_SESSION['stu_id']) ) {
                                    $stu_id = $_SESSION['stu_id'];

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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                                </span>Secund samister</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php
                                if( isset($_SESSION['stu_id']) ) {
                                    $stu_id = $_SESSION['stu_id'];

                                    $q = "SELECT * FROM result2 WHERE stu_id = '$stu_id' ";
                                    $r = mysqli_query($dbc,$q);
                                    if (mysqli_num_rows($r) <= 0){
                                        echo "<p>Record Empty</p>";
                                    }
                                    else {
                                        ?>
                                        <table class="table table-hover table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Data Structure</th>
                                            <th>Object oriented programing</th>
                                            <th>Assembly Language</th>
                                            <th>Data base</th>
                                            <th>Software engineering</th>
                                            <th>Computer Artecture</th>
                                        </tr>
                                        </thead>
                                    <?php } ?>
                                    <tbody>
                                    <?php
                                    while( $row = $r->fetch_assoc() ) { ?>

                                        <tr>
                                            <td id="stu_name"><?php echo $row['ds'];?></td>
                                            <td id="stu_fname"><?php echo $row['oop'];?></td>

                                            <td id="stu_fname"><?php echo $row['assembly'];?></td>
                                            <td id="stu_fname"><?php echo $row['db'];?></td>
                                            <td id="stu_fname"><?php echo $row['se'];?></td>
                                            <td id="stu_fname"><?php echo $row['ca'];?></td>

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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-th">
                                </span>Third samister</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php
                                if( isset($_SESSION['stu_id']) ) {
                                    $stu_id = $_SESSION['stu_id'];

                                    $q = "SELECT * FROM result3 WHERE stu_id = '$stu_id' ";
                                    $r = mysqli_query($dbc,$q);
                                    if (mysqli_num_rows($r) <= 0){
                                        echo "<p>Record Empty</p>";
                                    }
                                    else {
                                        ?>
                                        <table class="table table-hover table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Operating System</th>
                                            <th>C#</th>
                                            <th>Web engineering </th>
                                            <th>Advance dataBase</th>
                                            <th>Networking</th>
                                        </tr>
                                        </thead>
                                    <?php } ?>
                                    <tbody>
                                    <?php
                                    while( $row = $r->fetch_assoc() ) { ?>

                                        <tr>
                                            <td id="stu_name"><?php echo $row['os'];?></td>
                                            <td id="stu_fname"><?php echo $row['c_sharp'];?></td>

                                            <td id="stu_fname"><?php echo $row['web'];?></td>
                                            <td id="stu_fname"><?php echo $row['adb'];?></td>
                                            <td id="stu_fname"><?php echo $row['networking'];?></td>
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-th">
                                </span>Fourth samister</a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                          <div class="panel-body">
                              <?php
                              if( isset($_SESSION['stu_id']) ) {
                                  $stu_id = $_SESSION['stu_id'];

                                  $q = "SELECT * FROM result4 WHERE stu_id = '$stu_id' ";
                                  $r = mysqli_query($dbc,$q);
                                  if (mysqli_num_rows($r) <= 0){
                                      echo "<p>Record Empty</p>";
                                  }
                                  else {
                                      ?>
                                      <table class="table table-hover table-bordered">
                                      <thead>
                                      <tr>
                                          <th>Compiler Construction</th>
                                          <th>Artificial intelligence</th>
                                          <th>E-Commerace</th>
                                          <th>Project</th>
                                      </tr>
                                      </thead>
                                  <?php } ?>
                                  <tbody>
                                  <?php
                                  while( $row = $r->fetch_assoc() ) { ?>

                                      <tr>
                                          <td id="stu_name"><?php echo $row['compiler'];?></td>
                                          <td id="stu_fname"><?php echo $row['ai'];?></td>

                                          <td id="stu_fname"><?php echo $row['e_com'];?></td>
                                          <td id="stu_fname"><?php echo $row['project'];?></td>
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
              </div>
              <!-- /.item -->
        
            <!-- /.chat -->
            <div class="box-footer">
            
            </div>
          </div>
          <!-- /.box (chat box) -->

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script src="/studentPortel/assets/plugins/jquery/jquery-2.2.3.min.js"></script>

<script type="text/javascript">
  function closeMesg() {
          var a;
          a = document.getElementById("mesg");
          setTimeout(function () {
              a.innerHTML = " ";
            }, 2000);
        }
  $(document).ready(function(){
   closeMesg();
  });  
</script>