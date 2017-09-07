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
                              $q = "SELECT * FROM students WHERE cur_samister = 1";
                              $r = mysqli_query($dbc,$q);
                              if (mysqli_num_rows($r) <= 0) {
                              echo "<p>Record Empty</p>";

                               }else { 
                                ?>
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                          <th>Name</th>
                                          <th>Father Name</th>
                                          <th>Email</th>
                                          <th>Reg #</th>                              
                                          <th>NIC #</th>
                                          <th>Phone #</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                    <?php } ?>  
                                  <?php           
                                    while( $row = $r->fetch_assoc() ) { ?>
                                       <tbody>
                                            <tr>
                                              <td id="stu_name"><?php echo $row['name'];?></td>
                                              <td id="stu_fname"><?php echo $row['f_name'];?></td>
                                              <td id="stu_email"><?php echo $row['email'];?></td>
                                              <td id="stu_regNumber"><?php echo $row['reg_number'];?></td>
                                              <td id="stu_nic"><?php echo $row['nic'];?></td>
                                              <td id="stu_phone"><?php echo $row['phone'];?></td>
                                              <td>
                                                 <a href="/studentPortel/resultUpdate.php?stu_id=<?php echo$row['id']?>&samister_id=1&name=<?php echo$row['name']?>&rNumber=<?php echo$row['reg_number']?>">
                                                  <button type="button" class="btn btn-small btn-xs btn-success">Result update </button>
                                                </a>  | 
                                                 <a href="/studentPortel/resultDetails.php?stu_id=<?php echo$row['id']?>&samister_id=1&name=<?php echo$row['name']?>&rNumber=<?php echo$row['reg_number']?>">
                                                  <button type="button" class="btn btn-small btn-xs btn-primary">Result Details </button>
                                                </a> 
                                              </td>
                                            </tr>
                                          </tbody>
                                  <?php } #End of while
                                  ?>
                              </table>
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
                              $q = "SELECT * FROM students WHERE cur_samister = 2";
                              $r = mysqli_query($dbc,$q);

                              if (mysqli_num_rows($r) <= 0) {
                              echo "<p>Record Empty</p>";

                               }else { 
                                ?>
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                          <th>Name</th>
                                          <th>Father Name</th>
                                          <th>Email</th>
                                          <th>Reg #</th>                              
                                          <th>NIC #</th>
                                          <th>Phone #</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                    <?php } ?>  
                                  <?php           
                                    while( $row = $r->fetch_assoc() ) { ?>
                                       <tbody>
                                            <tr>
                                              <td id="stu_name"><?php echo $row['name'];?></td>
                                              <td id="stu_fname"><?php echo $row['f_name'];?></td>
                                              <td id="stu_email"><?php echo $row['email'];?></td>
                                              <td id="stu_regNumber"><?php echo $row['reg_number'];?></td>
                                              <td id="stu_nic"><?php echo $row['nic'];?></td>
                                              <td id="stu_phone"><?php echo $row['phone'];?></td>
                                              <td>
                                                <a href="/studentPortel/resultUpdate.php?stu_id=<?php echo$row['id']?>&samister_id=2&name=<?php echo$row['name']?>&rNumber=<?php echo$row['reg_number']?>">
                                                  <button type="button" class="btn btn-small btn-xs btn-success">Result update </button>
                                                </a> |
                                                <a href="/studentPortel/resultDetails.php?stu_id=<?php echo$row['id']?>&samister_id=2&name=<?php echo$row['name']?>&rNumber=<?php echo$row['reg_number']?>">
                                                  <button type="button" class="btn btn-small btn-xs btn-primary">Result Details </button>
                                                </a> 
                                              </td>
                                            </tr>
                                          </tbody>
                                  <?php } #End of while
                                  ?>
                              </table>
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
                              $q = "SELECT * FROM students WHERE cur_samister = 3";
                              $r = mysqli_query($dbc,$q);

                              if (mysqli_num_rows($r) <= 0) {
                              echo "<p>Record Empty</p>";

                               }else { 
                                ?>
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                          <th>Name</th>
                                          <th>Father Name</th>
                                          <th>Email</th>
                                          <th>Reg #</th>                              
                                          <th>NIC #</th>
                                          <th>Phone #</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                    <?php } ?>  
                                  <?php           
                                    while( $row = $r->fetch_assoc() ) { ?>
                                       <tbody>
                                            <tr>
                                              <td id="stu_name"><?php echo $row['name'];?></td>
                                              <td id="stu_fname"><?php echo $row['f_name'];?></td>
                                              <td id="stu_email"><?php echo $row['email'];?></td>
                                              <td id="stu_regNumber"><?php echo $row['reg_number'];?></td>
                                              <td id="stu_nic"><?php echo $row['nic'];?></td>
                                              <td id="stu_phone"><?php echo $row['phone'];?></td>
                                              <td>
                                                 <a href="/studentPortel/resultUpdate.php?stu_id=<?php echo$row['id']?>&samister_id=3&name=<?php echo$row['name']?>&rNumber=<?php echo$row['reg_number']?>">
                                                  <button type="button" class="btn btn-small btn-xs btn-success">Result update </button>
                                                </a> |
                                                <a href="/studentPortel/resultDetails.php?stu_id=<?php echo$row['id']?>&samister_id=3&name=<?php echo$row['name']?>&rNumber=<?php echo$row['reg_number']?>">
                                                  <button type="button" class="btn btn-small btn-xs btn-primary">Result Details </button>
                                                </a> 
                                              </td>
                                            </tr>
                                          </tbody>
                                  <?php } #End of while
                                  ?>
                              </table>
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
                              $q = "SELECT * FROM students WHERE cur_samister = 4";
                              $r = mysqli_query($dbc,$q);

                              if (mysqli_num_rows($r) <= 0) {
                              echo "<p>Record Empty</p>";

                               }else { 
                                ?>
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                          <th>Name</th>
                                          <th>Father Name</th>
                                          <th>Email</th>
                                          <th>Reg #</th>                              
                                          <th>NIC #</th>
                                          <th>Phone #</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                    <?php } ?>  
                                  <?php           
                                    while( $row = $r->fetch_assoc() ) { ?>
                                       <tbody>
                                            <tr>
                                              <td id="stu_name"><?php echo $row['name'];?></td>
                                              <td id="stu_fname"><?php echo $row['f_name'];?></td>
                                              <td id="stu_email"><?php echo $row['email'];?></td>
                                              <td id="stu_regNumber"><?php echo $row['reg_number'];?></td>
                                              <td id="stu_nic"><?php echo $row['nic'];?></td>
                                              <td id="stu_phone"><?php echo $row['phone'];?></td>
                                              <td>
                                                 <a href="/studentPortel/resultUpdate.php?stu_id=<?php echo$row['id']?>&samister_id=4&name=<?php echo$row['name']?>&rNumber=<?php echo$row['reg_number']?>">
                                                  <button type="button" class="btn btn-small btn-xs btn-success">Result update </button>
                                                </a> |
                                                <a href="/studentPortel/resultDetails.php?stu_id=<?php echo$row['id']?>&samister_id=4&name=<?php echo$row['name']?>&rNumber=<?php echo$row['reg_number']?>">
                                                  <button type="button" class="btn btn-small btn-xs btn-primary">Result Details </button>
                                                </a> 
                                              </td>
                                            </tr>
                                          </tbody>
                                  <?php } #End of while
                                  ?>
                              </table>
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