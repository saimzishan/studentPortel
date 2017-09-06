
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

              <h3 class="box-title">Students Results</h3>
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
                                                <button type="button" class="editBtn btn btn-info btn-small btn-xs" data-backdrop="static" data-keyboard="false" data-id='<?=$row['id']?>' data-name='<?=$row['name']?>' data-f_name='<?=$row['f_name']?>' data-email='<?=$row['email']?>' data-reg_number='<?=$row['reg_number']?>' data-nic='<?=$row['nic']?>' data-phone='<?=$row['phone']?>'>
                                                  Update Result
                                                </button>
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
                                                <button type="button" class="editBtn btn btn-info btn-small btn-xs" data-backdrop="static" data-keyboard="false" data-id='<?=$row['id']?>' data-name='<?=$row['name']?>' data-f_name='<?=$row['f_name']?>' data-email='<?=$row['email']?>' data-reg_number='<?=$row['reg_number']?>' data-nic='<?=$row['nic']?>' data-phone='<?=$row['phone']?>'>
                                                  Update Result
                                                </button>
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
                                                <button type="button" class="editBtn btn btn-info btn-small btn-xs" data-backdrop="static" data-keyboard="false" data-id='<?=$row['id']?>' data-name='<?=$row['name']?>' data-f_name='<?=$row['f_name']?>' data-email='<?=$row['email']?>' data-reg_number='<?=$row['reg_number']?>' data-nic='<?=$row['nic']?>' data-phone='<?=$row['phone']?>'>
                                                  Update Result
                                                </button>
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
                                                <button type="button" class="editBtn btn btn-info btn-small btn-xs" data-backdrop="static" data-keyboard="false" data-id='<?=$row['id']?>' data-name='<?=$row['name']?>' data-f_name='<?=$row['f_name']?>' data-email='<?=$row['email']?>' data-reg_number='<?=$row['reg_number']?>' data-nic='<?=$row['nic']?>' data-phone='<?=$row['phone']?>'>
                                                  Update Result
                                                </button>
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
        <section class="col-lg-5 connectedSortable">
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->