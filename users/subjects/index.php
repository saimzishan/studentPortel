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

                        <h3 class="box-title">Subjects Details</h3>
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
                                                $q = "SELECT * FROM subjects WHERE samester_id = 1 ";
                                                $r = mysqli_query($dbc,$q);
                                                if (mysqli_num_rows($r) <= 0){
                                                    echo "<p>Comming soon</p>";
                                                }
                                                else {
                                                    $row = mysqli_num_rows($r);
                                                    echo "Total Subjects: ".$row;
                                                }
                                                ?>
                                            </div>
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
                                            <div  style="float: right; color: #00ca6d;">
                                                <?php
                                                $q = "SELECT * FROM subjects WHERE samester_id = 2 ";
                                                $r = mysqli_query($dbc,$q);
                                                if (mysqli_num_rows($r) <= 0){
                                                    echo "<p>Comming soon</p>";
                                                }
                                                else {
                                                    $row = mysqli_num_rows($r);
                                                    echo "Total Subjects: ".$row;
                                                }
                                                ?>
                                            </div>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
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
                                            <div  style="float: right; color: #00ca6d;">
                                                <?php
                                                $q = "SELECT * FROM subjects WHERE samester_id = 3 ";
                                                $r = mysqli_query($dbc,$q);
                                                if (mysqli_num_rows($r) <= 0){
                                                    echo "<p>Comming soon</p>";
                                                }
                                                else {
                                                    $row = mysqli_num_rows($r);
                                                    echo "Total Subjects: ".$row;
                                                }
                                                ?>
                                            </div>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
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
                                            <div  style="float: right; color: #00ca6d;">
                                                <?php
                                                $q = "SELECT * FROM subjects WHERE samester_id = 4 ";
                                                $r = mysqli_query($dbc,$q);
                                                if (mysqli_num_rows($r) <= 0){
                                                    echo "<p>Comming soon</p>";
                                                }
                                                else {
                                                    $row = mysqli_num_rows($r);
                                                    echo "Total Subjects: ".$row;
                                                }
                                                ?>
                                            </div>
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
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="/studentPortel/assets/plugins/jquery/jquery-2.2.3.min.js"></script>
