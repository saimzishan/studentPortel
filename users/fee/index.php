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
              <i class="fa fa-file"></i>

              <h3 class="box-title">Students Fee</h3>
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
                                <div  style="float: right; color: #00ca6d;">
                                    <?php
                                    $q = "SELECT * FROM samester WHERE id = 1 ";
                                    $r = mysqli_query($dbc,$q);
                                    if (mysqli_num_rows($r) <= 0){
                                        echo "<p>Record Empty</p>";
                                    }
                                    else {
                                        $row = $r->fetch_array();
                                        echo "Total fee: ".$row['fee'];
                                    }
                                    ?>
                                </div>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <?php
                                if( isset($_SESSION['stu_id']) ) {
                                    $stu_id = $_SESSION['stu_id'];
                                    $q = "SELECT * FROM stu_fee WHERE stu_id = '$stu_id' AND samister_id = 1 ";
                                    $r = mysqli_query($dbc,$q);
                                    if (mysqli_num_rows($r) <= 0){
                                        echo "<p>Record Empty</p>";
                                    }
                                    else {
                                        ?>
                                        <h3>Paid Fee Details</h3>
                                        <table class="table table-hover table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Paid on Date</th>
                                            <th>Paid Fee</th>
                                        </tr>
                                        </thead>
                                    <?php } ?>
                                    <tbody>
                                    <?php $temp =0;
                                    while( $row = $r->fetch_assoc() ) { ?>

                                        <tr>
                                            <td id="stu_name"><?php echo $row['month'];?></td>
                                            <td id="stu_fname"><?php $temp += $row['amount']; echo $row['amount'];?></td>
                                        </tr>

                                    <?php } #End of while
                                    ?>
                                    </tbody>
                                    <tr>
                                        <td>Total Paid Fee</td>
                                        <td><?php echo $temp; ?></td>
                                    </tr>
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
                                <div  style="float: right; color: #00ca6d;">
                                    <?php
                                    $q = "SELECT * FROM samester WHERE id = 2 ";
                                    $r = mysqli_query($dbc,$q);
                                    if (mysqli_num_rows($r) <= 0){
                                        echo "<p>Record Empty</p>";
                                    }
                                    else {
                                        $row = $r->fetch_array();
                                        echo "Total fee: ".$row['fee'];
                                    }
                                    ?>
                                </div>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php
                                if( isset($_SESSION['stu_id']) ) {
                                    $stu_id = $_SESSION['stu_id'];
                                    $q = "SELECT * FROM stu_fee WHERE stu_id = '$stu_id' AND samister_id = 2 ";
                                    $r = mysqli_query($dbc,$q);
                                    if (mysqli_num_rows($r) <= 0){
                                        echo "<p>Record Empty</p>";
                                    }
                                    else {
                                        ?>
                                        <table class="table table-hover table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Fee</th>
                                        </tr>
                                        </thead>
                                    <?php } ?>
                                    <tbody>
                                    <?php $temp =0;
                                    while( $row = $r->fetch_assoc() ) { ?>

                                        <tr>
                                            <td id="stu_name"><?php echo $row['month'];?></td>
                                            <td id="stu_fname"><?php $temp += $row['amount']; echo $row['amount'];?></td>
                                        </tr>

                                    <?php } #End of while
                                    ?>
                                    </tbody>
                                    <tr>
                                        <td>Total Paid Fee</td>
                                        <td><?php echo $temp; ?></td>
                                    </tr>
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
                                <div  style="float: right; color: #00ca6d;">
                                    <?php
                                    $q = "SELECT * FROM samester WHERE id = 3 ";
                                    $r = mysqli_query($dbc,$q);
                                    if (mysqli_num_rows($r) <= 0){
                                        echo "<p>Record Empty</p>";
                                    }
                                    else {
                                        $row = $r->fetch_array();
                                        echo "Total fee: ".$row['fee'];
                                    }
                                    ?>
                                </div>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php
                                if( isset($_SESSION['stu_id']) ) {
                                    $stu_id = $_SESSION['stu_id'];
                                    $q = "SELECT * FROM stu_fee WHERE stu_id = '$stu_id' AND samister_id = 3 ";
                                    $r = mysqli_query($dbc,$q);
                                    if (mysqli_num_rows($r) <= 0){
                                        echo "<p>Record Empty</p>";
                                    }
                                    else {
                                        ?>
                                        <table class="table table-hover table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Fee</th>
                                        </tr>
                                        </thead>
                                    <?php } ?>
                                    <tbody>
                                    <?php $temp =0;
                                    while( $row = $r->fetch_assoc() ) { ?>

                                        <tr>
                                            <td id="stu_name"><?php echo $row['month'];?></td>
                                            <td id="stu_fname"><?php $temp += $row['amount']; echo $row['amount'];?></td>
                                        </tr>

                                    <?php } #End of while
                                    ?>
                                    </tbody>
                                    <tr>
                                        <td>Total Paid Fee</td>
                                        <td><?php echo $temp; ?></td>
                                    </tr>
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
                                <div  style="float: right; color: #00ca6d;">
                                    <?php
                                    $q = "SELECT * FROM samester WHERE id = 4 ";
                                    $r = mysqli_query($dbc,$q);
                                    if (mysqli_num_rows($r) <= 0){
                                        echo "<p>Record Empty</p>";
                                    }
                                    else {
                                        $row = $r->fetch_array();
                                        echo "Total fee: ".$row['fee'];
                                    }
                                    ?>
                                </div>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                          <div class="panel-body">
                              <?php
                              if( isset($_SESSION['stu_id']) ) {
                                  $stu_id = $_SESSION['stu_id'];
                                  $q = "SELECT * FROM stu_fee WHERE stu_id = '$stu_id' AND samister_id = 4 ";
                                  $r = mysqli_query($dbc,$q);
                                  if (mysqli_num_rows($r) <= 0){
                                      echo "<p>Record Empty</p>";
                                  }
                                  else {
                                      ?>
                                      <table class="table table-hover table-bordered">
                                      <thead>
                                      <tr>
                                          <th>Date</th>
                                          <th>Fee</th>
                                      </tr>
                                      </thead>
                                  <?php } ?>
                                  <tbody>
                                  <?php $temp =0;
                                  while( $row = $r->fetch_assoc() ) { ?>

                                      <tr>
                                          <td id="stu_name"><?php echo $row['month'];?></td>
                                          <td id="stu_fname"><?php $temp += $row['amount']; echo $row['amount'];?></td>
                                      </tr>

                                  <?php } #End of while
                                  ?>
                                  </tbody>
                                  <tr>
                                      <td>Total Paid Fee</td>
                                      <td><?php echo $temp; ?></td>
                                  </tr>
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
      $("#addfee").modal('show');
      $("#textBox1").val($(this).attr('data-name'));
      $("#stu_id").val($(this).attr('data-id'));
      $("#samister_id").val($(this).attr('data-samister'));
    }); 
   closeMesg();
  });
   
</script>