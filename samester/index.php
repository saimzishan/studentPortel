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
              <i class="fa fa-university"></i>

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
            </div>
            <div class="box-body chat" id="chat-box">
              <!-- chat item -->  
              <div class="item">  
                  <?php  
                    $q = "SELECT * FROM samester";
                    $r = mysqli_query($dbc,$q);

                    if (mysqli_num_rows($r) <= 0) {
                    echo "<p>Record Empty</p>";

                     }else { 
                      ?>
                      <table class="table table-hover table-bordered">
                          <thead>
                              <tr>
                                <th>Name</th>
                                <th>Fee</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                          <?php } ?>  
                        <?php           
                          while( $row = $r->fetch_assoc() ) { ?>
                             <tbody>
                                  <tr>
                                    <td id="name"><?php
                                     echo $row['name'];?></td>

                                    <td id="fee"><?php
                                     echo $row['fee'];?></td>
                                    <td>                                      
                                      <button type="button" class="editBtn btn btn-info btn-small btn-xs" data-backdrop="static" data-keyboard="false" data-id='<?=$row['id']?>' data-name='<?=$row['name']?>' data-fee='<?=$row['fee']?>'>
                                        Edit
                                      </button> 
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
          <div id="editTeacher" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content border-radius">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          
                          <h4 class="modal-title" >Update Samister</h4>
                      </div>
                      <div class="modal-body">
                          <form action="services/samister/updateSamister.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                              <input type="hidden" name="id" id="id" />
                              <div class="form-group">
                                  <label class="control-label col-sm-4" for="student_name">Samister Name:</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" name="fee" readonly id="textBox1"  placeholder="Name" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-sm-4" for="credit_hour">Samister fee:</label>
                                  <div class="col-sm-8">
                                      <input type="number" class="form-control number-only" name="fee" id="textBox2"   placeholder="Credit hour" required>
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
      $("#textBox2").val($(this).attr('data-fee'));
      $("#id").val($(this).attr('data-id'));

    });
     closeMesg();
  });
</script>