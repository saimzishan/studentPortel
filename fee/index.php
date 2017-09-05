<?php
  session_start();
  $id;
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
              <i class="fa fa-file"></i>

              <h3 class="box-title">Students Fee</h3>
            </div>
            <div class="box-body chat" id="chat-box">
              <!-- chat item -->
              <div class="item">
               <?php  
                    $q = "SELECT * FROM samester";
                    $r = mysqli_query($dbc,$q);

                    if (mysqli_num_rows($r) <= 0) {
                    echo "<p>Please add a teacher</p>";

                     }else { 
                      ?> 
                       <div class="form-group">
                        <label class="control-label col-md-4" for="FatherName">Select samester:</label>
                        <div class="col-sm-8">
                         <select id="stu_id" name="stu_id" style="width:100%; height: 37px;" onchange="getStudents()">
                            <option name="stu_id"> </option> 
                            <?php 

                             while( $row = $r->fetch_assoc() ) { ?>

                              <option value="<?=$row['id']?>"><?=$row['name']?></option>;
                            <?php }
                            ?>   
                            </select> 
                        </div>
                       
                       </div>
                     <?php } 
                ?>    
                <!-- display student data after change if any  -->
              <!--  <script>
                function getStudents() {
                  var x = document.getElementById("stu_id").value;
                   window.location.href = "/studentPortel/fee.php?id="+x;
                  <?php $id = $_GET['id']; echo $id;?>
              }
              </script> -->
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
        <section class="col-lg-5 connectedSortable">
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 