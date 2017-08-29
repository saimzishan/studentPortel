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
              <i class="fa fa-users"></i>

              <h3 class="box-title">Students</h3>
                 <div class="col-sm-12">
                     <!-- Message to save records -->
                    <div calss="mesg" style="  color:#478C61; float:right; width:50%;">
                        <?php  
                          if(isset($_SESSION['msg'])) 
                          {
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                          }
                        ?>
                      </div> <!-- message end   -->
                       <div calss="mesg" style="  color:red; float:right; width:50%;">
                        <?php  
                          if(isset($_SESSION['error'])) 
                          {
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                          }
                        ?>
                      </div> <!-- message end   -->
                  </div>
              <div class="col-md-2" style="float: right;">
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addStudent" data-backdrop="static" data-keyboard="false">Add new student</button>
              </div> 
            </div>
            <div class="box-body chat" id="chat-box">
              <!-- chat item -->  
              <div class="item">  
                  <?php  
                    $q = "SELECT * FROM students ";
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
                                      
                                      <button type="button" class="editBtn btn btn-info btn-small btn-xs" data-backdrop="static" data-keyboard="false" data-id='<?=$row['id']?>' data-name='<?=$row['name']?>' data-f_name='<?=$row['f_name']?>' data-email='<?=$row['email']?>' data-reg_number='<?=$row['reg_number']?>' data-nic='<?=$row['nic']?>' data-phone='<?=$row['phone']?>'>
                                        Edit
                                      </button> |
                                      
                                      <a href="services/deleteUser.php?del=<?php echo$row['id'];?>">
                                        <button type="button" class="btn btn-small btn-xs btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                        <?php } #End of while
                        ?>
                    </table>
              </div>
              <!-- /.item -->
        
            <!-- /.chat -->
            <div class="box-footer">
            
            </div>
          </div>
          <!-- /.box (chat box) -->

        </section>
      
        <section class="col-lg-5 connectedSortable">
        <!-- Add Modal -->
          <div id="addStudent" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content border-radius">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          
                          <h4 class="modal-title">Add New Student</h4>
                      </div>
                      <div class="modal-body">
                          <form action="services/createStudent.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                          
                              <div class="form-group">
                                  <label class="control-label col-sm-4" for="student_name">Student Name:</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" name="name" placeholder="Student name" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-sm-4" for="FatherName">Father Name:</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control number-only" name="fatherName"  placeholder="Father Name" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-sm-4" for="Email">Email</label>
                                  <div class="col-sm-8">
                                      <input type="email" class="form-control" name="email"  placeholder="Email" required>
                                  </div>
                              </div>
                               <div class="form-group">
                                  <label class="control-label col-sm-4" for="Registration">Registration #:</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control number-only" name="registration"  placeholder="Registration #" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-sm-4" for="NIC">NIC #:</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control number-only" name="nic"  placeholder="NIC #" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-sm-4" for="NIC">Phone #:</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control number-only" name="phone"  placeholder="Phone #" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-sm-12 text-center">
                                      <button type="submit" ng-disabled="isDisabled" class="btn btn-primary">Save</button>
                                      <button type="button" class="btn btn-danger" class="close" data-dismiss="modal">Cancel</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>

              </div>
          </div>
          <!--End Add Modal -->


          <!-- Add Modal -->
          <div id="editStudent" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content border-radius">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          
                          <h4 class="modal-title" ng-if="!newData.id">Update Student</h4>
                      </div>
                      <div class="modal-body">
                          <form action="services/updateStudent.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                              <input type="hidden" name="id" id="id" />
                              <div class="form-group">
                                  <label class="control-label col-sm-4" for="student_name">Student Name:</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" name="name" id="textBox1"  placeholder="Student name" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-sm-4" for="FatherName">Father Name:</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control number-only" name="fatherName" id="textBox2"   placeholder="Father Name" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-sm-4" for="Email">Email</label>
                                  <div class="col-sm-8">
                                      <input type="email" class="form-control" name="email"  placeholder="Email" id="textBox3"  required>
                                  </div>
                              </div>
                               <div class="form-group">
                                  <label class="control-label col-sm-4" for="Registration">Registration #:</label>
                                  <div class="col-sm-8">
                                      <input type="text" id="textBox4"  class="form-control number-only" name="registration"  placeholder="Registration #" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-sm-4" for="NIC">NIC #:</label>
                                  <div class="col-sm-8">
                                      <input type="text" id="textBox5"  class="form-control number-only" name="nic"  placeholder="NIC #" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-sm-4" for="NIC">Phone #:</label>
                                  <div class="col-sm-8">
                                      <input type="text" id="textBox6"  class="form-control number-only" name="phone"  placeholder="Phone #" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-sm-12 text-center">
                                      <button type="submit" ng-disabled="isDisabled" class="btn btn-primary">Save</button>
                                      <button type="button" class="btn btn-danger" class="close" data-dismiss="modal">Cancel</button>
                                  </div>
                                  <div class="col-sm-12">
                                      <div class="alert @{{ alert_class }} text-center custom-margin" ng-if="isResponse">
                                      </div>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>

              </div>
          </div>
          <!--End Add Modal -->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(document).on("click", ".editBtn", function(){
      $("#editStudent").modal('show');
      $("#textBox1").val($(this).attr('data-name'));
      $("#textBox2").val($(this).attr('data-f_name'));
      $("#textBox3").val($(this).attr('data-email'));
      $("#textBox4").val($(this).attr('data-reg_number'));
      $("#textBox5").val($(this).attr('data-nic'));
      $("#textBox6").val($(this).attr('data-phone'));
    });
  });
</script>