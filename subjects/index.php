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
              <i class="fa fa-suitcase"></i>

              <h3 class="box-title">Subjects</h3>
                 <div class="col-sm-12">
                     <!-- Message to save records -->
                    <div id="mesg" style="  color:#478C61; float:right; width:50%;">
                        <?php
                          if(isset($_SESSION['msg']))
                          {
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                          }
                        ?>
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
              <div class="col-md-2" style="float: right;">
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addTeacher" data-backdrop="static" data-keyboard="false">Add new Subject</button>
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
                                  $q = "SELECT * FROM subjects WHERE samester_id = 1";
                                  $r = mysqli_query($dbc,$q);

                                  if (mysqli_num_rows($r) <= 0) {
                                      echo "<p>Record Empty</p>";

                                  }else {
                                  ?>
                                  <table class="table table-hover table-bordered">
                                      <thead>
                                      <tr>
                                          <th>Name</th>
                                          <th>Credit hour</th>
                                          <th>Teacher name</th>
                                          <th>Samister</th>
                                          <th>Action</th>
                                      </tr>
                                      </thead>
                                      <?php } ?>
                                      <?php
                                      while( $row = $r->fetch_assoc() ) { ?>
                                          <tbody>
                                          <tr>
                                              <td id="stu_name"><?php
                                                  echo $row['name'];?></td>

                                              <td id="stu_fname"><?php
                                                  echo $row['credit_hour'];?></td>

                                              <td id="teacher_id"><?php
                                                  $temp = "SELECT * FROM teachers WHERE id= '$row[teacher_id]' ";
                                                  // get teacher name for display sepretly
                                                  $teacher_obj =mysqli_query($dbc,$temp);
                                                  while( $temp_teacher = $teacher_obj->fetch_assoc() ) {
                                                      echo $temp_teacher['name']; } ?></td>
                                              <td id="samester_id"><?php echo $row['samester_id'];?></td>
                                              <td>
                                                  <button type="button" class="editBtn btn btn-info btn-small btn-xs" data-backdrop="static" data-keyboard="false" data-id='<?=$row['id']?>' data-name='<?=$row['name']?>' data-credit_hour='<?=$row['credit_hour']?>' data-teacher_id='<?=$row['teacher_id']?>' data-samester_id='<?=$row['samester_id']?>'>
                                                      Edit
                                                  </button> |

                                                  <a href="services/subject/deleteUser.php?del=<?php echo$row['id'];?>">
                                                      <button type="button" class="btn btn-small btn-xs btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
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
                          <div id="collapseTwo" class="panel-collapse collapse ">
                              <div class="panel-body">
                                  <?php
                                  $q = "SELECT * FROM subjects WHERE samester_id = 2";
                                  $r = mysqli_query($dbc,$q);

                                  if (mysqli_num_rows($r) <= 0) {
                                      echo "<p>Record Empty</p>";

                                  }else {
                                  ?>
                                  <table class="table table-hover table-bordered">
                                      <thead>
                                      <tr>
                                          <th>Name</th>
                                          <th>Credit hour</th>
                                          <th>Teacher name</th>
                                          <th>Samister</th>
                                          <th>Action</th>
                                      </tr>
                                      </thead>
                                      <?php } ?>
                                      <?php
                                      while( $row = $r->fetch_assoc() ) { ?>
                                          <tbody>
                                          <tr>
                                              <td id="stu_name"><?php
                                                  echo $row['name'];?></td>

                                              <td id="stu_fname"><?php
                                                  echo $row['credit_hour'];?></td>

                                              <td id="teacher_id"><?php
                                                  $temp = "SELECT * FROM teachers WHERE id= '$row[teacher_id]' ";
                                                  // get teacher name for display sepretly
                                                  $teacher_obj =mysqli_query($dbc,$temp);
                                                  while( $temp_teacher = $teacher_obj->fetch_assoc() ) {
                                                      echo $temp_teacher['name']; } ?></td>
                                              <td id="samester_id"><?php echo $row['samester_id'];?></td>
                                              <td>
                                                  <button type="button" class="editBtn btn btn-info btn-small btn-xs" data-backdrop="static" data-keyboard="false" data-id='<?=$row['id']?>' data-name='<?=$row['name']?>' data-credit_hour='<?=$row['credit_hour']?>' data-teacher_id='<?=$row['teacher_id']?>' data-samester_id='<?=$row['samester_id']?>'>
                                                      Edit
                                                  </button> |

                                                  <a href="services/subject/deleteUser.php?del=<?php echo$row['id'];?>">
                                                      <button type="button" class="btn btn-small btn-xs btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
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
                          <div id="collapseThree" class="panel-collapse collapse ">
                              <div class="panel-body">
                                  <?php
                                  $q = "SELECT * FROM subjects WHERE samester_id = 3";
                                  $r = mysqli_query($dbc,$q);

                                  if (mysqli_num_rows($r) <= 0) {
                                      echo "<p>Record Empty</p>";

                                  }else {
                                  ?>
                                  <table class="table table-hover table-bordered">
                                      <thead>
                                      <tr>
                                          <th>Name</th>
                                          <th>Credit hour</th>
                                          <th>Teacher name</th>
                                          <th>Samister</th>
                                          <th>Action</th>
                                      </tr>
                                      </thead>
                                      <?php } ?>
                                      <?php
                                      while( $row = $r->fetch_assoc() ) { ?>
                                          <tbody>
                                          <tr>
                                              <td id="stu_name"><?php
                                                  echo $row['name'];?></td>

                                              <td id="stu_fname"><?php
                                                  echo $row['credit_hour'];?></td>

                                              <td id="teacher_id"><?php
                                                  $temp = "SELECT * FROM teachers WHERE id= '$row[teacher_id]' ";
                                                  // get teacher name for display sepretly
                                                  $teacher_obj =mysqli_query($dbc,$temp);
                                                  while( $temp_teacher = $teacher_obj->fetch_assoc() ) {
                                                      echo $temp_teacher['name']; } ?></td>
                                              <td id="samester_id"><?php echo $row['samester_id'];?></td>
                                              <td>
                                                  <button type="button" class="editBtn btn btn-info btn-small btn-xs" data-backdrop="static" data-keyboard="false" data-id='<?=$row['id']?>' data-name='<?=$row['name']?>' data-credit_hour='<?=$row['credit_hour']?>' data-teacher_id='<?=$row['teacher_id']?>' data-samester_id='<?=$row['samester_id']?>'>
                                                      Edit
                                                  </button> |

                                                  <a href="services/subject/deleteUser.php?del=<?php echo$row['id'];?>">
                                                      <button type="button" class="btn btn-small btn-xs btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
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
                                            </span>Forth samister</a>
                              </h4>
                          </div>
                          <div id="collapseFour" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <?php
                                  $q = "SELECT * FROM subjects WHERE samester_id = 4";
                                  $r = mysqli_query($dbc,$q);

                                  if (mysqli_num_rows($r) <= 0) {
                                      echo "<p>Record Empty</p>";

                                  }else {
                                  ?>
                                  <table class="table table-hover table-bordered">
                                      <thead>
                                      <tr>
                                          <th>Name</th>
                                          <th>Credit hour</th>
                                          <th>Teacher name</th>
                                          <th>Samister</th>
                                          <th>Action</th>
                                      </tr>
                                      </thead>
                                      <?php } ?>
                                      <?php
                                      while( $row = $r->fetch_assoc() ) { ?>
                                          <tbody>
                                          <tr>
                                              <td id="stu_name"><?php
                                                  echo $row['name'];?></td>

                                              <td id="stu_fname"><?php
                                                  echo $row['credit_hour'];?></td>

                                              <td id="teacher_id"><?php
                                                  $temp = "SELECT * FROM teachers WHERE id= '$row[teacher_id]' ";
                                                  // get teacher name for display sepretly
                                                  $teacher_obj =mysqli_query($dbc,$temp);
                                                  while( $temp_teacher = $teacher_obj->fetch_assoc() ) {
                                                      echo $temp_teacher['name']; } ?></td>
                                              <td id="samester_id"><?php echo $row['samester_id'];?></td>
                                              <td>
                                                  <button type="button" class="editBtn btn btn-info btn-small btn-xs" data-backdrop="static" data-keyboard="false" data-id='<?=$row['id']?>' data-name='<?=$row['name']?>' data-credit_hour='<?=$row['credit_hour']?>' data-teacher_id='<?=$row['teacher_id']?>' data-samester_id='<?=$row['samester_id']?>'>
                                                      Edit
                                                  </button> |

                                                  <a href="services/subject/deleteUser.php?del=<?php echo$row['id'];?>">
                                                      <button type="button" class="btn btn-small btn-xs btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
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

        <section class="col-lg-5 connectedSortable">
        <!-- Add Modal -->
          <div id="addTeacher" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content border-radius">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>

                          <h4 class="modal-title">Add New Subject</h4>
                      </div>
                      <div class="modal-body">
                          <form action="services/subject/createTeacher.php" method="POST" class="form-horizontal" enctype="multipart/form-data">

                              <div class="form-group">
                                  <label class="control-label col-sm-4" for="student_name"> Name:</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" name="name" placeholder="Name" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-sm-4" for="credit_hour">Credit hour:</label>
                                  <div class="col-sm-8">
                                      <input type="number" class="form-control number-only" name="credit_hour"  placeholder="Credit hour" required>
                                  </div>
                              </div>
                               <?php
                                $q = "SELECT * FROM teachers";
                                $r = mysqli_query($dbc,$q);

                                if (mysqli_num_rows($r) <= 0) {
                                echo "<p>Please add a teacher</p>";

                                 }else {
                                  ?>
                                   <div class="form-group">
                                    <label class="control-label col-sm-4" for="FatherName">Select teacher:</label>
                                    <div class="col-sm-8">
                                     <select name="teacher_id" style="width:100%; height: 37px;">
                                        <option name="teacher_id"> </option>
                                        <?php

                                         while( $row = $r->fetch_assoc() ) { ?>

                                          <option value="<?=$row['id']?>"><?=$row['name']?></option>;
                                        <?php }
                                        ?>
                                        </select>
                                    </div>
                                   </div>
                                 <?php } ?>

                               <?php
                                $q = "SELECT * FROM samester";
                                $r = mysqli_query($dbc,$q);

                                if (mysqli_num_rows($r) <= 0) {
                                echo "<p>Please add a teacher</p>";

                                 }else {
                                  ?>
                                   <div class="form-group">
                                    <label class="control-label col-sm-4" for="FatherName">Select samister:</label>
                                    <div class="col-sm-8">
                                     <select name="samester_id" style="width:100%; height: 37px;">
                                        <option name="samester_id"> </option>
                                        <?php

                                         while( $row = $r->fetch_assoc() ) { ?>

                                            <option value="<?=$row['id']?>"><?=$row['name']?></option>;
                                        <?php }
                                        ?>
                                        </select>
                                    </div>
                                   </div>
                                 <?php } ?>
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
          <div id="editTeacher" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content border-radius">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>

                          <h4 class="modal-title" >Update Subject</h4>
                      </div>
                      <div class="modal-body">
                          <form action="services/subject/updateTeacher.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                              <input type="hidden" name="id" id="id" />
                              <div class="form-group">
                                  <label class="control-label col-sm-4" for="student_name">Subject Name:</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" name="name" id="textBox1"  placeholder="Name" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-sm-4" for="credit_hour">Credit hour:</label>
                                  <div class="col-sm-8">
                                      <input type="number" class="form-control number-only" name="credit_hour" id="textBox2"   placeholder="Credit hour" required>
                                  </div>
                              </div>
                              <?php
                                $q = "SELECT * FROM teachers";
                                $r = mysqli_query($dbc,$q);

                                if (mysqli_num_rows($r) <= 0) {
                                echo "<p>Please add a teacher</p>";

                                 }else {
                                  ?>
                                   <div class="form-group">
                                    <label class="control-label col-sm-4" for="FatherName">Select teacher:</label>
                                    <div class="col-sm-8">
                                     <select id="teacher_id" name="teacher_id" style="width:100%; height: 37px;">
                                        <option id="teacher_id" name="teacher_id"> </option>
                                        <?php

                                         while( $row = $r->fetch_assoc() ){ ?>

                                            <option id="teacher_id" selected="" value="<?=$row['id']?>"><?=$row['name']?></option>;
                                        <?php }
                                        ?>
                                        </select>
                                    </div>
                                   </div>
                                 <?php } ?>
                             <?php
                                $q = "SELECT * FROM samester";
                                $r = mysqli_query($dbc,$q);

                                if (mysqli_num_rows($r) <= 0) {
                                echo "<p>Please add a teacher</p>";

                                 }else {
                                  ?>
                                   <div class="form-group">
                                    <label class="control-label col-sm-4" for="FatherName">Select samister:</label>
                                    <div class="col-sm-8">
                                     <select name="samester_id" style="width:100%; height: 37px;">
                                        <option name="samester_id"> </option>
                                        <?php

                                         while( $row = $r->fetch_assoc() ) { ?>

                                            <option id="samester_id" selected="" value="<?=$row['id']?>"><?=$row['name']?></option>;
                                        <?php }
                                        ?>
                                        </select>
                                    </div>
                                   </div>
                                 <?php } ?>
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
    $(document).on("click", ".editBtn", function(){
      $("#editTeacher").modal('show');
      $("#textBox1").val($(this).attr('data-name'));
      $("#textBox2").val($(this).attr('data-credit_hour'));
      $("selected").val($(this).attr('data-teacher_id'));
      $("selected").val($(this).attr('data-samester_id'));
      $("#id").val($(this).attr('data-id'));

    });
     closeMesg();
  });
</script>